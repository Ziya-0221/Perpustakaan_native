<?php
$conn=mysqli_connect('localhost','root','','belajar_laravel');
/*check <connection*/
if(mysqli_connect_error()){
    printf("Connect failed: %s\n",my_sqli_connect_error());
    exit();
}
?>