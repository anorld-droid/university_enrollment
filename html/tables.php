<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php
require_once '../php/config.php';
require_once '../php/db.php';
$db = connect(DB_SERVER, USER, PASSWORD, DB_NAME);
session_start();
if (isset($_SESSION['pPhoto'])) {
  $profilePhoto = $_SESSION["pPhoto"];
}
if (isset($_SESSION['fName']) and isset($_SESSION['lName'])) {
  $firstname = $_SESSION['fName'];
  $lastname = $_SESSION['lName'];
}
if (isset($_SESSION['pass'])) {
  $password = $_SESSION['pass'];
}
$num = 1;
//total number of results  per page
$results_per_page = 10;
$query = "SELECT * FROM student_data";
$result = mysqli_query($db, $query);
$number_of_result = mysqli_num_rows($result);
//determine the total number of pages available  
$number_of_page = ceil($number_of_result / $results_per_page);
//determine which page number visitor is currently on  
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
//determine the sql LIMIT starting number for the results on the displaying page  
$page_first_result = ($page - 1) * $results_per_page;
$data = [];

//retrieve the selected results from database   
$query = "SELECT * FROM student_data LIMIT " . $page_first_result . ',' . $results_per_page;
$resultSet = mysqli_query($db, $query);


if (isset($_POST["search_text"])) {

  $text = $_POST['search_text'];
  echo "updated";
  if (!empty($text)) {
    $sql
      = "SELECT * FROM student_data WHERE  fname LIKE '%" . $text . "%' ";
    $searchResult = mysqli_query($db, $sql);

    while ($row = $searchResult->fetch_assoc()) {
      $data[] = $row;
    }
    // echo json_encode($mydata);
  }
} else {
  while ($row = $resultSet->fetch_assoc()) {
    $data[] = $row;
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Maseno University - Admin Table</title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
  <!-- my css -->
  <link rel="stylesheet" href="../css/style.css" />

</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-dark" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header   align-items-center">
        <a class="navbar-brand text-muted" href="javascript:void(0)">
          <img src="../images/universitylogo.png" class="navbar-brand-img" alt="...">
          ADMINISTRATOR
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../html/adminProfile.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text  text-light">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../html/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text  text-light">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../html/SIGNIN.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text  text-light">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../html/SIGNUP.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text  text-light">Register</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Maseno Websites</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3 ">
            <li class="nav-item">
              <a class="nav-link" href="https://student.maseno.ac.ke/Default" target="_blank">
                <i class="ni ni-spaceship text-blue"></i>
                <span class="nav-link-text  text-light">Student Portal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://elearning.maseno.ac.ke/" target="_blank">
                <i class="ni ni-palette text-cyan"></i>
                <span class="nav-link-text text-light">E-learning</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.maseno.ac.ke/index/" target="_blank">
                <i class="ni ni-ui-04 text-green"></i>
                <span class="nav-link-text text-light">Notice Board</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" method="post" action="tables.php">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text" id="search_text" name="search_text" onkeyup="searchfunction(this.value);">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <?php

                    echo "<img class=\"rounded-circle\" src=\"" . $profilePhoto . "\" height=\"40\" width=\"100\" alt=\"Profile photo\">";

                    ?>
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <?php

                    echo "<span class=\"mb-0 text-sm  font-weight-bold\">" . $firstname . " " . $lastname . "</span>";

                    ?>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="../html/SIGNIN.html" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-gradient-default pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Entries</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <!-- <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li> -->
                  <li class="breadcrumb-item " aria-current="page">
                    <?php
                    if ($page < $number_of_page) {
                      echo $results_per_page * $page;
                    } else
                      echo $number_of_result;

                    ?></li>
                  <li class="breadcrumb-item active "><a href="#"><?php echo $number_of_result ?></a></li>
                </ol>
              </nav>

            </div>

            <div class="col-lg-6 col-5 text-right">
              <a href="#newModal" data-toggle="modal" class="btn btn-sm btn-neutral">New</a>
              <form action="../php/downloadpdf.php" method="POST">
                <input type="text" name="stagelevel" placeholder="Stage level">
                <button type="submit" class="btn btn-sm btn-neutral">Download PDF</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Add new record modal -->
    <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="newModalLabel">New Record</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="needs-validation" action="../php/adminRegistration.php" method="POST" enctype="multipart/form-data" novalidate>
              <div class="form-row">
                <div class="col">
                  <label for="firstName">First Name</label>
                  <input type="text" id="fName" class="form-control" name="fName" placeholder="First name" required>
                  <div class="invalid-feedback">
                    Please enter your First Name
                  </div>
                </div>
                <div class="col">
                  <label for="lastName">Last Name</label>
                  <input type="text" id="lName" class="form-control" name="lName" placeholder="Last name" required>
                  <div class="invalid-feedback">
                    Please enter your Last Name
                  </div>
                </div>
              </div>
              <br>
              <label for="profilePhotoFile">Profile Photo</label>
              <br>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="profilePhotoFile" name="profilePhoto" required>
                <label class="custom-file-label" for="profilePhotoFile">Choose file</label>
                <div class="invalid-feedback">Field cannot be empty</div>
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="basicPay">Admission Number</label>
                <input type="text" class="form-control " id="adm_number" name="admNumber" placeholder="Admission Number" required>
                <div class="invalid-feedback">
                  Please enter your admission number
                </div>
              </div>
              <div class="form-group">
                <label for="basicPay">Password</label>
                <input type="password" class="form-control " id="pass" name="pass" placeholder="Password" required>
                <div class="invalid-feedback">
                  Please enter your password
                </div>
              </div>
              <div class="form-group">
                <label for="basicPay">Confirm Password</label>
                <input type="password" class="form-control " id="con_pass" name="con_pass" placeholder="Confirm Password" required>
                <div class="invalid-feedback">
                  Please enter your password
                </div>
              </div>

              <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-3">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <div class="col-sm-4"></div>
              </div>


            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6 bg-dark">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0" id="beforetable">
              <h3 class="text-white mb-0">Registered student</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush" id="datatable">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Name</th>
                    <th scope="col" class="sort" data-sort="budget">Admission Number</th>
                    <th scope="col">School</th>
                    <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col" class="sort" data-sort="completion">Completion</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list" id="tabledata">
                  <input type="hidden" id="data">
                  <?php
                  // $obtainedData = selectRecords($db);

                  foreach ($data as  $val) {

                    $complete = $val['completion'];
                    if ($complete < 100) {
                      $ifdisabled = " ";
                      $background = "bg-warning";
                      $status = "pending";
                    } else {
                      $ifdisabled = "disabled";
                      $background = "bg-success";
                      $status = "complete";
                    }
                    if ($complete === "0") {
                      $proceedStage = 'stageone.php';
                    } elseif ($complete === "25") {
                      $proceedStage = 'stagetwo.php';
                    } elseif ($complete === "50") {
                      $proceedStage = 'stagethree.php';
                    } else {
                      $proceedStage = 'stagefour.php';
                    }
                    echo "<tr>";
                    echo   "<th scope=\"row\">";
                    echo     "<div class=\"media align-items-center\">";
                    echo       "<a href=\"#\" class=\"avatar rounded-circle mr-3\">";
                    echo           "<img  src=\"" . $val['profile_picture'] .  " \" height=\"40\" width=\"100\" alt=\"Profile photo\">";
                    echo        "</a>";
                    echo        "<div class=\"media-body\">";
                    echo            "<span class=\"name mb-0 text-sm\">" . $val['fname'] . " " . $val['lname'] . "</span>";
                    echo        "</div>";
                    echo     "</div>";
                    echo    "</th>";
                    echo    "<td>";
                    echo        $val['adm_number'];
                    echo    "</td>";
                    echo    "<td>";
                    echo        "Computing and Informatics"; //TODO $val['school'];
                    echo    "</td>";
                    echo    "<td>";
                    echo       "<span class=\"badge badge-dot mr-4\">";
                    echo          "<i class=\"" . $background . "\"></i>";
                    echo          "<span class=\"status\">" . $status . "</span>";
                    echo        "</span>";
                    echo     "</td>";
                    echo    "<td>";
                    echo        "<div class=\"d-flex align-items-center\">";
                    echo            "<span class=\"completion mr-2\">" . $complete . "%</span>";
                    echo        "</div>";
                    echo         "<div>";
                    echo                "<div class=\"progress\">";
                    echo                    "<div class=\"progress-bar " . $background . "\" role=\"progressbar\" aria-valuenow=\"" . $complete . "\"  aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $complete . "%;\"></div>";
                    echo                 "</div>"; //aria-valuenow=\"."$val['completion'];."\"                    //width: ".$val['completion']."%"."
                    echo         "</div>";
                    echo    "</td>";
                    echo    "<td class=\"text-right\">";
                    echo       "<div class=\"dropdown\">";
                    echo           "<a class=\"btn btn-sm btn-icon-only text-light\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                    echo           "<i class=\"fas fa-ellipsis-v\"></i>";
                    echo           "</a>";
                    echo            "<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-arrow\">";
                    echo                "<form action=\"" . $proceedStage . "\" method=\"POST\" class=\"needs-validation\" novalidate>";
                    echo                 "<input type=\"hidden\" name=\"firstName\" value= \"" . $val['fname'] . "\">";
                    echo                 "<input type=\"hidden\" name=\"lastName\" value= \"" . $val['lname'] . "\">";
                    echo                 "<input type=\"hidden\" name=\"profilePhoto\" value= \"" . $val['profile_picture'] . "\">";
                    echo                 "<input type=\"hidden\" name=\"admissionNum\" value= \"" . $val['adm_number'] . "\">";
                    echo                 "<input type=\"hidden\" name=\"userid\" value= \"" . $val['ID'] . "\">";
                    echo                  "<input type=\"hidden\" name=\"password\" value= \"" . $val['pass'] . "\">";
                    echo                  "<input type=\"hidden\" name=\"complete\" value= \"" . $complete . "\">";
                    echo                  "<button  id=\"enroll\" type=\"submit\" class=\"dropdown-item\"" . $ifdisabled . " >Enroll</button>";
                    echo                 "</form>";
                    // echo                "<a class=\"dropdown-item  " . $ifdisabled . " \" href=\"#enrollStudent" . $val['ID'] . "\" data-toggle=\"modal\">Enroll</a>";
                    echo                "<a class=\"dropdown-item\" href=\"#" . $val['fname'] . $num . "\" data-toggle=\"modal\">Edit</a>";
                    echo                "<a class=\"dropdown-item\" href=\"#deleteRecord" . $val['ID'] . "\" data-toggle=\"modal\">Delete</a>";
                    echo            "</div>";
                    echo       "</div>";
                    echo    "</td>";
                    echo   "</tr>";
                  ?>
                    <!-- Edit modal -->
                    <div class="modal fade" id=<?php echo $val['fname'] . $num ?> tabindex="-1" role="dialog" aria-labelledby=<?php echo $val['lname'] ?> aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header text-center">
                            <h5 class="modal-title" id=<?php echo $val['lname'] ?>>Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="../php/adminUpdateRecord.php" method="POST">
                              <input type="hidden" name="id" value=<?php echo $val['ID']; ?>>
                              <h6 class="heading-small text-muted mb-4">User information</h6>
                              <div class="pl-lg-4">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="form-control-label text-light" for="input-first-name">First name</label>
                                      <input type="text" id="input-first-name" class="form-control text-dark" name="fname" value=<?php echo $val['fname']; ?>>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="form-control-label text-light" for="input-last-name">Last name</label>
                                      <input type="text" id="input-last-name" class="form-control text-dark" name="lname" value=<?php echo $val['lname']; ?>>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="form-control-label text-light" for="input-username">Username</label>
                                      <input type="text" id="input-username" class="form-control text-dark" name="admNumber" placeholder="Username" value=<?php echo $val['adm_number']; ?>>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="form-control-label text-light" for="input-password">Password</label>
                                      <input type="text" id="input-password" class="form-control text-dark" placeholder="Password" name="pass" value=<?php echo $val['pass'] ?>>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <hr class="my-4" />
                              <!-- Address -->
                              <h6 class="heading-small text-muted mb-4">Contact information</h6>
                              <div class="pl-lg-4">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="form-control-label text-light" for="input-email">Email address</label>
                                      <input type="email" id="input-email" class="form-control text-dark" placeholder="Email">
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="form-control-label text-light" for="input-country">Phone Number</label>
                                      <input type="number" id="input-postal-code" class="form-control text-dark" placeholder="phone number">
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php $num++;
                  } ?>
                </tbody>
              </table>
              <?php foreach ($data as $val) { ?>
                <!-- Delete Modal -->
                <?php echo  "<div class=\"modal fade\" id=\"deleteRecord" . $val['ID'] . "\"   tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deletemeLabel\" aria-hidden=\"true\">"; ?>
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="deletemeLabel">Delete Record</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="../php/adminUpdateRecord.php" method="post">
                        <input type="hidden" name="deleteRecord" value=<?php echo $val['ID'] ?>>
                        <p>
                          Are you sure you want to delete this record?
                        </p>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Delete</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>

          <?php }
          ?>
          </div>
        </div>



        <div class="mb-9"></div>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item <?php if ($page < 2) {
                                    echo "disabled";
                                  } ?>">
              <a class="page-link" href="tables.php?page=<?php echo $page - 1 ?>" tabindex="-1">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <?php
            //display the link of the pages in URL  
            for ($page = 1; $page <= $number_of_page; $page++) {
              // echo '<a href = "index2.php?page=' . $page . '">' . $page . ' </a>';
            ?>

              <li class="page-item "><a class="page-link page<?php echo $page ?>" href="tables.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>
            <?php } ?>
            <li class="page-item">
              <a class="page-link" href="tables.php?page=<?php echo  $page - 1   ?>">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
        <div class="mb-5"></div>
        <!-- Footer -->
        <footer class="footer pt-0 bg-dark">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
              <div class="copyright text-center  text-lg-left  text-muted">
                &copy; 2020 <a href="#!" class="font-weight-bold ml-1">Pain Creations</a>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="#!" class="nav-link">Pain Creations</a>
                </li>
                <li class="nav-item">
                  <a href="#!" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="#!" class="nav-link">Blog</a>
                </li>
                <li class=" nav-item">
                  <a href="https://github.com/anorld-droid/university_enrollment" class="nav-link" target="_blank">Git Hub </a>
                </li>
              </ul>
            </div>
          </div>
        </footer>
        <script>
          var searchRequest = null;

          function searchfunction(value) {
            if (searchRequest != null) searchRequest.abort();
            $("#datatable").remove();
            searchRequest = $.ajax({
              type: "post",
              url: "../php/search.php",
              data: {
                'search_text': value
              },
              dataType: 'json',
              success: function(msg) {
                $("#beforetable").after(msg)
              }
            });
          }

          //replacing details form with medical form
          function enroll() {
            alert("jhkhkjlhjka");



          }
          //  disabling form submissions if there are invalid fields
          window.addEventListener('load', function() {
            $('input[type="file"]').change(function(e) {
              var fileName = e.target.files[0].name;
              $('.custom-file-label').html(fileName);
            });
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                //  else {
                //   alert("program");
                //   let profilePhoto = document.getElementById('profilePhoto').value;
                //   let firstName = document.getElementById('firstName').value;
                //   let lastName = document.getElementById('lastName').value;
                //   let admissionNum = document.getElementById('admissionNum').value;
                //   let password = document.getElementById('password').value;
                //   let userid = document.getElementById('userid').value;
                //   var complete = document.getElementById('complete').value;
                //   // alert(complete + `  ${firstName}    ${userid}`);

                //   let dataObj = {
                //     'profilePhoto': profilePhoto,
                //     'firstName': firstName,
                //     'lastName': lastName,
                //     'admissionNum': admissionNum,
                //     'password': password,
                //     'userid': userid,
                //     'enroll': 'Proceed'
                //   }

                //   $.ajax({
                //     type: "post",
                //     url: "../php/advanceStage.php",
                //     data: dataObj,
                //     dataType: 'json',
                //     success: function(msg) {
                //       // alert("kuiiuiui")
                //       if (complete === "0") {
                //         window.location.href = 'stageone.php';
                //       } else if (complete === "25") {
                //         window.location.href = 'stagetwo.php';
                //       } else if (complete === "50") {
                //         window.location.href = 'stagethree.php';
                //       } else {
                //         window.location.href = 'stagefour.php';
                //       }
                //     },
                //     error: function(err) {
                //       alert("Error" + err);
                //     }
                //   });
                //   alert("popopopo");
                // }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Argon JS -->
        <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>