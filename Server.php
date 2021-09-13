<?php
$fileInitialSize  = filesize("StudentData.txt");

if (!empty($_POST['fName'])) {

    $target_dir = "uploads/";
    $filename = $_FILES["profilePhoto"]["name"];
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
            window.location.href='SIGNUP.html';
            </script>";
        exit();
    }

    if (file_exists($filename)) {
        echo "
        <script>
        alert('File already exists');
        window.location.href='SIGNUP.html';
        </script>";
        exit();
    }
    if ($_FILES["profilePhoto"]["size"] > 500000) {
        echo "
        <script>
        alert('File is too large');
        window.location.href='SIGNUP.html';
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
       window.location.href='SIGNUP.html';
       </script>";
        exit();
    }

    if (move_uploaded_file($tempname, $target_file)) {
        echo "
            <script>
            alert('File uploaded');
            window.location.href='SIGNUP.html';
            </script>";
    }
    $profile_photo;
    $myData = array(
        "first name" => $_POST["fName"],
        "last name" => $_POST["lName"], "adm number" => $_POST["admNumber"], "password" => $filename, "profile photo" => $target_file
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
            window.location.href='SIGNIN.html';
            </script>";
        }
        fclose($file);
    } else {
        echo "file does not exist";
    }
    // echo "SUCCEFULLY REGISTERED" . '<br>';
} else {

    $admNumber = $_POST["adm_number"];
    $password = $_POST["password"];



    function search($input, $input2)
    {

        $check = 0;
        $my_file = "StudentData.txt";
        if (file_exists($my_file)) {

            $obtainedData = json_decode(file_get_contents($my_file), true);


            // $keys = array_keys($obtainedData);
            foreach ($obtainedData as  $val) {
                if ($val['adm number'] === $input) {
                    $check++;
                    if ($val['password'] === $input2) {
                        echo "<h3>Logged In as " . $val['first name'] . " " . $val["last name"] . "</h3>";
                        break;
                    } else {
                        echo "
                            <script>
                            alert('Check password and try again');
                            window.location.href='SIGNIN.html';
                            </script>";
                        break;
                    }
                }
            }

            if ($check === 0) {
                echo "User Has not Signed up";
            }
        } else {
            echo "file does not exist";
        }
    }

    search($admNumber, $password);
}
