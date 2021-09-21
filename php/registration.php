<?php
require_once 'config.php';
require_once 'db.php';
$db = connect(DB_SERVER, USER, PASSWORD, DB_NAME);




$fileInitialSize  = filesize("StudentData.txt");
if (isset($_POST['fName'])) {

    $target_dir = "../uploads/";
    $newFileName = $_POST['fname'] . "'s profile picture";
    $target_file = $target_dir . basename($_FILES["profilePhoto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["profilePhoto"]["tmp_name"]);
    $tempname = $_FILES["profilePhoto"]["tmp_name"];
    $imageTypes = array("jpg", "png", "jpeg");

    if ($check === false) {
        echo "
            <script>
                alert('File is not an image');
                window.location.href='../html/SIGNUP.html';
                 </script>";
        exit();
    }

    if (file_exists($filename)) {
        echo "
                                            <script>
                                            alert('File already exists');
                                            window.location.href='../html/SIGNUP.html';
                                            </script>";
        exit();
    }
    if ($_FILES["profilePhoto"]["size"] > 500000) {
        echo "
                                            <script>
                                            alert('File is too large');
                                            window.location.href='../html/SIGNUP.html';
                                            </script>";
        exit();
    }
    if (
        $imageFileType !== "jpg" &&
        $imageFileType !== "png" &&
        $imageFileType !== "jpeg"
    ) {
        echo "
                                            <script>
                                            alert('Only, jpg, png and jpeg formats are allowed.');
                                            window.location.href='../html/SIGNUP.html';
                                            </script>";
        exit();
    }

    if (move_uploaded_file($tempname, $target_file)) {
        echo "
                                            <script>
                                            alert('File uploaded');
                                            window.location.href='../html/SIGNIN.html';
                                            </script>";
    }
    $profile_photo;
    $myData = array(
        "first name" => $_POST["fName"],
        "last name" => $_POST["lName"], "adm number" => $_POST["admNumber"],
        "password" => $_POST["pass"], "profile photo" => $target_file
    );

    //  $json = json_encode($myData);



    $my_file = "StudentData.txt";

    $arr_data = array();

    if (file_exists($my_file)) {

        $file = fopen($my_file, 'a');
        $jsondata = file_get_contents($my_file);
        $arr_data = json_decode($jsondata, true);
        $arr_data[] = $myData;


        $jsondata = json_encode($arr_data);
        file_put_contents($my_file, $jsondata);
        $newFileSize = fstat($file);
        if ($newFileSize['size'] > $fileInitialSize) {
            echo "
                <script>
                alert('SUCCEFULLY REGISTERED');
                window.location.href='../html/SIGNIN.html';
                </script>
                    ";
        }
        fclose($file);
    } else {
        echo "file does not exist";
    }
    // echo "SUCCEFULLY REGISTERED" . '<br>';
    //database operation starts here




    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $adm_number = $_POST["admNumber"];
    $pass = $_POST["pass"];
    $profile_pic = $target_file;
    $status = "pending";
    $completion = 0;
    // $admin = strval($adm_number);



    $adminName = strtolower($adm_number);
    if ($adminName === "admin") {

        $adminValues =
            array($fName, $lName, $profile_pic, $adm_number, $pass);

        insertToAdmin($db, $adminValues);
    } else {
        $values = array($fName, $lName, $profile_pic, $adm_number, $pass, $status, $completion);
        insertRecords($db, $values);
    }
}
