<?php

        if(isset($_POST['btn_save'])){

            require_once('../database/condb.php');
            
            $sname      =   $_POST['name'];
           

            $sql = "INSERT INTO tbl_category (name)
            VALUES ('$sname')";

            if (mysqli_query($conn, $sql)){

                echo "<script>alert('เพิ่มข้อมูล เรียบร้อย...!!')</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; URL=index.php?book_type\">";
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
            <h1>เพิ่มประเภทหนังสือ</h1>
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
                <h3 class="card-title">ฟอร์มเพิ่มประเภทหนังสือ</small></h3>
              </div>

              <form action="" method="post">

                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อประเภท</label>
                    <input type="text" name="name" class="form-control" placeholder="ชื่อประเภท" required>
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