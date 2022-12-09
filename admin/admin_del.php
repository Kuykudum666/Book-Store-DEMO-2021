<?php
        require_once('../database/condb.php');
        
        if(isset($_GET['admin_del'])){

            $u_id = $_GET['admin_del'];

            $sql = "DELETE FROM tbl_user WHERE u_id = '$u_id'";

            if (mysqli_query($conn,$sql)){

                echo "<script>alert('ลบข้อมูล เรียบร้อย...!!')</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; URL=index.php?admin\">";
                exit;

            } else {

                echo "<script>alert('Error..!!')</script>";
                echo"<script>window.location='javascript:history.back(-1)';</script>";
                exit;

            }


        }
?>