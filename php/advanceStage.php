<?php
require_once 'config.php';
require_once 'db.php';
$db = connect(DB_SERVER, USER, PASSWORD, DB_NAME);
session_start();

$adminData = selectRecords($db);
foreach ($adminData as $val) {
    $_SESSION['completion'] = $val['completion'];
}




if ($_POST['stage'] === "1") {
    updateCompletion($db, $_POST['userid'], $_POST['complete']);
    $_SESSION["profilePhoto"] =  $_POST["profilePhoto"];
    $_SESSION["firstName"] = $_POST['firstName'];
    $_SESSION["lastName"] = $_POST['lastName'];
    $_SESSION["admissionNum"] = $_POST['admissionNum'];
    $_SESSION["password"] = $_POST['password'];
    $_SESSION["userid"] = $_POST['userid'];
    $_SESSION["email"] = $_POST['email'];
    echo json_encode("Success");
} elseif ($_POST['stage'] === "2") {
    updateCompletion($db, $_POST['uid'], $_POST['complete']);
    // echo $_SESSION['completion'] += '25';
    echo "
                        <script>
                        window.location.href='../html/stagethree.php';
                        </script>";
} elseif ($_POST['stage'] === "3") {
    if (isset($_POST['residence'])) {
        updateCompletion($db, $_POST['uid'], $_POST['complete']);

        echo "
                        <script>
                        window.location.href='../html/stagefour.php';
                        </script>";
    } else {
        if ($_POST['cf_fee'] < "12000") {
            echo "
                        <script>
                        alert('Fees Must Be Greater than 12000');
                        window.location.href='../html/stagethree.php';
                        </script>";
        } else {
            updateCompletion($db, $_POST['uid'], $_POST['complete']);

            echo "
                        <script>
                        window.location.href='../html/stagefour.php';
                        </script>";
        }
    }
} else {
    $to =  "munenevincent49@gmail.com";
    $subject = "Maseno University Successful Enrollment.";

    $message = "<b>This is HTML message.</b>";
    $message .= "<h1>This is headline.</h1>";

    $header = "From:mulindipatrice00@gmail.com \r\n";
    // $header .= "Cc:afgh@somedomain.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail($to, $subject, $message, $header);

    if ($retval == true) {
        echo "<script>
        alert(\"Message Sent Successfully\");
        </script>";
        updateCompletion($db, $_POST['uid'], $_POST['complete']);
    } else {
        echo "<script>
        alert(\"Message could not be sent..\");
        </script>";
    }
    // echo "
    //       <script>
    //                     window.location.href='../html/tables.php';
    //                     </script>";
}
