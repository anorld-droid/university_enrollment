<?php
function connect($server, $user, $password, $db_name)
{
    $db = new mysqli(
        $server,
        $user,
        $password,
        $db_name
    );

    if ($db->connect_error) {
        echo "cannot connect";
    }
    return $db;
}
function selectRecords(mysqli $db)
{
    $data = [];
    $sql = "SELECT * FROM student_data";
    $resultSet = $db->query($sql);
    while ($row = $resultSet->fetch_assoc()) {
        $data[] = $row;
    }


    //var_dump($data);
    return $data;
}


function insertRecords(mysqli $db, array $record)
{
    $sql = "INSERT INTO student_data(`fname`,`lname`,`profile_picture`,`adm_number`,`pass`,`status`,`completion`) VALUES('$record[0]','$record[1]','$record[2]','$record[3]','$record[4]','$record[5]','$record[6]')";


    if ($db->query($sql)) {
        echo "records inserted succefully";
    } else {
        echo "failed";
    }
}
