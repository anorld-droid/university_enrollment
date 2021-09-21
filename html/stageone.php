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
    <title>Maseno University - Stage One Enrollment</title>
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
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-gray-500 bg-dark" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header   align-items-center">
                <a class="navbar-brand text-muted" href="javascript:void(0)">
                    <img src="../images/universitylogo.png" class="navbar-brand-img" alt="...">
                    <?php echo "Welcome, "; ?>
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="../html/userprofile.php">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text  text-light">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="collapse" href="#stages" role="button" aria-expanded="false" aria-controls="stages">
                                <i class="ni ni-bullet-list-67 text-default"></i>
                                <span class="nav-link-text  text-light">Enroll</span>
                            </a>
                            <div class="collapse pl-lg-5 pl-sm-5 pl-xs-5" id="stages">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link collapse active" href="../html/stageone.php">
                                            <i class="ni ni-check-bold text-default"></i>
                                            <span class="nav-link-text  text-light">Stage One</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapse" href="../html/stagetwo.php">
                                            <i class="ni ni-check-bold text-default"></i>
                                            <span class="nav-link-text  text-light">Stage Two</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapse" href="../html/stagethree.php">
                                            <i class="ni ni-check-bold text-default"></i>
                                            <span class="nav-link-text  text-light">Stage Three</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapse" href="../html/stagefour.php">
                                            <i class="ni ni-check-bold text-default"></i>
                                            <span class="nav-link-text  text-light">Stage Four</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../html/SIGNIN.html">
                                <i class="ni ni-key-25 text-info"></i>
                                <span class="nav-link-text  text-light">Login</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../html/SIGNIN.html">
                                <i class="ni ni-circle-08 text-pink"></i>
                                <span class="nav-link-text  text-light">Units</span>
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
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.maseno.ac.ke/index/images/2020-uploads/24NEW%20HOSTELS%20AND%20NEW%20RATES%20II.pdf" target="_blank">
                                <i class="ni ni-shop text-red"></i>
                                <span class="nav-link-text text-light">Campus Accomodation</span>
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
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
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

                                        echo "<img class=\"rounded-circle\" src=\"" . $profilePhoto . "\" height=\"40\" width=\"100\" alt=\"Profile Photo\">";

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
        <div class=" pb-6">
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6 bg-dark">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="card bg-dark  bg-default ">
                        <div class="card-header  bg-dark align-items-center">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mb-0 text-light text-center">STUDENT PERSONAL DETAILS </h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <!-- Student details form  -->
                            <form class="needs-validation" action="../php/advanceStage.php" method="POST" novalidate>
                                <input type="hidden" name="stage" value="1" />
                                <h6 class="heading-small text-muted mb-4">User information</h6>
                                <div class="pl-lg-4 pl-sm-4 pl-xs-4">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input-first-name">First Name</label>
                                                <input type="text" id="input-first-name" class="form-control text-dark" value=<?php echo $firstname; ?> required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input-last-name">Last Name</label>
                                                <input type="text" id="input-last-name" class="form-control text-dark" value=<?php echo $lastname; ?> required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input-othernames">others Names</label>
                                                <input type="text" id="input-othernames" class="form-control text-dark" placeholder="Other Names">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input-school">School Admitted Into</label>
                                                <input type="text" id="input-school" class="form-control text-dark" placeholder="School" required>
                                                <div class="invalid-feedback">
                                                    Please enter your school
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input-programme">Programme Admitted For</label>
                                                <input type="text" id="input-programme" class="form-control text-dark" placeholder="Programme" required>
                                                <div class="invalid-feedback">
                                                    Please enter your programme
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Date of birth -->
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input-day">Date Of Birth</label>
                                                <label class="form-control-label text-light" for="input-day"></label>
                                                <input type="number" id="input-day" name="dob_day" class="form-control text-dark" placeholder="Day" required>
                                                <div class="invalid-feedback">
                                                    Please enter your day of birth
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input-month"><br></label>
                                                <input type="number" id="input-month" name="dob_month" class="form-control text-dark" placeholder="Month" required>
                                                <div class="invalid-feedback">
                                                    Please enter your month of birth
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input-month"><br></label>
                                                <input type="number" id="input-year" name="dob_year" class="form-control text-dark" placeholder="Year" required>
                                                <div class="invalid-feedback">
                                                    Please enter your year of birth
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label class="form-control-label text-light" for="input-day">Gender</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" required>
                                                <label class="custom-control-label" for="customRadioInline1">Male</label>
                                                <div class="invalid-feedback">
                                                    Please enter your gender
                                                </div>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" required>
                                                <label class="custom-control-label" for="customRadioInline2">Female</label>
                                                <div class="invalid-feedback">
                                                    Please enter your gender
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <!-- Place of Birth -->
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_village">Place Of Birth</label>
                                                <label class="form-control-label text-light" for="input_village"></label>
                                                <input type="text" id="input_village" name="pob_village" class="form-control text-dark" placeholder="Village" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_location"><br></label>
                                                <input type="text" id="input-location" name="pob_location" class="form-control text-dark" placeholder="Location" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_district"><br></label>
                                                <input type="text" id="input-district" name="pob_district" class="form-control text-dark" placeholder="District" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_county"><br> </label>
                                                <input type="text" id="input_county" name="pob_county" class="form-control text-dark" placeholder="County" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_name_chief">Name Of Chief</label>
                                                <label class="form-control-label text-light" for="input_name_chief"></label>
                                                <input type="text" id="input_name_chief" name="pob_chief" class="form-control text-dark" placeholder="Names" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_police_station">Nearest Police Station</label>
                                                <input type="text" id="input-police_station" name="pob_police_station" class="form-control text-dark" placeholder="Name of Police Station" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Nationality and Religion -->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_nationality">Nationality</label>
                                                <input type="text" id="input_nationality" name="pob_nationality" class="form-control text-dark" placeholder="Nationality" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_religion">Religion</label>
                                                <input type="text" id="input_religion" name="religion" class="form-control text-dark" placeholder="Religion" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Marital status -->
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label class="form-control-label text-light" for="input-day">Marital Status</label>
                                            <br>
                                            <div class="custom-control  custom-radio custom-control-inline">
                                                <input type="radio" id="maritalstatus1" name="maritalstatus" class="custom-control-input" required>
                                                <label class="custom-control-label" for="maritalstatus1">Married</label>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="maritalstatus2" name="maritalstatus" class="custom-control-input" required>
                                                <label class="custom-control-label" for="maritalstatus2">Single</label>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input-spouse">Name of Spouse if married</label>
                                                <input type="text" id="input-spouse" class="form-control text-dark" name="spouse" placeholder="Names">
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Address of correspondence -->
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_telephone">Address Of correspondence</label>
                                                <label class="form-control-label text-light" for="input_telephone"></label>
                                                <input type="number" id="input_telephone" name="correspondence_telephone" class="form-control text-dark" placeholder="Telephone" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_fax"><br></label>
                                                <input type="number" id="input-fax" name="pob_fax" class="form-control text-dark" placeholder="Fax" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_email"><br> </label>
                                                <input type="text" id="input_email" name="pob_email" class="form-control text-dark" placeholder="Email" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Parents/Guardians -->
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_nationality">Full Names Of Mother</label>
                                                <input type="text" id="input_nationality" name="pob_nationality" class="form-control text-dark" placeholder="Full Names" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="mother_occupation">Mother Occupation</label>
                                                <input type="text" id="mother_occupation" name="m_occupation" class="form-control text-dark" placeholder="Mother Occupation" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <label class="form-control-label text-light" for="mother_status">Check Where Possible</label>
                                            <br>
                                            <div class="custom-control custom-radio  custom-control-inline">
                                                <input type="radio" id="mother_status_id1" name="mother_status" class="custom-control-input" required>
                                                <label class="custom-control-label text-center" for="mother_status_id1">Alive</label>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                            <div class="custom-control  custom-radio  custom-control-inline">
                                                <input type="radio" id="mother_status_id2" name="mother_status" class="custom-control-input" required>
                                                <label class="custom-control-label" for="mother_status_id2">Dead</label>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_nationality">Full Names Of Father</label>
                                                <input type="text" id="input_nationality" name="pob_nationality" class="form-control text-dark" placeholder="Full Names" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="mother_occupation">Father Occupation</label>
                                                <input type="text" id="father_occupation" name="f_occupation" class="form-control text-dark" placeholder="Father Occupation" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 ">
                                            <label class="form-control-label text-light" for="father_status">Check Where Possible</label>
                                            <br>
                                            <div class="custom-control custom-radio  custom-control-inline">
                                                <input type="radio" id="father_status_id1" name="father_status" class="custom-control-input " required>
                                                <label class="custom-control-label text-center" for="father_status_id1">Alive</label>
                                                <br>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                            <div class="custom-control  custom-radio  custom-control-inline">
                                                <input type="radio" id="father_status_id2" name="father_status" class="custom-control-input" required>
                                                <label class="custom-control-label" for="father_status_id2">Dead</label>
                                                <br>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_guardian">Full Names Of Guardian(if above doesn't apply)</label>
                                                <input type="text" id="input_guardian" name="guardian" class="form-control text-dark" placeholder="Full Names">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Names and addresses of Brothers and Sisters -->
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_brothers_sisters_names">Names Of Brother's and Sister's</label>
                                                <textarea rows="4" id="input_brothers_sisters_names" name="names_of_brothers_sisters" class="form-control text-dark" placeholder="Full Names" required></textarea>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_bs_address">Addresses'</label>
                                                <textarea rows="4" id="input_bs_address" name="address_of_brothers_sisters" class="form-control text-dark" placeholder="Addresses" required></textarea>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Contacts in case of emergency -->
                                    <h6 class="heading-small text-light mb-4">Give the details of (2) people to contact incase of emergency</h6>
                                    <div class="pl-lg-4">
                                        <!-- Person One -->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label text-light" for="input_emergency_name1">Name</label>
                                                    <input type="text" id="input_emergency_name1" name="emergency_name1" class="form-control text-dark" placeholder="Full Names" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label text-light" for="input_emergency_relationship1">Relationship</label>
                                                    <input type="text" id="input_emergency_relationship1" name="emergency_relationship1" class="form-control text-dark" placeholder="Relationship" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label text-light" for="input_emergency_address1">Address</label>
                                                    <input type="text" id="input_emergency_address1" name="emergency_address1" class="form-control text-dark" placeholder="Address" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label text-light" for="input_emergency_telephone1">Telephone</label>
                                                    <input type="number" id="input_emergency_telephone1" name="emergency_telephone1" class="form-control text-dark" placeholder="Telephone" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Person Two -->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label text-light" for="input_emergency_name2">Name</label>
                                                    <input type="text" id="input_emergency_name2" name="emergency_name2" class="form-control text-dark" placeholder="Full Names" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label text-light" for="input_emergency_relationship2">Relationship</label>
                                                    <input type="text" id="input_emergency_relationship2" name="emergency_relationship2" class="form-control text-dark" placeholder="Relationship" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label text-light" for="input_emergency_address2">Address</label>
                                                    <input type="text" id="input_emergency_address2" name="emergency_address2" class="form-control text-dark" placeholder="Address" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label text-light" for="input_emergency_telephone2">Telephone</label>
                                                    <input type="number" id="input_emergency_telephone2" name="emergency_telephone2" class="form-control text-dark" placeholder="Telephone" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Last School attended -->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_school_name">Last School Name</label>
                                                <input type="text" id="input_school_name" name="school_name" class="form-control text-dark" placeholder="School Name" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_emergency_address">Last School Address</label>
                                                <input type="text" id="input_emergency_address" name="emergency_contact" class="form-control text-dark" placeholder="School Address" required>

                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_index_number">Index Number</label>
                                                <input type="text" id="input_index_number" name="index_number" class="form-control text-dark" placeholder="Index Number" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_mean_grade">Mean Grade</label>
                                                <input type="text" id="input_mean_grade" name="mean_grade" class="form-control text-dark" placeholder="Mean Grade" required>
                                                <div class="invalid-feedback">
                                                    Field cannot be empty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Subjects -->
                                    <h6 class="heading-small text-muted mb-4">Enter the respective grade</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control-label text-light" for="input_maths">Subject</label>
                                                    <input id="input_maths" class="form-control text-dark" name="maths" value=" Maths" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="form-control-label text-light" for="input-grade">Grade</label>
                                                    <input id="input-grade" class="form-control text-dark" name="maths_grade" placeholder="Grade" type="text" required>

                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="input_maths" class="form-control text-dark" name="english" value=" English" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <input id="input-grade" class="form-control text-dark" name="english_grade" placeholder="Grade" type="text" required>

                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="input_maths" class="form-control text-dark" name="kiswahili" value=" Kiswahili" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <input id="input-grade" class="form-control text-dark" name="kiswahili_grade" placeholder="Grade" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="input_maths" class="form-control text-dark" name="subject4" placeholder="Subject" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <input id="input-grade" class="form-control text-dark" name="subject4_grade" placeholder="Grade" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="input_maths" class="form-control text-dark" name="subject5" placeholder="Subject" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <input id="input-grade" class="form-control text-dark" name="subject5_grade" placeholder="Grade" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control text-dark" name="subject6" placeholder="Subject" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <input class="form-control text-dark" name="subject6_grade" placeholder="Grade" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control text-dark" name="subject7" placeholder="Subject" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <input class="form-control text-dark" name="subject7_grade" placeholder="Grade" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control text-dark" name="subject8" placeholder="Subject" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <input class="form-control text-dark" name="subject8_grade" placeholder="Grade" type="text" required>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- physical impairement -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_school_name">Do you suffer from any physical impairements? if so provide details</label>
                                                <textarea rows="4" id="input_impairrments" name="impairements" class="form-control text-dark" placeholder="State the impairements"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Additional information -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input_additional_info">Provide any additional information that you think could be useful to the university</label>
                                                <textarea rows="4" id="input_additional_info" name="additional_info" class="form-control text-dark" placeholder="Additional information"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">
                                                <i class="fa fa-angle-left"></i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link page1" href="stageone.php">1</a></li>
                                        <li class="page-item "><a class="page-link page2" href="stagetwo.php">2</a></li>
                                        <li class="page-item"><a class="page-link page3" href="stagethree.php">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="stagetwo.php">
                                                <i class="fa fa-angle-right nextpage"></i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav> -->
                                <div class="row">
                                    <div class="col-sm-5"></div>
                                    <div class="col-sm-2">
                                        <button id="next_button" name="next_button" class="btn btn-primary btn-lg " type="submit">NEXT</button>
                                    </div>
                                    <div class="col-sm-5"></div>
                                </div>
                            </form>
                            <!-- End of form  -->
                        </div>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
    <script>
        //  JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="../assets/js/argon.js?v=1.2.0"></script>
    <!-- Bootstrap scripts -->

</body>

</html>