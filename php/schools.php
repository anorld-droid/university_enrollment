<?php
// if (isset($_POST['schools'])){
require_once 'config.php';
require_once 'db.php';

$db = connect(DB_SERVER, USER, PASSWORD, DB_NAME);

$createSchoolTable = "CREATE TABLE IF NOT EXISTS schools(
    id int(6) AUTO_INCREMENT NOT NULL,
    `name` VARCHAR(255) NOT NULL UNIQUE,
    PRIMARY KEY (id)
    
)";
mysqli_query($db, $createSchoolTable);

$createCoursesTable = "CREATE TABLE IF NOT EXISTS courses(
    id int(6) AUTO_INCREMENT NOT NULL,
    `name` VARCHAR(255) NOT NULL UNIQUE,
    school_id int(6) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (school_id) REFERENCES schools(id)
    
)";
mysqli_query($db, $createCoursesTable);

$insertIntoSchools = "INSERT IGNORE INTO schools(`name`) VALUES ('computing and informatics')";
mysqli_query($db, $insertIntoSchools);
$insertIntoSchools = "INSERT IGNORE INTO schools(`name`) VALUES ('education')";
mysqli_query($db, $insertIntoSchools);
$insertIntoSchools = "INSERT IGNORE INTO schools(`name`) VALUES ('medicine')";
mysqli_query($db, $insertIntoSchools);
$insertIntoSchools = "INSERT IGNORE INTO schools(`name`) VALUES ('nursing')";
mysqli_query($db, $insertIntoSchools);
$insertIntoSchools = "INSERT IGNORE INTO schools(`name`) VALUES ('business')";
mysqli_query($db, $insertIntoSchools);


$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('computer science',1)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('computer technology',1)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('IT',1)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('Diploma It',1)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('education art',2)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('special needs',2)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('primary option',2)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('early childhood education',2)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('medicine and surgery',3)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('nursing with IT',3)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('mmed in family and strategy',3)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('mmed in general survey',3)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('community health',4)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('medical surgical nursing',4)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('nursing education research',4)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('midwifery',4)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`)VALUES ('Bs administrator',5)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('business studies',5)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('economics',5)";
mysqli_query($db, $insertIntoCourses);
$insertIntoCourses = "INSERT IGNORE INTO courses (`name`,`school_id`) VALUES ('Human Resource',5)";
mysqli_query($db, $insertIntoCourses);



$coursesSql = "SELECT courses.name,courses.school_id FROM courses INNER JOIN schools ON courses.school_id = schools.id";
$schoolSql = "SELECT * FROM schools";

$coursesResult = mysqli_query($db, $coursesSql);
$schoolResult = mysqli_query($db, $schoolSql);
$schoolname = [];
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


