<?php
    $conn=mysqli_connect('localhost', 'root','123456','messageapp');
    if(mysqli_connect_errno()){
        echo 'db connection error:' .mysqli_connect_error();
    }
?>