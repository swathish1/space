<?php
include_once('config/connection.php');

if (!isset($_SESSION['IS_LOGIN']) || empty($_SESSION)) {
    // Redirect to the login page
    header('Location: login');
    exit();
  }
  
if (isset($_POST['testSubmit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $post = mysqli_real_escape_string($conn, $_POST['post']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);


    $image = $_FILES['image'];
    $filename = $image['name'];
    $fileerror = $image['error'];
    $filetmp = $image['tmp_name'];
    $destinationfile = 'uploads/testimonials/' . $filename;
    move_uploaded_file($filetmp, $destinationfile);

    $query = "insert into testimonials(name,post,comment,image) values ('$name','$post' , '$comment','$filename')";
    $run = mysqli_query($conn, $query);

    header('Location: testimonial?inserted=success');
}
if (isset($_GET['delid'])) {
    $delid = mysqli_real_escape_string($conn, $_GET['delid']);

    // Construct the DELETE query
    $deleteQuery = "DELETE FROM testimonials WHERE id = '$delid'";

    // Execute the DELETE query
    if (mysqli_query($conn, $deleteQuery)) {
        // Record deleted successfully

        echo "<script>window.location.href='testimonial?deleted=success';</script>";
        exit; // Terminate the script to prevent further execution
    } else {
        // Error while deleting the record
        echo "Error deleting record";
    }
}



if (isset($_GET['editid'])) {
    $editid = mysqli_real_escape_string($conn, $_GET['editid']);

    $editQuery = "UPDATE testimonial SET  name'someonex";
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
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
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
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->k
            <?php
            include_once('sidebar.php')

            ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <style>
                        .card {
                            width: 100%px;
                            height: fit-content;
                            margin: 20px;
                            background: white;
                            border-radius: 10px;
                            transition: border-radius 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                        }


                        .shadow {
                            box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1),
                                0 0 0 2px rgb(190, 190, 190),
                                0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
                        }
                    </style>
                    <div class="clearfix">

                        <div class="card shadow"> <br>
                            <h2 style="text-align: center;">Testimonial</h2>
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                <div class="card-title">
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="padding: 30px;"><label for="text-input" class=" form-control-label" style="text-align: justify;">Name</label></div>
                                        <div class="col-12 col-md-9" style="padding: 30px;"><input type="text" id="text-input" name="name" placeholder="Enter Name" class="form-control" required><small class="form-text text-muted"></small></div>
                                    </div>
                                </div>
                                <div class="row form-group" style="padding: 20px;">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Post</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="email-input" name="post" placeholder="post" class="form-control" required><small class="help-block form-text"></small></div>
                                </div>

                                <div class="row form-group" style="padding: 20px;">
                                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Comment</label></div>
                                    <div class="col-12 col-md-9"><textarea name="comment" id="textarea-input" placeholder="Content..." class="form-control" required></textarea></div>
                                </div>

                                <div class="row form-group" style="padding: 10px;">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file" required></div>
                                </div>
                                <center> <button type="submit" name="testSubmit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <!-- <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button> -->
                                </center>
                            </form>
                            <br> <br>

                        </div>
                        <style>
                            .card {
                                width: 850px;
                                height: 550px;
                                background: white;
                                border-radius: 10px;
                                transition: border-radius 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                            }

                            .shadow {
                                box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1),
                                    0 0 0 2px rgb(190, 190, 190),
                                    0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
                            }
                        </style>
                        <div class="col-lg-12" style="margin-top: 20px;">
                            <div class="">
                                <div class="card-header">
                                    <strong class="card-title">Testimonials</strong>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Post</th>
                                                <th style="width: 100px !important;" scope="col">Comment</th>
                                                <th style="width: 150px; height:100px" scope="col">Image</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php    
                                            $query_test = "SELECT * FROM testimonials";
                                            $result_test = mysqli_query($conn, $query_test);
                                            if (mysqli_num_rows($result_test) > 0) {
                                                while ($data_test = mysqli_fetch_assoc($result_test)) {
                                            ?>

                                                    <tr>
                                                        <th scope="row"><?php echo $data_test['name']  ?></th>
                                                        <td><?php echo $data_test['post']  ?></td>
                                                        <td>
                                                            <p style="width: 200px; word-wrap: break-word; white-space: normal;">
                                                                <?php echo $data_test['comment']; ?>
                                                            </p>
                                                        </td>
                                                        <td> <img style="height:150px;border-radius:0;object-fit:contain;width:fit-content" src="uploads/testimonials/<?php echo $data_test['image']  ?>" alt=""></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="testimonial?editid=<?php echo $data_test['id'] ?>" onclick="return confirm('')">Edit</a>

                                                            <a class="btn btn-danger btn-sm" href="testimonial?delid=<?php echo $data_test['id'] ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>

                                                        </td>
                                                    </tr>
                                                    <style>
                                                        .img {
                                                            width: 50px;
                                                            height: 50px;
                                                        }
                                                    </style>
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
                    <!-- partial:partials/_footer.html -->
                    <?php
                    include_once('footer.php')
                    ?>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
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
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/file-upload.js"></script>
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page-->
</body>

</html>