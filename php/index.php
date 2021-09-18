<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Portal</title>
    <!-- bootstrap -->
    <!-- Favicon -->
    <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="/assets/vendor/nucleo/css/nucleo.min.css" rel="stylesheet">
    <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="/assets/css/argon.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
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
    <!-- Core -->
    <script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Argon JS -->
    <script src="/assets/js/argon.min.js"></script>
</body>

</html>