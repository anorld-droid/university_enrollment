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
if (isset($_SESSION['userid'])) {
    $uuid = $_SESSION['userid'];
}
if (isset($_SESSION['completion'])) {
    $completion = $_SESSION['completion'];
    // echo "<script>alert(" . $completion . ")</script>";
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Maseno University - Stage Two Enrollment</title>
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
                                        <a class="nav-link collapse <?php if ($completion == '25') {
                                                                        echo "disabled";
                                                                    } ?>" href="../html/stageone.php">
                                            <i class="ni ni-check-bold text-default"></i>
                                            <span class="nav-link-text   <?php if ($completion == '25') {
                                                                                echo "text-muted";
                                                                            } else {
                                                                                echo "text-light";
                                                                            } ?>">Stage One</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapse <?php if ($completion == '50') {
                                                                        echo "disabled";
                                                                    } ?>" href="../html/stagetwo.php">
                                            <i class="ni ni-check-bold text-default"></i>
                                            <span class="nav-link-text   <?php if ($completion == '50') {
                                                                                echo "text-muted";
                                                                            } else {
                                                                                echo "text-light";
                                                                            } ?>">Stage Two</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapse <?php if ($completion == '75') {
                                                                        echo "disabled";
                                                                    } ?>" href="../html/stagethree.php">
                                            <i class="ni ni-check-bold text-default"></i>
                                            <span class="nav-link-text  <?php if ($completion == '75') {
                                                                            echo "text-muted";
                                                                        } else {
                                                                            echo "text-light";
                                                                        } ?>">Stage Three</span>
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

                                        echo "<img class=\"rounded-circle\" src=\"" . $profilePhoto . "\" height=\"40\" width=\"100\" alt=\"University Logo\">";

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
                                    <h3 class="mb-0 text-light text-center">MEDICAL EXAMINATION</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <!-- MEDICAL EXAMINATION form  -->
                            <form class="needs-validation" action="../php/advanceStage.php" method="POST" novalidate>
                                <input type="hidden" name="stage" value="2" />
                                <input type="hidden" name="uid" value=<?php echo $uuid; ?> />
                                <h6 class="heading-small text-muted mb-2"></h6>
                                <div class="pl-lg-4 pl-sm-4 pl-xs-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input-nhif">NHIF NUMBER</label>
                                                <input type="text" id="input-nhif" class="form-control text-dark" placeholder="NHIF Number">
                                                <div class="invalid-feedback">
                                                    Please enter your NHIF number
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="heading-small text-light mb-2">Have you ever been in an in-patient hospital or nursing home?.If so when and for what complaints? </h6>
                                    <div class="pl-lg-4">
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-radio  custom-control-inline">
                                                    <input type="radio" id="input-in-patient1" name="in_patient" class="custom-control-input ">
                                                    <label class="custom-control-label text-center" for="input-in-patient1">Yes</label>
                                                    <br>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                                <div class="custom-control  custom-radio  custom-control-inline">
                                                    <input type="radio" id="input-in-patient2" name="in_patient" class="custom-control-input">
                                                    <label class="custom-control-label" for="input-in-patient2">No</label>
                                                    <br>
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 ">
                                                <textarea name="in_patient_date" rows="2" class="form-control text-dark"></textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <h6 class="heading-small text-light mb-2">Have you suffered from or had symptoms of any of the following</h6>
                                    <div class="pl-lg-4">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="d_tuberclosis">
                                            <label class="custom-control-label text-white" for="customCheck1">Tuberculosis or other chest infection </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="d_nervous">
                                            <label class="custom-control-label text-white" for="customCheck2">Fits, Nervous disease or fainting attacks </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3" name="d_heart">
                                            <label class="custom-control-label text-white" for="customCheck3">Heart Disease or Rheumatic fever </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4" name="d_digestive system">
                                            <label class="custom-control-label text-white" for="customCheck4">Any diseases of the digestive system </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5" name="d_genital">
                                            <label class="custom-control-label text-white" for="customCheck5">Any disease of the Genital-Urinary System </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6" name="d_allergy">
                                            <label class="custom-control-label text-white" for="customCheck6">Allergies to food or drugs </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7" name="d_malaria">
                                            <label class="custom-control-label text-white" for="customCheck7">Malaria</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8" name="d_std">
                                            <label class="custom-control-label text-white" for="customCheck8">Sexually Transmitted Disease </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9" name="d_polio">
                                            <label class="custom-control-label text-white" for="customCheck9">Poliomyelitis </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck10" name="d_physical_deformity">
                                            <label class="custom-control-label text-white" for="customCheck10">Any physical defect or deformity</label>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label class="form-control-label text-light" for="customCheck11">Any disease not mentioned above</label>
                                                <textarea rows="2" class="form-control text-dark" id="customCheck11" name="d_others"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="heading-small text-light mb-2">Has any member of your family suffered from:</h6>
                                    <div class="pl-lg-4">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="input_mf1" name="mf_tuberclosis">
                                            <label class="custom-control-label text-white" for="input_mf1">Tuberculosis </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="input_mf2" name="mf_insanity">
                                            <label class="custom-control-label text-white" for="customCheck9">Insanity or Mental illness</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="input_mf3" name="mf_diabetes">
                                            <label class="custom-control-label text-white" for="input_mf3">Diabetes mellitus</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="input_mf4" name="mf_heart">
                                            <label class="custom-control-label text-white" for="input_mf4">Heart Diseases</label>
                                        </div>
                                    </div>
                                    <h6 class="heading-small text-light mb-3">Have you been immunized against the following diseases</h6>
                                    <div class="pl-lg-4">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input " id="input_im1" name="im_smallpox">
                                            <label class="custom-control-label text-white " for="input_im1">Smallpox</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <input type="number" id="input-day" name="dc_day" class="form-control text-dark" placeholder="Day">
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <input type="number" id="input-month" name="dc_month" class="form-control text-dark" placeholder="Month">
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <input type="number" id="input-year" name="dc_year" class="form-control text-dark" placeholder="Year">
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input " id="input_im2" name="im_tetanus">
                                            <label class="custom-control-label text-white " for="input_im2">Tetanus</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <input type="number" id="input-day" name="imt_day" class="form-control text-dark" placeholder="Day">
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <input type="number" id="input-month" name="imt_month" class="form-control text-dark" placeholder="Month">
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <input type="number" id="input-year" name="imt_year" class="form-control text-dark" placeholder="Year">
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input " id="input_im3" name="im_polio">
                                            <label class="custom-control-label text-white " for="input_im3">Poliomyelitis</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <input type="number" id="input-day" name="imp_day" class="form-control text-dark" placeholder="Day">
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <input type="number" id="input-month" name="imp_month" class="form-control text-dark" placeholder="Month">
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <input type="number" id="input-year" name="imp_year" class="form-control text-dark" placeholder="Year">
                                                    <div class="invalid-feedback">
                                                        Field cannot be empty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5"></div>
                                        <div class="col-sm-2">
                                            <button id="next_button" name="next_button" class="btn btn-primary btn-lg btn-block" type="submit">NEXT</button>
                                        </div>
                                        <div class="col-sm-5"></div>
                                    </div>
                            </form>
                            <!-- End of form  -->
                        </div>
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