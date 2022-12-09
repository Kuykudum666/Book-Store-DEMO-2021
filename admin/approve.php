<div class="content-wrapper" style="min-height: 1302.4px;">
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
          <div class="col-12">

            <div class="card">
              <div class="card-header">

              <div class="co-6 text-right">
                  <div class="col-6">
                  <h3 class="card-title">รายชื่อหนังสือที่รออนุมัติ</h3>
                  </div>

                  
              <div>
                <h3 class="card-title"></h3>
                <a href="index.php?admin_add" class="btn btn"><i class ="fas fa--plus"></i></a>

              </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
              <table id="mytable" class="table table-striped projects">
              <thead>
                  <tr>
                      <th class="text-center" style="width: 5%">NO.</th>
                      <th class="text-center" style="width: 10%">ชื่อหนังสือ</th>
                      <th class="text-center" style="width: 10%">ผู้ที่ประกาศขาย</th>
                      <th class="text-center" style="width: 10%">ราคา</th>
                      <th class="text-center" style="width: 10%"> รูปหนังสือ</th>
                      <th class="text-center" style="width: 10%"> หมวดหมู่</th>
                      <th class="text-center" style="width: 10%">จัดการ</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                require_once('../database/condb.php');
                    $sql = "SELECT * FROM tbl_book inner join tbl_user on tbl_book.u_id = tbl_user.u_id inner join tbl_category on tbl_book.c_id = tbl_category.c_id WHERE tbl_book.status_book = '0' ";
                    $result = mysqli_query($conn, $sql);
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result))
                    {
                ?>
                  <tr>
                      <td class="text-center"><?= $i++?></td>
                      <td class="text-center"><?= $row['title']; ?></td>
                      <td class="text-center"><?= $row['fullname']; ?></td>
                      <td class="text-center"><?= $row['price']; ?></td>
                      <td class="text-center"><img src="../upload/<?php echo$row['file_name'];?>" height="500px" width="300px"></td>
                      <td class="text-center"><?= $row['name']; ?></td>
                      <td class="text-center">
                          <a href="index.php?book_approve=<?= $row['bookid']; ?>" class="btn btn-info btn-sm">อนุมัติ</a>
                          <a href="index.php?book_del=<?= $row['bookid']; ?>" onclick="return confirm('ยืนยันการลบ')"class="btn btn-danger btn-sm">ไม่อนุมัติ</a>
                      </td>
                  </tr>
                <?php
                    }
                ?>
              </tbody>
          </table>
          
              </div>
              <!-- /.card-body -->
            </div>
         
          </div>
      
        </div>
     
      </div>
 
    </section>
   
  </div>