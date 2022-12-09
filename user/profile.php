
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Profile</h1>
            </div><!-- /.col -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php

require_once('../database/condb.php');
    $sql = "SELECT * FROM tbl_user WHERE u_id = '".$_SESSION['u_id']."'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
    }$row = mysqli_fetch_assoc($result)
                   
?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                </div>

                <h3 class="profile-username text-center text-decoration"><?= $row['fullname']; ?></h3>

                <p class="text-muted text-center text-decoration"><?php  if($row['status'] == "1"){echo "ผู้ดูแลระบบ";}if($row['status'] == "0"){echo "สมาชิก";} ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>เบอร์โทรศัพท์</b> <a class="float-right text-decoration-none text-black">&nbsp;&nbsp;&nbsp;<?= $row['phone']; ?> </a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right text-decoration-none text-black">&nbsp;&nbsp;&nbsp;<?= $row['email']; ?> </a>
                  </li>
                </ul>
                <a href="index.php?user_edit=<?= $row['u_id']; ?>" class="btn btn-info btn-sm"><i class="mdi mdi-grease-pencil"></i></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>            
</div>