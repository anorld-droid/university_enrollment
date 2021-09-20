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
session_start();
if (isset($_SESSION['profilePhoto'])) {
  $profilePhoto = $_SESSION["profilePhoto"];
}
if (isset($_SESSION['firstName']) and isset($_SESSION['lastName'])) {
  $firstname = $_SESSION['firstName'];
  $lastname = $_SESSION['lastName'];
}
if (isset($_SESSION['admissionNum'])) {
  $admNumber = $_SESSION['admissionNum'];
}
if (isset($_SESSION['password'])) {
  $password = $_SESSION['password'];
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
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
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
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

                    echo "<img class=\"rounded-circle\" src=\"../" . $profilePhoto . "\" height=\"40\" width=\"100\" alt=\"University Logo\">";

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
              <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tables</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="SIGNUP.html" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Delete</a>
            </div>
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
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Registered student</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
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
                <tbody class="list">
                  <?php
                  $my_file = "../php/StudentData.txt";

                  $obtainedData = json_decode(file_get_contents($my_file), true);
                  $complete = 50;
                  foreach ($obtainedData as  $val) {

                    if ($complete < 100) {
                      $background = "bg-warning";
                      $status = "pending";
                    } else {
                      $background = "bg-success";
                      $status = "complete";
                    }
                    echo "<tr>";
                    echo   "<th scope=\"row\">";
                    echo     "<div class=\"media align-items-center\">";
                    echo       "<a href=\"#\" class=\"avatar rounded-circle mr-3\">";
                    echo           "<img  src=\"../" . $val['profile photo'] .  " \" height=\"40\" width=\"100\" alt=\"Profile photo\">";
                    echo        "</a>";
                    echo        "<div class=\"media-body\">";
                    echo            "<span class=\"name mb-0 text-sm\">" . $val['first name'] . " " . $val['last name'] . "</span>";
                    echo        "</div>";
                    echo     "</div>";
                    echo    "</th>";
                    echo    "<td>";
                    echo        $val['adm number'];
                    echo    "</td>";
                    echo    "<td>";
                    echo        "Computing and Informatics"; //TODO $val['school'];

                    echo    "</td>";
                    echo    "<td>";
                    echo       "<span class=\"badge badge-dot mr-4\">";
                    echo          "<i class=\"" . $background . "\"></i>";
                    echo          "<span class=\"status\">" . $status . "</span>"; // TODO $val['status'];
                    echo        "</span>";
                    echo     "</td>";
                    echo    "<td>";
                    echo        "<div class=\"d-flex align-items-center\">";
                    echo            "<span class=\"completion mr-2\">" . $complete . "%</span>"; //TODO $val['completion'];
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
                    echo                "<a class=\"dropdown-item\" href=\"#\">Edit</a>";
                    echo                "<a class=\"dropdown-item\" href=\"#\">Delete</a>";
                    echo            "</div>";
                    echo       "</div>";
                    echo    "</td>";
                    echo   "</tr>";
                    $complete += 10;
                  }

                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0 bg-dark">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
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