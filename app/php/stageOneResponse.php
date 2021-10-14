<?php
require_once 'config.php';
require_once 'db.php';
$db = connect(DB_SERVER, USER, PASSWORD, DB_NAME);
session_start();

$adminData = selectRecords($db);
foreach ($adminData as $val) {
    $_SESSION['completion'] = $val['completion'];
}
if ($_POST['stage'] === "1") {
    updateCompletion($db, $_POST['uid'], $_POST['complete']);
    echo json_encode("Success");
}
