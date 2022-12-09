<?php
        require_once('../database/condb.php');
        
        if(isset($_GET['book_edit'])){

            $bookid = $_GET['book_edit'];
       
            $sql = "SELECT * FROM tbl_book WHERE bookid = '$bookid'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

        }

        if(isset($_POST['btn_edit'])){
            $check_id   =   $_POST['btn_edit'];
            $title      =   $_POST['title'];
            $status_book      = '0';
            $u_id     =   $_SESSION['u_id'];
            $c_id     =  $_POST['c_id'];
            $date = $_POST['publication_date'];
            $price = $_POST['price'];
            $author = $_POST['author'];
            $sql = "UPDATE tbl_book SET title = '$title',status_book = '$status_book', u_id = '$u_id' , c_id = '$c_id',publication_date = '$date',price = '$price',
            author ='$author' WHERE bookid ='$check_id'";


            if (mysqli_query($conn, $sql)) {

                echo "<script>alert('แก้ไขข้อมูล เรียบร้อย...!!')</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; URL=index.php?book\">";
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
            <h1>แก้ไขข้อมูลหนังสือ</h1>
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
                <h3 class="card-title">ฟอร์มแก้ไขหนังสือ</small></h3>
              </div>

              <form action="" method="post" enctype="multipart/form-data">

<div class="card-body">

  <div class="form-group">
   <h2>รูปหนังสือ</h2> <img src="../upload/<?php echo$row['file_name'];?>" height="500px" width="300px">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">ชื่อหนังสือ</label>
    <input type="text" name="title" class="form-control" placeholder="กรอก ชื่อหนังสือ" value="<?= $row['title']?>" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">ชื่อผู้แต่ง</label>
    <input type="text" name="author" class="form-control" placeholder="กรอก ผู้แต่ง" value="<?= $row['author']?>" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">ราคา</label>
    <input type="number" name="price" class="form-control" placeholder="กรอก ราคา" value="<?= $row['price']?>" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">วันที่ลงขาย</label>
    <input type="datetime-local" name="publication_date" class="form-control"  value="<?= $row['publication_date']?>">
  </div>

  <div class="form-group"  >
  <?php include '../database/condb.php'; 
  $orl="SELECT*FROM tbl_user Where u_id = '".$_SESSION['u_id']."'"; 
  $result2=mysqli_query($conn, $orl);
  ?><input type="hidden" name="u_id">
   </div>
  <div class="form-group">
  <option selected>เลือกหมวดหมู่ของหนังสือ</option>
  <select class="form-select" aria-label="Default select example" name="c_id"<?= $row['c_id']?>>
      <?php 
          include '../database/condb.php';
          $qrl="SELECT*FROM tbl_category";
          $result=mysqli_query($conn, $qrl);
          if(mysqli_num_rows($result)>0)
          {
              while($state_row=mysqli_fetch_assoc($result))
              {
                  ?>
                       <option value="<?php echo $state_row['c_id'] ?>">
                        <?php echo $state_row['name'] ?></option>
                  <?php
              }
          }
    ?>
  </select>
  </div>

</div>

<div class="card-footer">
  <button type="submit" class="btn btn-primary" name="btn_edit" value="<?= $row['bookid']?>">บันทึก</button>
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