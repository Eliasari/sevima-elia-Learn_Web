<?php 
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'learn_web');
    if(mysqli_connect_errno()){
        printf ('Connection failed: ' . mysqli_connect_errno());
        exit();
    }

 ?>