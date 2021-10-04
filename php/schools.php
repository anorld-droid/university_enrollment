<?php
require_once 'config.php';
require_once 'db.php';

$db = connect(DB_SERVER, USER, PASSWORD, DB_NAME);


$coursesSql = "SELECT courses.name,courses.school_id FROM courses INNER JOIN schools ON courses.school_id = schools.id";
$schoolSql = "SELECT * FROM schools";

$coursesResult = mysqli_query($db, $coursesSql);
$schoolResult = mysqli_query($db, $schoolSql);
$schooldata = [];
$courseid = [];
$coursename = [];
$generalArray = [];
$schoolid = [];


while ($row = mysqli_fetch_assoc($schoolResult)) {
    $schoolname[] = $row['name'];
    $schoolid[]  = $row['id'];
}
while ($row = mysqli_fetch_assoc($coursesResult)) {
    $courseid[] = $row['school_id'];
    $coursename[] = $row['name'];
}
for ($i = 0; $i < mysqli_num_rows($schoolResult); $i++) {
    $nameArray = [];
    // $schoolIndex = $i + 1;

    for ($j = 0; $j < mysqli_num_rows($coursesResult); $j++) {
        if ($schoolid[$i] === $courseid[$j]) {
            $nameArray[] = $coursename[$j];
        }
    }
    $combinedArray = array(
        $schoolname[$i] => array($nameArray[0], $nameArray[1], $nameArray[2], $nameArray[3])
    );

    $generalArray[] = $combinedArray;
}
// $json_value = json_encode($generalArray);
echo json_encode($generalArray);
// var_dump($json_value);

// $json_decoded = json_decode($json_value, true);
// var_dump($json_decoded);
