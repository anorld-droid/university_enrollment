<?php
if (!empty($_POST['fName'])) {
    $fName = $_POST["fName"] . "#";
    $lName = $_POST["lName"] . "#";
    $adm_number = $_POST["admNumber"] . "#";
    $password = $_POST["pass"] . "#";

    $my_file = "StudentData.txt";



    if (file_exists($my_file)) {
        $fp = fopen($my_file, "a") or die("Fail to open file");
        $txt = $fName;
        fwrite($fp, $txt);
        $txt = $lName;
        fwrite($fp, $lName);
        $txt = $adm_number;
        fwrite($fp, $txt);
        $txt = $password;
        fwrite($fp, $txt);

        fclose($fp);
    } else {
        echo "file does not exist";
    }
    echo "SUCCEFULLY REGISTERED" . '<br>';

    $obj = array("first name" => $_POST["fName"], "last name" => $_POST["lName"], "adm number" => $_POST["admNumber"], "password" => $_POST["pass"]);
    echo json_encode($obj);
} else {

    $admNumber = $_POST["adm_number"];
    $password = $_POST["password"];



    function search($input, $input2)
    {
        $check = 0;
        $my_file = "StudentData.txt";
        if (file_exists($my_file)) {
            $handle = fopen($my_file, "r");
            if ($handle) {
                while (!feof($handle)) {
                    $entry_array = explode("#", fgets($handle));
                    for ($i = 0; $i < count($entry_array); $i++) {
                        if ($entry_array[$i] === $input && $entry_array[$i + 1] === $input2) {
                            echo "Welcome " . $entry_array[$i - 2] . " " . $entry_array[$i - 1] . "<br>";

                            $obj =
                                array("first name" => $entry_array[$i - 2], "last name" => $entry_array[$i - 1],  "adm Number" => $entry_array[$i], "password" => $entry_array[$i + 1]);
                            echo json_encode($obj);
                            $check += 1;
                        }
                    }
                    if ($check === 0) {
                        echo "User does not exist or has entered wrong details";
                    }
                }

                fclose($handle);
            }
            return NULL;
        } else {
            echo "file does not exist";
        }
    }

    search($admNumber, $password);
}
