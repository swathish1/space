<?php
include_once('config/connection.php');


if (!isset($_SESSION['IS_LOGIN']) || empty($_SESSION)) {
    // Redirect to the login page
    header('Location: login');
    exit();
  }


if (isset($_GET['delid'])) {
    $delid = mysqli_real_escape_string($conn, $_GET['delid']);

    // Construct the DELETE query
    $deleteQuery = "DELETE FROM registration_form WHERE id = '$delid'";

    // Execute the DELETE query
    if (mysqli_query($conn, $deleteQuery)) {
        // Record deleted successfully

        echo "<script>window.location.href='regform?deleted=success';</script>";
        exit; // Terminate the script to prevent further execution
    } else {
        // Error while deleting the record
        echo "Error deleting record";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SACRED HEART INSTITUTIONS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/logo.jpg" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.jpg" style="height: 40px;width: 40px;" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo.jpg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="images/faces/face28.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="icon-ellipsis"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>


            <!-- sidebar -->
            <?php
            include_once('sidebar.php');
            ?>


            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                        <div class="stat-icon dib flat-color-1">
                                            <i class="pe-7s-user"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib">

                                                <div class="stat-text"><span style="font-weight: bold;">&ensp;&ensp;&ensp;Welcome</span></div>
                                                <div class="stat-heading">&ensp;&ensp;&ensp;Admin</div>
                                            </div>
                                        </div>
                                        <center>
                                            <div class="col-lg-12" style="margin-top: 20px;">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong class="card-title">Registration Form</strong>
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">Phone Number</th>
                                                                    <th scope="col">Place</th>
                                                                    <th scope="col">Email</th>

                                                                    <th scope="col">Courses</th>
                                                                    <th scope="col">Message</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $query_test = "SELECT * FROM registration_form";
                                                                $result_test = mysqli_query($conn, $query_test);
                                                                if (mysqli_num_rows($result_test) > 0) {
                                                                    while ($data_test = mysqli_fetch_assoc($result_test)) {
                                                                ?>

                                                                        <tr>
                                                                            <th scope="row"><?php echo $data_test['name']  ?></th>
                                                                            <td><?php echo $data_test['mobile']  ?></td>
                                                                            <td><?php echo $data_test['place']  ?></td>
                                                                            <td><?php echo $data_test['email']  ?></td>
                                                                            <td><?php echo $data_test['courses']  ?></td>
                                                                            <td class="fixed-width-message"><?php echo htmlspecialchars($data_test['message']); ?></td>

                                                                            <td>

                                                                                <a class="btn btn-danger btn-sm" href="regform?delid=<?php echo $data_test['id'] ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>

                                                                            </td>
                                                                        </tr>

                                                                <?php

                                                                    }
                                                                }

                                                                ?>
                                                                <button type="button" class="btn btn-primary btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="Popover Title"></button>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <style>
                                                        .fixed-width-message {
                                                            max-width: 200px;
                                                            /* Set your desired fixed width */
                                                            word-wrap: break-word;
                                                            white-space: normal;
                                                            /* Ensures that the text wraps to the next line */
                                                            overflow: hidden;
                                                            text-overflow: ellipsis;
                                                            /* Optional: Adds ellipsis (...) for overflowed text */
                                                        }

                                                        table {
                                                            width: 100%;
                                                            border-collapse: collapse;
                                                        }

                                                        th,
                                                        td {
                                                            border: 1px solid #ddd;
                                                            padding: 8px;
                                                        }
                                                    </style>
                                                </div>
                                            </div>
                                        </center>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> © 2024 <span style="font-weight: bold;">Sacred Heart Institutions</span></span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Designed By <span style="font-weight: bold;">CYBMIRROR INNOVATIONS</span></span>
                        </div>

                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="vendors/chart.js/Chart.min.js"></script>
        <script src="vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="js/dashboard.js"></script>
        <script src="js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
</body>

</html>