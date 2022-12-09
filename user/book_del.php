<?php
        require_once('../database/condb.php');
        
        if(isset($_GET['book_del'])){

            $ct_id = $_GET['book_del'];

            $sql = "DELETE FROM tbl_book WHERE bookid = '$ct_id'";

            if (mysqli_query($conn, $sql)) {

                echo "<script>alert('ลบข้อมูล เรียบร้อย...!!')</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; URL=index.php?book\">";
                exit;

            } else {

                echo "<script>alert('Error..!!')</script>";
                echo"<script>window.location='javascript:history.back(-1)';</script>";
                exit;

            }


        }
?>