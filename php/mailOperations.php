<?php

use PHPMailer\PHPMailer\PHPMailer;

require '../src/Exception.php';

require_once '../src/PHPMailer.php';
require '../src/SMTP.php';
require_once 'config.php';
require_once 'db.php';


function sendMail($send_to)
{
    $db = connect(DB_SERVER, USER, PASSWORD, DB_NAME);
    //session_start();

    $adminData = selectRecords($db);
    foreach ($adminData as $val) {
        $_SESSION['completion'] = $val['completion'];
    }



    $fileName = '../html/studentCard.pdf';
    if (is_file($fileName)) {
        $handle = fopen($fileName, 'w');
        $fname = "First Name:" . $_SESSION["firstName"] . "\n";
        fwrite($handle, $fname);
        $lname = "Last Name:" . $_SESSION["lastName"] . "\n";
        fwrite($handle, $lname);
        $admNo = "Admission Number:" . $_SESSION["admissionNum"] . "\n";
        fwrite($handle, $admNo);
        $courseName = "Course Name:" . $_SESSION['course'];
        fwrite($handle, $courseName);
        fclose($handle);
    }

    $mail = new PHPMailer();

    $mail->setFrom('munenevincent49@gmail.com');
    $mail->addAddress($send_to);
    $mail->Subject = 'Student School Card';
    $mail->isHTML(true);
    $mail->Body = '<html><strong>Maseno University Successful Enrollment</strong></html>' . "\n";
    $mail->addAttachment($fileName, 'Student Id Card');

    $mail->isSMTP();

    //configurations
    $mail->Host = 'smtp.gmail.com';


    $mail->SMTPAuth = TRUE;


    $mail->SMTPSecure = 'tls';


    $mail->Username = 'munenevincent49@gmail.com';


    $mail->Password = 'VincentMuneneEmailPassword7';


    $mail->Port = 587;
    if (!($mail->send())) {

        // echo json_encode("fail");
    } else {
        // echo json_encode("Success");

        updateCompletion($db, $_SESSION['userid'], $_POST['complete']);
    }
}
