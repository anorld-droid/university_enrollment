<?php

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
