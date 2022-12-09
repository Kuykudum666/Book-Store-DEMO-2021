<?php
        require_once('../database/condb.php');
        
        if(isset($_GET['user_edit'])){

            $u_id = $_GET['user_edit'];
       
            $sql = "SELECT * FROM tbl_user WHERE u_id = '$u_id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

        }

        if(isset($_POST['btn_edit'])){

            $check_id   =   $_POST['btn_edit'];
            $name      =   $_POST['fullname'];
            $user       =   $_POST['username'];
            $pass       =   $_POST['password'];
            $phone   =   $_POST['phone'];
            $email     =   $_POST['email'];

            $sql = "UPDATE tbl_user SET fullname='$name', username='$user', password='$pass', phone='$phone' , email='$email' 
            WHERE u_id='$check_id'";

            if (mysqli_query($conn, $sql)) {

                echo "<script>alert('แก้ไขข้อมูล เรียบร้อย...!!')</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; URL=index.php?profile\">";
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
            <h1>แก้ไขข้อมูลสมาชิก</h1>
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
                <h3 class="card-title">ฟอร์มแก้ไขสมาชิก</small></h3>
              </div>

              <form action="" method="post">

                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อ-สกุล</label>
                    <input type="text" name="fullname" class="form-control" placeholder="ชื่อ-สกุล" value="<?= $row['fullname']?>" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" value="<?= $row['username']?>" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" name="password" class="form-control"  placeholder="Password" value="<?= $row['password']?>" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">เบอร์โทร</label>
                    <input type="text" name="phone" class="form-control" placeholder="เบอร์โทร" value="<?= $row['phone']?>" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="<?= $row['email']?>" required>
                  </div>

                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btn_edit" value="<?= $row['u_id']?>">บันทึก</button>
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