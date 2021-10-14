<?php
require_once '../php/config.php';
require_once '../php/db.php';
$db = connect(DB_SERVER, USER, PASSWORD, DB_NAME);
$sql = "SELECT ID FROM student_data";
$searchresult = mysqli_query($db, $sql);
$ids = [];
while ($row = $searchresult->fetch_assoc()) {
    $ids[] = $row;
}

echo json_encode($ids);
