<?php

        if(isset($_POST['btn_save'])){

            require_once('../database/condb.php');  

            $filename = $_FILES['file_name']['name'];
            $title      =   $_POST['title'];
            $status_book      = '1';
            $u_id     =   $_SESSION['u_id'];
            $c_id     =  $_POST['c_id'];
            $date = $_POST['publication_date'];
            $price = $_POST['price'];
            $author = $_POST['author'];
            $sql = "INSERT INTO tbl_book (file_name,title, status_book ,u_id,c_id,publication_date,price,author)
            VALUES ('$filename ','$title','$status_book','$u_id','$c_id','$date','$price','$author')";


            if (mysqli_query($conn,$sql)){
              move_uploaded_file ( $_FILES['file_name']['tmp_name'] , "../upload/$filename");
              echo "<script>alert('เพิ่มข้อมูล เรียบร้อย...!!')</script>";
              echo "<meta http-equiv=\"refresh\" content=\"0; URL=index.php?book\">";
              exit;
              
          } else 

              echo "<script>alert('Error..!!')</script>";
              echo"<script>window.location='javascript:history.back(-1)';</script>";
              exit;

          

          }
?>



<div class="content-wrapper" style="min-height: 1345.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Upload Book</h1>
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
            <div class="card card-success"></div>
              <form action="" method="post" enctype="multipart/form-data">

                <div class="card-body">

                  <div class="form-group">
                   <h2>รูปหนังสือ</h2> <input type="file" name="file_name" id="file">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อหนังสือ</label>
                    <input type="text" name="title" class="form-control" placeholder="กรอก ชื่อหนังสือ" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อผู้แต่ง</label>
                    <input type="text" name="author" class="form-control" placeholder="กรอก ผู้แต่ง" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ราคา</label>
                    <input type="number" name="price" class="form-control" placeholder="กรอก ราคา" required>
                  </div>
    
                  <div class="form-group">
                    <label for="exampleInputEmail1">วันที่ลงขาย</label>
                    <input type="datetime-local" name="publication_date" class="form-control" >
                  </div>

                  <div class="form-group"  >
                  <?php include '../database/condb.php'; 
                  $orl="SELECT*FROM tbl_user Where u_id = '".$_SESSION['u_id']."'"; 
                  $result2=mysqli_query($conn, $orl);
                  ?><input type="hidden" name="u_id">
                   </div>
                  <div class="form-group">
                  <option selected>เลือกหมวดหมู่ของหนังสือ</option>
                  <select class="form-select" aria-label="Default select example" name="c_id">
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
                  <button type="submit" class="btn btn-primary" name="btn_save" value='Upload'>บันทึก</button>
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