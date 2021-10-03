<?php
$searchQuery = $_REQUEST['query'];
$formattedQuery = trim($searchQuery);
$conn = mysqli_connect("localhost", "root", "", "student_details");


$query2 = "SELECT * FROM student_data WHERE `fname`   LIKE  '" . $formattedQuery . "%'";
$resultSet = mysqli_query($conn, $query2);

if (mysqli_num_rows($resultSet)) {
    while ($row = mysqli_fetch_assoc($resultSet)) {
        echo "
        <tr>
        <td>" . $row['ID'] . "</td>
         <td>" . $row['fname'] . "</td>
         <td>" . $row['lname'] . "</td>
          <td>" . $row['adm_number'] . "</td>
           <td>" . $row['status'] . "</td>
           
             <td>" . $row['completion'] . "</td>

        </tr>
        ";
    }
} else {
    echo "Person not found";
}
