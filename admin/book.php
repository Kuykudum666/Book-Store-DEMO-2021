<div class="content-wrapper" style="min-height: 1302.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>หนังสือ</h1>
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
                  <h3 class="card-title">แสดงหนังสือ</h3>
                  </div>
              <div>
                <h3 class="card-title"></h3>
                <a href="index.php?book_upload" class="btn btn-success"><i class ="fas fa--plus"></i>Upload หนังสือ</a>
              </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">

              <table id="mytable" class="table table-striped projects">
              <thead>
                  <tr>
                      <th class="text-center" style="width: 5%">NO.</th>
                      <th class="text-center" style="width: 10%">ชื่อหนังสือ</th>
                      <th class="text-center" style="width: 10%">รูปหนังสือ</th>
                      <th class="text-center" style="width: 10%">ชื่อผู้แต่ง</th>
                      <th class="text-center" style="width: 10%">ราคา</th>
                      <th class="text-center" style="width: 10%">เวลาที่ลงขาย</th>
                      <th class="text-center" style="width: 10%">สถานะ</th>
                      <th class="text-center" style="width: 10%">จัดการ</th>
                  </tr>
              </thead>
              <tbody>
              <?php
                require_once('../database/condb.php');
                $sql = "SELECT * FROM tbl_book inner join tbl_user on tbl_book.u_id = tbl_user.u_id inner join tbl_category on tbl_book.c_id = tbl_category.c_id WHERE tbl_book.status_book";
                    $result = mysqli_query($conn, $sql);
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result))
                    {               
                ?>
                  <tr>
                      <td class="text-center"><?= $i++?></td>
                      <td class="text-center"><?= $row['title']; ?></td>
                      <td class="text-center"><a href="../upload/<?php echo $row['file_name'];?>" target="_blank" class="btn btn-warning"><i class="fa-folder-open-o "></i> เปิดดู </a></td>
                      <td class="text-center"><?= $row['author']; ?></td>
                      <td class="text-center"><?= $row['price']; ?></td>
                      <td class="text-center"><?= $row['publication_date']; ?></td>
                      <td class="text-center"><?php if($row['status_book']== "0"){echo "รออนุมัติ";}else{echo  "ได้รับอนุมัติ";}; ?></td>
                      <td class="text-center">
                          <a href="index.php?book_del=<?= $row['bookid']; ?>" onclick="return confirm('ยืนยันการลบ')"class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>
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