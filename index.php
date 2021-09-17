<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Portal</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="home">
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header text-center">
                        <h5>Students Registered</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Admission Number</th>
                                    <th scope="col">Profile Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $id = 1;
                                $my_file = "StudentData.txt";

                                $obtainedData = json_decode(file_get_contents($my_file), true);

                                foreach ($obtainedData as  $val) {
                                    echo "<tr>";
                                    echo     "<th scope=\"row\">$id</th>";
                                    echo     "<td>" . $val['first name'] . "</td>";
                                    echo     "<td>" . $val['last name'] . "</td>";
                                    echo     "<td>" . $val['adm number'] . "</td>";
                                    echo     "<td>" . " <img  height=\"100px\" width=\"100px\" src=\" " . $val['profile photo'] . "\" " . "alt=\" " . $val['profile photo'] . "\" >" . "</td>";
                                    echo "</tr>";
                                    $id++;
                                }

                                ?>

                                <tr>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm"></div>
                            <div class="col-sm">
                                <a href="downloadpdf.php" class="btn btn-primary btn-lg btn-block">Download PDF Version</a>
                            </div>
                            <div class="col-sm"></div>
                        </div>
                        <!-- <td><button id="pdf_button" name="pdf_button" class="btn btn-primary btn-lg btn-block" type="submit">Download PDF Version</button></td> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>