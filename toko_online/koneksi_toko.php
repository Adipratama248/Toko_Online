<?php
$conn=mysqli_connect("localhost","root","","toko_online");
if(mysqli_connect_errno()){
    printf("conntect failed : %s\n", mysqli_connect_error());
    exit();
}
?>