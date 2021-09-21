<?php
require_once 'config.php';
require_once 'db.php';
$db = connect(DB_SERVER, USER, PASSWORD, DB_NAME);

if ($_POST['deleteRecord']) {
    $id = $_POST['deleteRecord'];
    deleteRecords($db, $id);
    echo "
    <script>
    window.location.href='../html/tables.php';
    </script>
        ";
} else {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $admNumber = $_POST['admNumber'];
    $pass = $_POST['pass'];
    $Id = $_POST['id'];
    $Updatedvalues = array($fname, $lname, $admNumber, $pass, $Id);

    updateRecords($db, $Updatedvalues);
    echo "
<script>
window.location.href='../html/tables.php';
</script>
    ";
}
