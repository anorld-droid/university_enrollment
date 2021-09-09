<?php
$fileInitialSize  = filesize("StudentData.txt");

if (!empty($_POST['fName'])) {

    $myData = array("first name" => $_POST["fName"], "last name" => $_POST["lName"], "adm number" => $_POST["admNumber"], "password" => $_POST["pass"]);
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
            echo "SUCCEFULLY REGISTERED" . '<br>';
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
                        echo "Logged In as " . $val['first name'] . " " . $val["last name"];
                        break;
                    } else {
                        echo "Check password and try again";
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
