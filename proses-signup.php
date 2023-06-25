<?php 

    include './koneksi.php';
    session_start();


    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $sql = "insert into people (username, password)
            values ('" . $username . "', '" . $password . "');
    ";

  
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>location.href='index.php';</script>";
    }else{
        printf('Failed sign up: ' . mysqli_error($conn));
    }
 ?>