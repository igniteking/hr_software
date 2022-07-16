<?php include('./includes/connection.php') ?>
<?php include('./includes/functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HR Software | Registration</title>
  <!-- inject:css -->
  <link rel="stylesheet" href="./assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <!-- <img src="../../images/logo.svg" alt="logo"> -->LOGO
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <?php
              $submit = @$_POST['submit'];
              $username = strip_tags(@$_POST['username']);
              $email = strip_tags(@$_POST['email']);
              $password = strip_tags(@$_POST['password']);
              $user_type = strip_tags(@$_POST['user_type']);
              $r_pswd = strip_tags(@$_POST['repeat-password']);
              $date = date("Y-m-d");
              if ($submit) {
                echo Register($user_type, $username, $password, $r_pswd, $conn, $email, $date);
              }
              ?>
              <form class="pt-3" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" id="exampleInputUsername1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <select class="form-control form-control-lg" name="user_type" id="exampleFormControlSelect2">
                    <option>Select User Type ...</option>
                    <option value="Companies">Companies</option>
                    <option value="Candidates">Candidates</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="repeat-password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mb-4">
                  <label class="form-check-label text-muted">
                    By creating an account, you will be automatically agreeing to all the Terms & Conditions
                  </label>
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit" value="SIGN UP" />
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php" class="text-primary">Login</a>
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
  <!-- endinject -->
</body>

</html>