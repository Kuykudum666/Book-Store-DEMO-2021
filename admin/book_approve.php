<?php
        require_once('../database/condb.php');
        
        if(isset($_GET['book_approve'])){

            $ct_id = $_GET['book_approve'];
       
            $sql = $sql ="SELECT * FROM tbl_book inner join tbl_user on tbl_book.u_id = tbl_user.u_id inner join tbl_category on tbl_book.c_id = tbl_category.c_id WHERE bookid = '$ct_id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

        }

        if(isset($_POST['btn_edit'])){
            $check_id   =   $_POST['btn_edit'];
            $status      =   '1';
            
           

            $sql = "UPDATE tbl_book SET  status_book='$status'
            WHERE bookid='$check_id'";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('อนุมัติ เรียบร้อย...!!')</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; URL=index.php?approve\">";

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
            <h1>อนุมัติหนังสือ</h1>
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
                <h3 class="card-title">ฟอร์มอนุมัติหนังสือ</small></h3>
              </div>

              <form action="" method="post">

<div class="card-body">
  <div class="form-group">
 <img src="../upload/<?php echo$row['file_name'];?>" height="500px" width="300px">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">ชื่อหนังสือ <?= $row['title']?></label>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">ชื่อผู้แต่ง <?= $row['author']?></label>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">ราคา <?= $row['price']?> บาท</label>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">หมวดหมู่ <?= $row['name']?></label>
  </div>
</div>
<div class="card-footer">
  <button type="submit" class="btn btn-primary" name="btn_edit" value="<?= $row['bookid']?>">อนุมัติหนังสือ</button>
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