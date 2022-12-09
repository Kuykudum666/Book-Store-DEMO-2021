<?php

        if(isset($_POST['btn_register'])){

            require_once('database/condb.php');
            
            $fullname      =   $_POST['fullname'];
            $username       =   $_POST['username'];
            $password       =   $_POST['password'];
            $phone   =   $_POST['phone'];
            $email     =   $_POST['email'];
            $status     =   '0';


            $select = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '".$_POST['username']."'");
            if(mysqli_num_rows($select)) {
              echo("<script>alert('Username Exist')</script>");
              echo "<meta http-equiv=\"refresh\" content=\"0; URL=register.php\">";
              exit;
            }

            $select = mysqli_query($conn, "SELECT * FROM tbl_user WHERE phone = '".$_POST['phone']."'");
            if(mysqli_num_rows($select)) {
              echo("<script>alert('Phone Exist')</script>");
              echo "<meta http-equiv=\"refresh\" content=\"0; URL=register.php\">";
              exit;
            }
            $select = mysqli_query($conn, "SELECT * FROM tbl_user WHERE email = '".$_POST['email']."'");
            if(mysqli_num_rows($select)) {
              echo("<script>alert('Email Exist')</script>");
              echo "<meta http-equiv=\"refresh\" content=\"0; URL=register.php\">";
              exit;
            }

            $sql = "INSERT INTO tbl_user (fullname, username, password, phone, email, status)
            VALUES ('$fullname', '$username', '$password','$phone','$email', '$status')";

            if (mysqli_query($conn, $sql)) {

                echo "<script>alert('เพิ่มข้อมูล เรียบร้อย...!!')</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; URL=login.php\">";
                exit;

            } else {

                echo "<script>alert('Error..!!')</script>";
                echo"<script>window.location='javascript:history.back(-1)';</script>";
                exit;

            }

            mysqli_close($conn);

        }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
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
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register</h3>
                <form action="" method="post">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control p_input" name="username" placeholder="Username" required value>
                  </div> 
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control p_input" name="password" placeholder="Password" required value>

                  </div>
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control p_input" name="fullname" placeholder="Name" required value>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control p_input" name="email" placeholder="Email" >
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="phone" class="form-control p_input" name="phone" placeholder="Phone">
                  </div>
                 
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="submit" class="btn btn-primary btn-block enter-btn" name="btn_register">บันทึก</button>
                  </div>

                  <p class="sign-up text-center">Already have an Account?<a href="login.php"> Sign Up</a></p>
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