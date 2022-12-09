<?php
        require_once('../database/condb.php');
        
        if(isset($_GET['book_type_edit'])){

            $u_id = $_GET['book_type_edit'];
       
            $sql = "SELECT * FROM tbl_category WHERE c_id = '$u_id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

        }

        if(isset($_POST['btn_edit'])){

            $check_id   =   $_POST['btn_edit'];
            $name      =   $_POST['name'];

            $sql = "UPDATE tbl_category SET name='$name' 
            WHERE c_id='$check_id'";

            if (mysqli_query($conn, $sql)) {

                echo "<script>alert('แก้ไขข้อมูล เรียบร้อย...!!')</script>";
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
            <h1>แก้ไขชื่อประเภท/หมวดหมู่</h1>
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
                <h3 class="card-title">ฟอร์มชื่อประเภท/หมวดหมู่</small></h3>
              </div>

              <form action="" method="post">

                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อประเภท/หมวดหมู่</label>
                    <input type="text" name="name" class="form-control" placeholder="ชื่อ-สกุล" value="<?= $row['name']?>" required>
                  </div>

                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btn_edit" value="<?= $row['c_id']?>">บันทึก</button>
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