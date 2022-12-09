<?php 
        session_start();  
        
        
        if(isset($_SESSION['u_id']) == "")
        {
            echo "<meta http-equiv=\"refresh\" content=\"0; URL=../login.php\">";
            exit();
        }
         if($_SESSION['status'] == "1")
        {
          header('Location:../admin/index.php');
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
  include('profile.php');
 }
if(isset($_GET['book_upload'])){
  include('book_upload.php');
}
if(isset($_GET['profile'])){
  include('profile.php');
}
if(isset($_GET['book'])){
  include('book.php');
}
if(isset($_GET['user_edit'])){
  include('user_edit.php');
}
if(isset($_GET['book_del'])){
  include('book_del.php');
}
if(isset($_GET['book_edit'])){
  include('book_edit.php');
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