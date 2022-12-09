<?php

        if(isset($_POST['btn_save'])){

            require_once('../database/condb.php');
            
            $name      =   $_POST['fullname'];
            $user       =   $_POST['username'];
            $pass       =   $_POST['password'];
            $phone   =   $_POST['phone'];
            $email     =   $_POST['email'];
            $status     =   '0';
            
            $select = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '".$_POST['username']."'");
            if(mysqli_num_rows($select)) {
              echo("<script>alert('Username Exist')</script>");
              echo "<meta http-equiv=\"refresh\" content=\"0; URL=index.php?user_add\">";
              exit;
            }

            $select = mysqli_query($conn, "SELECT * FROM tbl_user WHERE phone = '".$_POST['phone']."'");
            if(mysqli_num_rows($select)) {
              echo("<script>alert('Phone Exist')</script>");
              echo "<meta http-equiv=\"refresh\" content=\"0; URL=index.php?user_add\">";
              exit;
            }
            $select = mysqli_query($conn, "SELECT * FROM tbl_user WHERE email = '".$_POST['email']."'");
            if(mysqli_num_rows($select)) {
              echo("<script>alert('Email Exist')</script>");
              echo "<meta http-equiv=\"refresh\" content=\"0; URL=index.php?user_add\">";
              exit;
            }

            $sql = "INSERT INTO tbl_user (fullname, username, password , phone, email, status)
            VALUES ('$name', '$user', '$pass','$phone', '$email', '$status')";

            if (mysqli_query($conn, $sql)) {

                echo "<script>alert('เพิ่มข้อมูล เรียบร้อย...!!')</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; URL=index.php?user\">";
                exit;

            } else {

                echo "<script>alert('Error..!!')</script>";
                echo"<script>window.location='javascript:history.back(-1)';</script>";
                exit;

            }

            mysqli_close($conn);

        }
?>

<div class="content-wrapper" style="min-height: 1345.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>เพิ่มข้อมูลสมาชิก</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">ฟอร์มเพิ่มข้อมูลสมาชิก</small></h3>
              </div>

              <form action="" method="post">

                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อ-สกุล</label>
                    <input type="text" name="fullname" class="form-control" placeholder="ชื่อ-สกุล" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control"  placeholder="Password" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">เบอร์โทร</label>
                    <input type="text" name="phone" class="form-control" placeholder="เบอร์โทร" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" >
                  </div>

                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btn_save">บันทึก</button>
                </div>

              </form>

            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>