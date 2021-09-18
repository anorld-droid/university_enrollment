<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body class="home">
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card bg-light mb-3">
                    <div class="card-header text-center">
                        <h5>User Profile</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm"></div>
                            <div class="col-sm">
                                <?php
                                require_once 'database.php';
                                $fileInitialSize  = filesize("StudentData.txt");

                                if (!empty($_POST['fName'])) {

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

                                    $fName = $_POST["fName"];
                                    $lName = $_POST["lName"];
                                    $adm_number = $_POST["admNumber"];
                                    $pass = $_POST["pass"];
                                    $profile_pic = $target_file;
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
                                                </script>";
                                        }
                                        fclose($file);
                                    } else {
                                        echo "file does not exist";
                                    }
                                    // echo "SUCCEFULLY REGISTERED" . '<br>';

                                    $sql = "INSERT INTO student_data(fname,lname,profile_picture,adm_number,pass) VALUES('$fName','$lName','$profile_pic', '$adm_number','$pass')";

                                    if (mysqli_query($conn, $sql)) {
                                        echo "Records inserted successfully.";
                                    } else {
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                                    }
                                } else {
                                }
                                ?>

                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>

                </div>
                <div class="col-sm"></div>
            </div>
        </div>
        <script>
            //  JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    $('input[type="file"]').change(function(e) {
                        var fileName = e.target.files[0].name;
                        $('.custom-file-label').html(fileName);
                    });
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>