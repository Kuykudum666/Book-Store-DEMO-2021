<?php 
        session_start();  
        
        if(isset($_SESSION['u_id']) == "")
        {
            echo "<meta http-equiv=\"refresh\" content=\"0; URL=../login.php\">";
            exit();
        } 

        if ($_SESSION['status'] === "0")
        {
            echo "<meta http-equiv=\"refresh\" content=\"0; URL=../user/index.php\">";
            exit();
        } 
        else
        {
               
?>
<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('h.php')?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php include('menu_left.php')?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
      <?php include('menu_top.php')?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <?php 
 if(empty($_GET)){
  include('main.php');
 }
 if(isset($_GET['main'])){
  include('main.php');
 }
if(isset($_GET['admin'])){
  include('admin.php');
}
if(isset($_GET['admin_add'])){
  include('admin_add.php');
}
if(isset($_GET['admin_del'])){
  include('admin_del.php');
}
if(isset($_GET['admin_edit'])){
  include('admin_edit.php');
}
if(isset($_GET['approve'])){
  include('approve.php');
}
if(isset($_GET['book'])){
  include('book.php');
}
if(isset($_GET['book_del'])){
  include('book_del.php');
}
if(isset($_GET['book_approve'])){
  include('book_approve.php');
}
if(isset($_GET['book_type_del'])){
  include('book_type_del.php');
}
if(isset($_GET['book_type_edit'])){
  include('book_type_edit.php');
}
if(isset($_GET['book_type_add'])){
  include('book_type_add.php');
}
if(isset($_GET['book_type'])){
  include('book_type.php');
}
if(isset($_GET['book_upload'])){
  include('book_upload.php');
}
if(isset($_GET['user'])){
  include('user.php');
}
if(isset($_GET['user_add'])){
  include('user_add.php');
}
if(isset($_GET['user_edit'])){
  include('user_edit.php');
}
if(isset($_GET['user_del'])){
  include('user_del.php');
}
if(isset($_GET['profile'])){
  include('profile.php');
}
 ?>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
<?php include('f.php')?>
    <!-- End custom js for this page -->
  </body>
</html>
<?php
        }
?>