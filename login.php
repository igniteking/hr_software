<?php include('./includes/connection.php'); ?>
<?php include('./includes/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HR Software | Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./vendors/feather/feather.css">
  <link rel="stylesheet" href="./vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <?php $status = @$_GET['status'];
    if ($status == '1') {
      echo "<div class='error-styler'><center>
    <p class='error-styler bg-success' style='padding: 10px; margin: 10px; font-size: 14px; color: #fff; font-weight: 600; border-radius: 8px; text-align: center;'>Your account has been successfully created!<p>
    </center></div>";
    } else {
      $status = "";
    } ?>
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <!-- <img src="../../images/logo.svg" alt="logo"> -->LOGO
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <?php
              if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($conn, $_POST['user_email']);
                $pwd = mysqli_real_escape_string($conn, $_POST['user_password']);
                echo Login($conn, $email, $pwd);
              }
              ?>
              <form class="pt-3" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="user_email" id="exampleInputEmail1" placeholder="E-Mail">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="user_password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN" name="submit" />
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-google auth-form-btn">
                    <i class="ti-google mr-2"></i>Connect using google
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="./register.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <script src="./vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./assets/js/off-canvas.js"></script>
    <script src="./assets/js/hoverable-collapse.js"></script>
    <script src="./assets/js/template.js"></script>
    <script src="./assets/js/settings.js"></script>
    <script src="./assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>