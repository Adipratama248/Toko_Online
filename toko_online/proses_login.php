<?php
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];

        include "koneksi_toko.php";
        $qry_login=mysqli_query($conn,"select * from petugas where username = '".$username."' and password = '".md5($password)."'");
        if(mysqli_num_rows($qry_login)>0){
            $dt_login=mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['id_petugas']=$dt_login['id_petugas'];
            $_SESSION['username']=$dt_login['username'];
            $_SESSION['status_login']=true;
            header("location: home_admin.php");
        } else {
            echo "<script>alert('username dan Password tidak benar');location.href='login.php';</script>";
        }
    }


?>