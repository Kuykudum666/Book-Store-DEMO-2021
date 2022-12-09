
<?php include('check_login.php')?>
<?php
    require_once('database/condb.php');
    $sql = "SELECT * FROM tbl_user WHERE u_id = '".$_SESSION['u_id']."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result)
                   
    
?>
<?php   
        if(isset($_SESSION['u_id']) == "")
        {
            echo "<meta http-equiv=\"refresh\" content=\"0; URL=login.php\">";
            exit();
        } 
        else
        {
               
?>
<!DOCTYPE html>
<html lang="en">
<?php include('database/condb.php');?>
    <head>
<?php include('h.php');?>
    </head>
    <body>
        <!-- Navigation-->
<?php include('menu_top_user.php');?>
        <!-- Header-->
        <?php 
 if(empty($_GET)){
  include('newbook.php');
}
if(isset($_GET['newbook'])){
    include('newbook.php');
  }
if(isset($_GET['c1'])){
  include('category_user/c1.php');
}
if(isset($_GET['c2'])){
    include('category_user/c2.php');
}
if(isset($_GET['c3'])){
    include('category_user/c3.php');
}
if(isset($_GET['c4'])){
    include('category_user/c4.php');
}
if(isset($_GET['c5'])){
    include('category_user/c5.php');
}
if(isset($_GET['c6'])){
    include('category_user/c6.php');
}
if(isset($_GET['c7'])){
    include('category_user/c7.php');
}
if(isset($_GET['c8'])){
    include('category_user/c8.php');
}
if(isset($_GET['c9'])){
    include('category_user/c9.php');
}
if(isset($_GET['c10'])){
    include('category_user/c10.php');
}
if(isset($_GET['c11'])){
    include('category_user/c11.php');
}
if(isset($_GET['c12'])){
    include('category_user/c12.php');
}

if(isset($_GET['c13'])){
    include('category_user/c13.php');
}
if(isset($_GET['c14'])){
    include('category_user/c14.php');
}
if(isset($_GET['c15'])){
    include('category_user/c15.php');
}
if(isset($_GET['c16'])){
    include('category_user/c16.php');
}
if(isset($_GET['c17'])){
    include('category_user/c17.php');
}
 ?>
<?php include('f.php');?>
    </body>
    <?php
        }
?>
</html>
