<?php

require_once('../database/condb.php');
    $sql = "SELECT * FROM tbl_user WHERE u_id = '".$_SESSION['u_id']."'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
    }$row = mysqli_fetch_assoc($result)
                   
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
<h1>ระบบหลังบ้าน</h1>

  </div>
  <ul class="nav">
  <?php

if(isset($_GET['profile'])){
  $profile = 'active';
}
if(isset($_GET['book_upload'])){
  $book_upload = 'active';
}
if(isset($_GET['book'])){
  $book = 'active';
}
if(isset($_GET['logout'])){
  $logout = 'active';
}
?>
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal"><?= $row['fullname']; ?></h5>
            <span><?php  if($row['status'] == "1"){echo "ผู้ดูแลระบบ";}if($row['status'] == "0"){echo "ผู้เข้าใช้งาน";} ?></span>
          </div>
        </div>
        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-settings text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-onepassword  text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-calendar-today text-success"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
            </div>
          </a>
        </div>
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">จัดการข้อมูล</span>
    </li>

    <li class="nav-item menu-items">
      <a href="../index2.php" class="nav-link <?=$main;?>" >
        <span class="menu-icon">
          <i class="mdi mdi-book-open"></i>
        </span>
        <span class="menu-title">BOOK SHOP</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link <?=$profile;?>" href="index.php?profile">
        <span class="menu-icon">
          <i class="mdi mdi-account-card-details"></i>
        </span>
        <span class="menu-title">Profile</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link <?=$book_upload;?>" href="index.php?book">
        <span class="menu-icon">
          <i class="mdi mdi-book-open"></i>
        </span>
        <span class="menu-title"> MY Book</span>
      </a>
    </li>
    
    <li class="nav-item menu-items">
      <a class="nav-link <?=$book_upload;?>" href="index.php?book_upload">
        <span class="menu-icon">
          <i class="mdi mdi-cloud-upload"></i>
        </span>
        <span class="menu-title">Book Upload</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link <?=$logout;?>" href="../logout.php">
        <span class="menu-icon">
          <i class="mdi mdi-logout"></i>
        </span>
        <span class="menu-title">LOGOUT</span>
      </a>
    </li>



  </ul>
</nav>