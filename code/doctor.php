<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Doctor Consultancy</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="doctor.php">
            <div class="sidebar-brand-icon ">
                <i class="fas fa-stethoscope"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Consultation</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Dashboard
        </div>


        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="docprofile.php">
                <i class="fas fa-fw fa-person-booth"></i>
                <span>Doctor Profile</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="doctor.php">
                <i class="fas fa-fw fa-book-medical"></i>
                <span>Patient Consultation</span></a>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for Patient" aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for Patient" aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>




                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Profile</span>
                            <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-3 text-gray-800">Patient Consultation List</h1>
                <?php
                include 'dbconnection.php';
                $sql = "Select * from vitals";
                $result = mysqli_query($conn, $sql);
                echo '<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="width:5%">#</th>
                            <th scope="col" style="width:20%">Patient ID</th>

                            <th scope="col">Name</th>

                            <th scope="col" style="width:30%">Action</th>
                        </tr>
                    </thead>';
                while ($row = mysqli_fetch_array($result)) {
                    $i = 1;
                    $pat_name = $row['patient_name'];
                    $pat_id = $row['patient_id'];
                    $pat_weight = $row['weight'];
                    $pat_height = $row['height'];
                    $pat_temp = $row['temperature'];
                    $pat_bp = $row['blood_presssure'];

                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>' . $i++ . '</td>';
                    echo '<td>' . $pat_id . '</td>';
                    echo '<td>' . $pat_name . '</td>';
                    echo '<td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Open Patient Consultation
                        </button>
                         <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">Lab Test to Conduct</button>
                    </td>';
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';
                }

                ?>

                <div class="container">

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title " id="exampleModalLabel">Patient Consultation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Triage notes</h5>
                                    <h6>Patient Name:
                                        <?php
                                        echo $pat_name
                                        ?>
                                    </h6>
                                    <p>
                                        Blood pressure:
                                        <?php
                                        echo $pat_bp
                                        ?>

                                        <span style="float:right;">Weight:
                                                <?php
                                                echo $pat_weight . " kg"
                                                ?>
                                            </span>
                                    </p>
                                    <p>Height:
                                        <?php
                                        echo $pat_height . " cm"
                                        ?>

                                        <span style="float:right">Captured temperature:
                                                <?php
                                                echo $pat_temp . " degrees celcius"
                                                ?>
                                            </span>
                                    </p>
                                    <h5>Doctor's notes</h5>
                                    <form action="sendtobilling.php" method="post">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control col-lg-10" id="pid" name="pid" value="<?php echo $pat_id ?>" />
                                            <input type="hidden" class="form-control col-lg-10" id="pname" name="pname" value="<?php echo $pat_name ?>" />
                                            <p>Patient Symptoms:</p>
                                            <textarea class="form-control col-lg-12" name="psymptoms" placeholder="Patient Symptoms" required></textarea><br />
                                            <p>Diagnosis:</p>
                                            <textarea class="form-control col-lg-12" name="pdiagnosis" placeholder="Diagnosis" required></textarea><br />
                                            <p>Prescription:</p>
                                            <textarea class="form-control col-lg-12" name="pmeds" placeholder="Prescription" required></textarea><br />
                                            <p>Patient Next Visit:</p>
                                            <input type="date" class="form-control col-lg-12" name="pdate" placeholder="Next Visit" required /><br />
                                            <button type="pharmsend" class="btn btn-facebook">Send to Pharmacy</button>
                                            <button name="labsend" class="btn btn-success">Send to Lab</button>
                                            <button name="billsend" class="btn btn-primary" type="Submit">Send to Billing</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title " id="exampleModalLabel">Lab Tests to Conduct</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="form-group">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="bloodtest" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Blood Tests
                                                </label>
                                            </div><br />
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="stooltest" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Stool Tests
                                                </label>
                                            </div><br />
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="urinetest" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Urine Sample Test
                                                </label>
                                            </div><br />
                                            <button type="labsend" class="btn btn-facebook">Send to Laboratory</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for Patient" aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>



                    </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">


                        <div class="container">




                        </div>
                    </div>
                </div>


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Hospital 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>