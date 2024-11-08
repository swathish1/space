<?php
include_once('config/connection.php');

if (!isset($_SESSION['IS_LOGIN']) || empty($_SESSION)) {

    header('Location: login');
    exit();
}
if (isset($_GET['delid'])) {
    $delid = mysqli_real_escape_string($conn, $_GET['delid']);

    $deleteQuery = "DELETE FROM contact_form WHERE id = '$delid'";

    if (mysqli_query($conn, $deleteQuery)) {


        echo "<script>window.location.href='contactform?deleted=success';</script>";
        exit;
    } else {

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
    <title>JETOFF SPACE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">

    <!-- Include DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.css">
    <!-- Buttons CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.css">

    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <!-- Responsive JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.js"></script>
    <!-- Buttons JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.js"></script>
    <!-- JSZip -->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <!-- Button HTML5 export -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.js"></script>

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/spacelogo.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/spacelogo.png" style="height: 100px;width: 120px;"  class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/spacelogo.png" style="height: 100px;width: 120px;"  alt="logo" /></a>
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

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="images/faces/face28.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                            <a class="dropdown-item" href="logout.php">
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

                                        <div class="col-lg-12" style="margin-top: 20px;">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong class="card-title">Contact Form</strong>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Phone</th>
                                                                <th scope="col">Message</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $query_test = "SELECT * FROM contact_form";
                                                            $result_test = mysqli_query($conn, $query_test);
                                                            if (mysqli_num_rows($result_test) > 0) {
                                                                while ($data_test = mysqli_fetch_assoc($result_test)) {
                                                            ?>

                                                                    <tr>
                                                                        <th scope="row"><?php echo $data_test['name']  ?></th>
                                                                        <td><?php echo $data_test['email']  ?></td>
                                                                        <td><?php echo $data_test['phone']  ?></td>
                                                                        <td><?php echo $data_test['message']  ?></td>
                                                                        <td>
                                                                            <a class="btn btn-danger btn-sm" href="contactform?delid=<?php echo $data_test['id'] ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>

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
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .table-responsive {
                                            overflow-x: auto;
                                            -webkit-overflow-scrolling: touch;
                                            margin-bottom: 1.5rem;
                                        }

                                        .table {
                                            width: 100%;
                                            max-width: 100%;
                                            margin-bottom: 1rem;
                                            background-color: transparent;
                                        }

                                        .table-bordered {
                                            border: 1px solid #dee2e6;
                                        }

                                        .table thead th {
                                            vertical-align: bottom;
                                            border-bottom: 2px solid #dee2e6;
                                        }

                                        .table tbody+tbody {
                                            border-top: 2px solid #dee2e6;
                                        }

                                        .table td,
                                        .table th {
                                            padding: .75rem;
                                            vertical-align: top;
                                            border-top: 1px solid #dee2e6;
                                        }

                                        .table .message-column {
                                            word-wrap: break-word;
                                            word-break: break-all;
                                            white-space: nowrap;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                        }

                                        .table .btn-sm {
                                            padding: .25rem .5rem;
                                            font-size: .875rem;
                                            line-height: 1.5;
                                            border-radius: .2rem;
                                        }
                                    </style>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <?php
                    include_once('footer.php')
                    ?>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <!-- Including JS libraries from local files -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- Plugin js for this page -->
        <script src="vendors/chart.js/Chart.min.js"></script>
        <script src="vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="js/dataTables.select.min.js"></script>

        <!-- Including JS libraries from CDN to avoid conflicts -->
        <!-- jQuery -->
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- DataTables JS -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <!-- Responsive JS -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.js"></script>
        <!-- Buttons JS -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.js"></script>
        <!-- JSZip -->
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <!-- Button HTML5 export -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.js"></script>

        <!-- Custom js for this page-->
        <script src="js/dashboard.js"></script>
        <script src="js/Chart.roundedBarCharts.js"></script>
        <!-- endinject -->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/todolist.js"></script>
        <!-- endinject -->
        <script>
            $(document).ready(function() {
                $('#datatable').DataTable({
                    responsive: true,
                    dom: 'Bfrtip',
                    buttons: [
                        'excel'
                    ]
                });
            });
        </script>
        <!-- End custom js for this page-->
</body>

</html>