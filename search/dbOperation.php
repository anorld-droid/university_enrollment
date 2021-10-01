<?php
$searchQuery = $_REQUEST['query'];
$formattedQuery = trim($searchQuery);
$conn = mysqli_connect("localhost", "root", "", "student_query");

$query = "CREATE DATABASE IF NOT EXISTS student_query";

$sql1 = "CREATE TABLE IF NOT EXISTS query_storage (ID int(11) AUTO_INCREMENT,
                      `name` varchar(255) NOT NULL,
                     
                      school varchar (255) NOT NULL,
                      adm_number varchar(255) NOT NULL,
                      handle varchar (255) NOT NULL,
                      PRIMARY KEY  (ID))";



$query2 = "SELECT * FROM query_storage WHERE `name`   LIKE  '" . $formattedQuery . "%'";
$resultSet = mysqli_query($conn, $query2);

if (mysqli_num_rows($resultSet)) {
    while ($row = mysqli_fetch_assoc($resultSet)) {
        echo "
        <tr>
        <td>" . $row['id'] . "</td>
         <td>" . $row['name'] . "</td>
         
           <td>" . $row['school'] . "</td>
            <td>" . $row['adm_number'] . "</td>
             <td>" . $row['handle'] . "</td>

        </tr>
        ";
    }
} else {
    echo "Person not found";
}
