<?php
    session_start();
    if(isset($_POST['btn_login'])){

        require_once('database/condb.php');
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        //นำ user และ pass ไปหาในตาราง tb_user ว่ามีหรือไม่
        $sql = "SELECT u_id, fullname, username, password,status FROM tbl_user WHERE username = '$username'and password = '$password'";
        $result = mysqli_query($conn, $sql);

       
        
        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            if($row['username'] === $username && $row['password'] === $password) {

                
                
                //ตรวจสอบสถานะ ผู้ใช้งาน
                if($row['status'] === '0'){

                    $_SESSION['u_id']   = $row['u_id'];
                    $_SESSION['fullname']  = $row['fullname'];
                    $_SESSION['status'] = $row['status'];
                    //ให้ไปหน้าพนักงาน
                    header("location: index2.php");

                } else if($row['status'] === '1'){

                    $_SESSION['u_id']   = $row['u_id'];
                    $_SESSION['fullname']  = $row['fullname'];
                    $_SESSION['status'] = $row['status'];

                    //ให้ไปหน้า admin
                    header("location: admin/index.php");


                } else {

                    //แจ้ง error
                    header("location: logfail.php");

                }

            } else {

                //แจ้ง error
                header("location: logfail.php");

            }
            
       
        } else {

            //แจ้ง user หรือ pass ไม่ถูกต้อง กลับไปหน้า login ใหม่
            header("location: logfail.php");
        }

        mysqli_close($conn);

    }

    if(isset($_POST['btn_register'])){
    header("location: register.php");
}
?>  