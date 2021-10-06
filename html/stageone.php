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
// session_start();
if (isset($_POST['userid'])) {
    $profilePhoto = $_POST["profilePhoto"];
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $admNumber = $_POST['admissionNum'];
    $password = $_POST['password'];
    $id = $_POST['userid'];
    $email = $_POST['email'];
}
// if (isset($_SESSION['profilePhoto'])) {
//     $profilePhoto = $_SESSION["profilePhoto"];
// }
// if (isset($_SESSION['firstName']) and isset($_SESSION['lastName'])) {
//     $firstname = $_SESSION['firstName'];
//     $lastname = $_SESSION['lastName'];
// }
// if (isset($_SESSION['admissionNum'])) {
//     $admNumber = $_SESSION['admissionNum'];
// }
// if (isset($_SESSION['password'])) {
//     $password = $_SESSION['password'];
// }
// if (isset($_SESSION['userid'])) {
//     $id = $_SESSION['userid'];
// }

$completion = 0;

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
                            <a class="nav-link " href="../html/adminProfile.php">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text  text-light">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../html/tables.php">
                                <i class="ni ni-circle-08 text-pink"></i>
                                <span class="nav-link-text  text-light">Tables</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#stages" role="button" aria-expanded="false" aria-controls="stages">
                                <i class="ni ni-bullet-list-67 text-default"></i>
                                <span class="nav-link-text  text-light">Enroll</span>
                            </a>
                            <div class="collapse pl-lg-5 pl-sm-5 pl-xs-5" id="stages">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link collapse <?php if ($completion >= 25) {
                                                                        echo "disabled";
                                                                    } ?>" href="../html/stageone.php">
                                            <i class="ni ni-check-bold text-default"></i>
                                            <span class="nav-link-text   <?php if ($completion == 25) {
                                                                                echo "text-muted";
                                                                            } else {
                                                                                echo "text-light";
                                                                            } ?>">Stage One</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapse <?php if ($completion >= 50) {
                                                                        echo "disabled";
                                                                    } ?>" href="../html/stagetwo.php">
                                            <i class="ni ni-check-bold text-default"></i>
                                            <span class="nav-link-text   <?php if ($completion >= 50) {
                                                                                echo "text-muted";
                                                                            } else {
                                                                                echo "text-light";
                                                                            } ?>">Stage Two</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapse <?php if ($completion >= 75) {
                                                                        echo "disabled";
                                                                    } ?>" href="../html/stagethree.php">
                                            <i class="ni ni-check-bold text-default"></i>
                                            <span class="nav-link-text  <?php if ($completion >= 75) {
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
                            <form class="needs-validation" id="stageone" novalidate>
                                <input type="hidden" id="firstName" value=<?php echo $firstname ?>>
                                <input type="hidden" id="lastName" value=<?php echo $lastname ?>>
                                <input type="hidden" id="profilePhoto" value=<?php echo $profilePhoto ?>>
                                <input type="hidden" id="admissionNum" value=<?php echo $admNumber ?>>
                                <input type="hidden" id="userid" value=<?php echo $id ?>>
                                <input type="hidden" id="password" value=<?php echo $password ?>>
                                <input type="hidden" id="email" value=<?php echo $email ?>>
                                <h6 class="heading-small text-muted mb-4">User information</h6>
                                <div class="pl-lg-4 pl-sm-4 pl-xs-4">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input-first-name">First Name</label>
                                                <input type="text" id="input-first-name" class="form-control text-dark" value=<?php echo $firstname; ?>>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input-last-name">Last Name</label>
                                                <input type="text" id="input-last-name" class="form-control text-dark" value=<?php echo $lastname; ?>>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="input-othernames">Email</label>
                                                <input type="email" id="input-othernames" class="form-control text-dark" placeholder="Email" required>
                                                <div class="invalid-feedback">
                                                    Please enter your email
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="school">School Admitted Into</label>
                                                <select name=<?php echo "school"  ?> id="school" required>
                                                    <option value="" class="form-control text-dark">Please choose your school</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please choose your school
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-light" for="programme">Programme Admitted For</label>
                                                <select name="programme" id="programme" required>
                                                    <option value="" class="form-control text-dark">Please choose your programme</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please choose your programme
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5"></div>
                                        <div class="col-sm-2">
                                            <button class="btn btn-primary btn-lg " type="submit">NEXT</button>
                                        </div>
                                        <div class="col-sm-5"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- End of form  -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div class="mb-8"></div>
            <footer class="footer pt-0 bg-dark ">
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
        //On window load fill the school selectable with values
        window.onload = function() {
            var schoolSel = document.getElementById("school");
            var programmeSel = document.getElementById("programme");
            // alert("...............");
            xhr = new XMLHttpRequest();
            // xhr.responseType = 'json';
            xhr.onreadystatechange = function() {
                if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == "200") {
                    let response = JSON.parse(xhr.responseText);
                    // alert
                    for (let index in response) {
                        for (let school in response[index]) {
                            schoolSel.options[schoolSel.options.length] = new Option(school, school);
                        }
                    }
                    //on selecting a school display the appropriate associated  programmes
                    schoolSel.onchange = function() {
                        programmeSel.length = 1;
                        //display correct values
                        for (let index in response) {
                            for (let school in response[index][this.value]) {
                                programmeSel.options[programmeSel.options.length] = new Option(response[index][this.value][school], response[index][this.value][school]);
                            }
                        }
                    }

                }
            }
            xhr.open("GET", "../php/schools.php", true);
            xhr.send();


        }
        //  JavaScript for disabling form submissions if there are invalid fields

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if () {

                    } else if (form.checkValidity() === false) {
                        alert('stop son')
                        event.preventDefault();
                        event.stopPropagation();
                    } else {
                        let profilePhoto = document.getElementById('profilePhoto').value;
                        let firstName = document.getElementById('firstName').value;
                        let lastName = document.getElementById('lastName').value;
                        let admissionNum = document.getElementById('admissionNum').value;
                        let password = document.getElementById('password').value;
                        let userid = document.getElementById('userid').value;
                        let email = document.getElementById('email').value;
                        let program = document.getElementById("programme").value;
                        let stage = 1;
                        let complete = 25;
                        let dataObj = {
                            'profilePhoto': profilePhoto,
                            'firstName': firstName,
                            'lastName': lastName,
                            'admissionNum': admissionNum,
                            'password': password,
                            'userid': userid,
                            'email': email,
                            'program': program,
                            'stage': stage,
                            'complete': complete
                        }
                        $.ajax({
                            type: "post",
                            url: "../php/advanceStage.php",
                            data: dataObj,
                            dataType: 'json',
                            success: function(msg) {
                                alert(msg);
                                window.location.href = 'stagetwo.php';

                            }
                        });
                        alert('Proceed')

                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);

        function validateEmail() {
            let email = document.getElementById('email').value;
            if
        }
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