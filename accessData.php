<?php

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
                        echo "Welcome " . $entry_array[$i - 2] . " " . $entry_array[$i - 1];
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
