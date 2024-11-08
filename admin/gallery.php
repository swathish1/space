<?php
include_once('config/connection.php');

if (!isset($_SESSION['IS_LOGIN']) || empty($_SESSION)) {
  // Redirect to the login page
  header('Location: login');
  exit();
}
if (isset($_POST['uploadImage'])) {
  $category = $_POST['category'];
  $imgCount = count($_FILES['image']['name']);
  for ($i = 0; $i < $imgCount; $i++) {
    $imgName = $_FILES['image']['name'][$i];
    $imgTempName = $_FILES['image']['tmp_name'][$i];


    $timestamp = time();
    $imgNameWithTimestamp = $timestamp . '_' . $imgName;

    $targetpath = "uploads/gallery/" . $imgNameWithTimestamp;
    if (move_uploaded_file($imgTempName, $targetpath)) {
      $sql = "insert into gallery(image,category)values('$imgNameWithTimestamp','$category')";
      $result = mysqli_query($conn, $sql);
    }
  }
  if ($result) {
    echo ("<script LANGUAGE='JavaScript'>
          window.location.href='gallery?inserted=success';
          </script>");
  }
}
if (isset($_GET['delid'])) {
  $delid = mysqli_real_escape_string($conn, $_GET['delid']);


  $deleteQuery = "DELETE FROM gallery WHERE id = '$delid'";


  if (mysqli_query($conn, $deleteQuery)) {


    echo "<script>window.location.href='gallery?deleted=success';</script>";
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
  <title> JETOFF SPACE </title>
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
  <link rel="shortcut icon" href="images/spacelogo.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/spacelogo.png" style="height: 100px;width: 120px;" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/spacelogo.png" style="height: 100px;width: 120px;" alt="logo" /></a>
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
            <div class="col-lg-6 grid-margin stretch-card">

            </div>
            <div class="col-lg-6 grid-margin stretch-card">

            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="col-lg-6">
                <div class="card mb-12">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Upload New Image</h5>
                  </div>
                  <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                      <div class="row mb-3">
                        <label class="col-sm-4 col-form-label" for="category">Category</label>
                        <div class="col-sm-8">
                          <div class="input-group input-group-merge">
                            <div class="mb-3 w-100">
                              <select name="category" class="form-control" id="category" required>
                                <option value="" disabled selected>Select Category</option>
                                <option value="Spacecraft Design">Spacecraft Design</option>
                                <option value="Rocket Launches">Rocket Launches</option>
                                <option value="Space Missions">Space Missions</option>
                                <option value="Astronomy Events">Astronomy Events</option>
                                <option value="Astrobiology">Astrobiology</option>
                              </select>

                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <div class="mb-3 w-100">
                              <input name="image[]" class="form-control" type="file" id="formFile" required />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button class="pushable" type="submit" name="uploadImage">
                            <span class="shadow"></span>
                            <span class="edge"></span>
                            <span class="front">Upload</span>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <style>
                  .card {
                    border-radius: 10px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    background-color: #fff;
                    padding: 20px;
                    max-width: 650px;
                  }

                  .card-header {
                    background-color: #f7f7f7;
                    border-bottom: 1px solid #e0e0e0;
                    padding: 15px;
                    border-radius: 10px 10px 0 0;
                  }

                  .card-body {
                    padding: 20px;
                  }

                  .input-group-merge {
                    position: relative;
                  }

                  .input-group-merge .form-control {
                    border-radius: 5px;
                    border: 1px solid #e0e0e0;
                    padding: 10px;
                  }

                  .input-group-merge .form-control:focus {
                    border-color: #007bff;
                    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
                  }

                  .pushable {
                    position: relative;
                    background: transparent;
                    padding: 0px;
                    border: none;
                    cursor: pointer;
                    outline-offset: 4px;
                    outline-color: deeppink;
                    transition: filter 250ms;
                    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                  }

                  .shadow {
                    position: absolute;
                    top: 0;
                    left: 0;
                    height: 100%;
                    width: 100%;
                    background: hsl(226, 25%, 69%);
                    border-radius: 8px;
                    filter: blur(2px);
                    will-change: transform;
                    transform: translateY(2px);
                    transition: transform 600ms cubic-bezier(0.3, 0.7, 0.4, 1);
                  }

                  .edge {
                    position: absolute;
                    top: 0;
                    left: 0;
                    height: 100%;
                    width: 100%;
                    border-radius: 8px;
                    background: linear-gradient(to right,
                        hsl(248, 39%, 39%) 0%,
                        hsl(248, 39%, 49%) 8%,
                        hsl(248, 39%, 39%) 92%,
                        hsl(248, 39%, 29%) 100%);
                  }

                  .front {
                    display: block;
                    position: relative;
                    border-radius: 8px;
                    background: hsl(248, 53%, 58%);
                    padding: 16px 32px;
                    color: white;
                    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
                      Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: 1.5px;
                    font-size: 1rem;
                    transform: translateY(-4px);
                    transition: transform 600ms cubic-bezier(0.3, 0.7, 0.4, 1);
                  }

                  .pushable:hover {
                    filter: brightness(110%);
                  }

                  .pushable:hover .front {
                    transform: translateY(-6px);
                    transition: transform 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
                  }

                  .pushable:active .front {
                    transform: translateY(-2px);
                    transition: transform 34ms;
                  }

                  .pushable:hover .shadow {
                    transform: translateY(4px);
                    transition: transform 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
                  }

                  .pushable:active .shadow {
                    transform: translateY(1px);
                    transition: transform 34ms;
                  }

                  .pushable:focus:not(:focus-visible) {
                    outline: none;
                  }
                </style>
              </div>

            </div>
            <div class="col-lg-12">
              <div class="">
                <div class="card-header">
                  <strong class="card-title">Uploaded Images</strong>
                </div>
                <div>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Category</th>
                        <th scope="col">image</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $query_test = "SELECT * FROM gallery";
                      $result_test = mysqli_query($conn, $query_test);
                      if (mysqli_num_rows($result_test) > 0) {

                        while ($data_test = mysqli_fetch_assoc($result_test)) {


                      ?>

                          <tr>
                            <th scope="row"><?php echo $data_test['category']  ?></th>

                            <td> <img style="width: 250px;height: 150px;border-radius:0" src="uploads/gallery/<?php echo $data_test['image']  ?>" alt=""></td>
                            <td>
                              <a class="btn btn-danger btn-sm" href="gallery?delid=<?php echo $data_test['id'] ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>

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
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php
        include_once('footer.php')
        ?>
        <!-- partial -->
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