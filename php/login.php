<?php
require_once 'config.php';
require_once 'db.php';
$db = connect(DB_SERVER, USER, PASSWORD, DB_NAME);

$admNumber = $_POST["adm_number"];
$password = $_POST["password"];

ob_start();
session_start();

$check = 0;

$my_file = "StudentData.txt";
if (file_exists($my_file)) {

    //  $obtainedData = json_decode(file_get_contents($my_file), true);
    $data = selectRecords($db);

    // $keys = array_keys($obtainedData);

    //select and display each student
    foreach ($data as  $val) {
        if ($val['adm_number'] === $admNumber) {
            $check++;
            if ($val['pass'] === $password) {
                $_SESSION['firstName'] = $val['fname'];
                $_SESSION['lastName'] = $val['lname'];
                $_SESSION['profilePhoto'] = $val['profile_picture'];
                $_SESSION['admissionNum'] = $val['adm_number'];
                $_SESSION['password'] = $val['pass'];
                echo "
                    <script>
                    window.location.href='../html/userprofile.php';
                    </script>";

                // echo " <img class=\"rounded-circle\" src=\"../" . $val['profile photo'] . "\" height=\"200\" width=\"200\" alt=\"University Logo\">";
                // echo " </div>";
                // echo     "<div class=\"col-sm\"></div>";
                // echo       "</div>";
                // echo      "<div class=\"row\">";
                // echo "<div class=\"col-sm-3\"></div>";
                // echo "<div class=\"col-sm-7\">";
                // echo "<h4>Welcome,  " . $val['first name'] . " " . $val["last name"] . "</h3>";
                // $my_file = "StudentData.txt";
                // $firstname =
                //     $lastname = $val['last name'];
                // $admission_number = $val['adm number'];
                // $p_photo = $val['profile photo'];
                // $pass_word = $val['password'];

                // echo "<div class=\"row\">";
                // echo "<div class=\"col-sm-2\"></div>";
                // echo "<div class=\"col-sm\">";

                // echo  "<form action=\"userpdf.php\" method=\"POST\">";
                // echo     "<input type = \"hidden\" value= \" " . $firstname . "\"  name=\"first_name\">";
                // echo     "<input type = \"hidden\" value= \" " . $lastname . "\"  name=\"last_name\">";
                // echo     "<input type = \"hidden\" value= \" " . $admission_number . "\"  name=\"admission_number\">";
                // echo     "<input type = \"hidden\" value= \" " . $p_photo . "\"  name=\"profile_photo\">";
                // echo     "<input type = \"hidden\" value= \" " . $pass_word . "\"  name=\"password\">";
                // echo     "<input type=\"submit\"  class=\"btn btn-primary btn-lg btn-block\" value=\"Download Profile\"  name=\"pdf\">";
                // echo "</form>";
                // echo "</div>";
                // echo "<div class=\"col-sm\"></div>";
                // echo "</div>";

                break;
            } else {
                echo "
                        <script>
                        alert('Check password and try again');
                        window.location.href='../html/SIGNIN.html';
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

//check if admin exitsts and display all students details

$adminData = selectForAdmin($db);
$check2 = 0;

foreach ($adminData as $val) {
    if ($val['adm_number'] === "admin") {
        $check2++;
        if ($val['pass'] === $password) {
            $_SESSION['firstName'] = $val['fname'];
            $_SESSION['lastName'] = $val['lname'];
            $_SESSION['profilePhoto'] = $val['profile_picture'];
            $_SESSION['admissionNum'] = $val['adm_number'];
            $_SESSION['password'] = $val['pass'];
          //  selectRecords($db);
            echo "
                    <script>
                    window.location.href='../html/adminProfile.php';
                    </script>";
        } else {
            echo "
                        <script>
                        alert('Check password and try again');
                        window.location.href='../html/SIGNIN.html';
                        </script>";
            break;
        }
    }
}
if ($check2 === 0) {
    echo "User Has not Signed up";
}
