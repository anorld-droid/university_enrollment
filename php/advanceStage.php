<?php
require_once 'config.php';
require_once 'db.php';
$db = connect(DB_SERVER, USER, PASSWORD, DB_NAME);
session_start();

$adminData = selectRecords($db);
foreach ($adminData as $val) {
    $_SESSION['completion'] = $val['completion'];
}
// if ($_POST['enroll'] === "Proceed") {
//     $_SESSION["profilePhoto"] =  $_POST["profilePhoto"];
//     $_SESSION["firstName"] = $_POST['firstName'];
//     $_SESSION["lastName"] = $_POST['lastName'];
//     $_SESSION["admissionNum"] = $_POST['admissionNum'];
//     $_SESSION["password"] = $_POST['password'];
//     $_SESSION["userid"] = $_POST['userid'];
//     echo json_encode("Proceed");
// } else
if ($_POST['stage'] === "1") {
    $_SESSION["profilePhoto"] =  $_POST["profilePhoto"];
    $_SESSION["firstName"] = $_POST['firstName'];
    $_SESSION["lastName"] = $_POST['lastName'];
    $_SESSION["admissionNum"] = $_POST['admissionNum'];
    $_SESSION["password"] = $_POST['password'];
    $_SESSION["userid"] = $_POST['userid'];
    $_SESSION["email"] = $_POST['email'];
    $_SESSION['course'] = $_POST['program'];
    updateCompletion($db, $_POST['userid'], $_POST['complete']);
    $courseid = selectFromCourses($db, $_POST['program']);
    insert_to_enrollment_table($db, $_SESSION['userid'], $courseid, $_SESSION['email']);
    echo json_encode("Success");
} elseif ($_POST['stage'] === "2") {
    updateCompletion($db, $_POST['uid'], $_POST['complete']);
    echo json_encode("Success");
} elseif ($_POST['stage'] === "3") {
    if ($_POST['residence'] == "true") {
        updateCompletion($db, $_POST['uid'], $_POST['complete']);
        echo json_encode("Success");
    } else {
        if ($_POST['cf_fee'] < "12000") {
            echo json_encode("Fail");

            // echo "
            //             <script>
            //             alert('Fees Must Be Greater than 12000');
            //            
            //             </script>";
        } else {
            updateCompletion($db, $_POST['uid'], $_POST['complete']);

            echo json_encode("Success");
        }
    }
} else {
    // $to =  "munenevincent49@gmail.com";
    // $subject = "Maseno University Successful Enrollment.";

    // $message = "<b>This is HTML message.</b>";
    // $message .= "<h1>This is headline.</h1>";

    // $header = "From:mulindipatrice00@gmail.com \r\n";
    // // $header .= "Cc:afgh@somedomain.com \r\n";
    // $header .= "MIME-Version: 1.0\r\n";
    // $header .= "Content-type: text/html\r\n";

    // $retval = mail($to, $subject, $message, $header);

    // if ($retval == true) {
    updateCompletion($db, $_POST['uid'], $_POST['complete']);
    echo json_encode("Success");

    // echo "<script>
    // alert(\"Message Sent Successfully\");
    // </script>";

    // } else {
    // echo json_encode("Fail");

    // echo "<script>
    // alert(\"Message could not be sent..\");
    // </script>";
    // }
    // echo "
    //       <script>
    //                     window.location.href='../html/tables.php';
    //                     </script>";
}
