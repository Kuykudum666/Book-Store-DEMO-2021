<div class="content-wrapper" style="min-height: 1302.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ประเภทของหนังสือ</h1>
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
                  <h3 class="card-title">แสดงประเภทหนังสือ</h3>
                  </div>

                  
              <div>
                <h3 class="card-title"></h3>
                <a href="index.php?book_type_add" class="btn btn-success"><i class ="fas fa--plus"></i> เพิ่มประเภท</a>

              </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
              <table id="mytable" class="table table-striped projects">
              <thead>
                  <tr>
                      <th class="text-center" style="width: 5%">NO.</th>
                      <th class="text-center" style="width: 10%">ชื่อประเภท</th>
                      <th class="text-center" style="width: 10%">จัดการ</th>
                  </tr>
              </thead>
              
              <tbody>
                <?php

                require_once('../database/condb.php');
                    $sql = "SELECT * FROM tbl_category WHERE c_id ";
                    $result = mysqli_query($conn, $sql);

                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) 
                    {               
                ?>
                  <tr>
                      <td class="text-center"><?= $i++?></td>
                      <td class="text-center"><?= $row['name']; ?></td>
                      <td class="text-center">
                          <a href="index.php?book_type_edit=<?= $row['c_id']; ?>" class="btn btn-info btn-sm"><i class="mdi mdi-grease-pencil"></i></a>
                          <a href="index.php?book_type_del=<?= $row['c_id']; ?>" onclick="return confirm('ยืนยันการลบ')"class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>
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