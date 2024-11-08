<?php
include_once('config/connection.php');


$invalidlogin = 0;
$deactivatedStaff = 0;

if (isset($_POST["loginsubmit"])) {

    $email = $_POST["username"];
    $password = $_POST["password"];





    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if ($user['status'] == '1' && password_verify($password, $user['password'])) {
            // user authentication successful
            // set session variables and redirect
            // ...


            $_SESSION['IS_LOGIN'] = 'true';




            session_set_cookie_params(12 * 60 * 60);
            session_regenerate_id(true);

            header('Location: index');
            exit();
        } elseif ($user['status'] == '0') {
            $deactivatedStaff = 1;
        } else {
            $invalidlogin = 1;
        }
    } else {
        $invalidlogin = 1;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> SACRED HEART INSTITUTIONS - Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo.jpg" />
</head>
<style>
    .content-wrapper{
        background-color: transparent;
        
    }
    .background{
      
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>
<body class="background" style="background-image: url(../admin/images/pexels-pok-rie-33563-2049422.jpg);">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <center><img src="../admin/images/logo.jpg" alt="logo" style="width: 150px;"></center>
              </div>
           
              <form class="pt-3" action="" method="post">
                <div class="form-group">
                  <input type="email" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="mt-3">
                  <button name="loginsubmit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
