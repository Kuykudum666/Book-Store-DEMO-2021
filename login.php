<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign in</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="tem/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="tem/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="tem/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="tem/assets/images/favicon.png" />
  </head>
  <body>
  <form class="indexbutton" action="main.php">
                        <button class="btn">
                            <h2>HOME</h2>
                        </button>
     </form>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form action="check_login.php" method="post">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control p_input" name="username" placeholder="Username" required value>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control p_input" name="password" placeholder="Password" required value>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="submit" class="btn btn-primary btn-block enter-btn" name="btn_login">Login</button>
                  </div>
                  <div class="d-flex ">
                  <p class="sign-up">Don't have an Account?<a href="register.php"> Sign Up</a></p>
                  </div>

                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="tem/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="tem/assets/js/off-canvas.js"></script>
    <script src="tem/assets/js/hoverable-collapse.js"></script>
    <script src="tem/assets/js/misc.js"></script>
    <script src="tem/assets/js/settings.js"></script>
    <script src="tem/assets/js/todolist.js"></script>
    <script>    
        $(document).ready(function() {
            $('#mytable').DataTable();
        } );
</script>
    <!-- endinject -->
  </body>
</html>