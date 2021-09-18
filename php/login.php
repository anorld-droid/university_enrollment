<?php


$admNumber = $_POST["adm_number"];
$password = $_POST["password"];

ob_start();
session_start();

$check = 0;
$my_file = "StudentData.txt";
if (file_exists($my_file)) {

    $obtainedData = json_decode(file_get_contents($my_file), true);


    // $keys = array_keys($obtainedData);
    foreach ($obtainedData as  $val) {
        if ($val['adm number'] === $admNumber) {
            $check++;
            if ($val['password'] === $password) {
                $_SESSION['firstName'] = $val['first name'];
                $_SESSION['lastName'] = $val['last name'];
                $_SESSION['profilePhoto'] = $val['profile photo'];
                $_SESSION['admissionNum'] = $val['adm number'];
                $_SESSION['password'] = $val['password'];
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
