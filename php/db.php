<?php
function connect($server, $user, $password, $db_name)
{
    $db = new mysqli(
        $server,
        $user,
        $password
    );

    if ($db->connect_error) {
        echo "cannot connect";
    }
    $sql = "CREATE DATABASE IF NOT EXISTS student_details";

    if ($db->query($sql) === true) {
        $db = new mysqli(
            $server,
            $user,
            $password,
            $db_name
        );
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
    }
    $sql1 = "CREATE TABLE IF NOT EXISTS student_data (ID int(11) AUTO_INCREMENT,
                      fname varchar(255) NOT NULL,
                      lname varchar(255) NOT NULL,
                      profile_picture longblob NOT NULL,
                      adm_number varchar(255) NOT NULL,
                      pass varchar (255) NOT NULL,
                       `status` varchar (255) NOT NULL,
                     completion int NOT NULL,
                      PRIMARY KEY  (ID))";
    if ($db->query($sql1) === TRUE) {
        // echo "Database and Table Online";
    }
    $sql2 = "CREATE TABLE IF NOT EXISTS admin_data (ID int(11) AUTO_INCREMENT,
                      fname varchar(255) NOT NULL,
                      lname varchar(255) NOT NULL,
                      profile_picture longblob NOT NULL,
                      adm_number varchar(255) NOT NULL,
                      pass varchar (255) NOT NULL,
                      PRIMARY KEY  (ID))";
    if ($db->query($sql2) === TRUE) {
        // echo "Database and Table Online";
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
function deleteRecords(mysqli $db,  $id)
{
    $sql = "DELETE FROM student_data WHERE `ID` = '$id' ";
    $db->query($sql);
}

function selectForAdmin(mysqli $db)
{
    $data = [];
    $sql = "SELECT * FROM admin_data";
    $resultSet = $db->query($sql);
    while ($row = $resultSet->fetch_assoc()) {
        $data[] = $row;
    }


    //var_dump($data);
    return $data;
}


function updateRecords(mysqli $db, array $record)
{
    $sql = "UPDATE student_data SET `fname`='$record[0]', `lname`='$record[1]', `adm_number`='$record[2]', `pass`='$record[3]'  WHERE `ID`='$record[4]';";
    if ($db->query($sql)) {
        echo "records updated succefully";
    } else {
        echo "failed";
    }
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

function insertToAdmin(mysqli $db, array $record)
{
    $sql = "INSERT INTO admin_data(`fname`,`lname`,`profile_picture`,`adm_number`,`pass`) VALUES('$record[0]','$record[1]','$record[2]','$record[3]','$record[4]')";


    if ($db->query($sql)) {
        echo "records inserted succefully";
    } else {
        echo "failed";
    }
}
