<?php 
    if($_POST){
        include "koneksi.php";
        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql_people=mysqli_query($conn, "select * from people where username = '" . $username . "' and password = '" . $password . "'");

        if(empty($username)){
            echo "<script>alert('username tidak boleh kosong');location.href='signin.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='signin.php';</script>";
        } else {
            if(mysqli_num_rows($sql_people) > 0){
                $dt_login = mysqli_fetch_assoc($sql_people);
                session_start();
                $_SESSION['username'] = $dt_login['username'];
                $_SESSION['password'] = $dt_login['password'];
                header('Location: index.php'); // Asumsikan ini adalah halaman untuk pengguna yang berhasil login
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='signin.php';</script>";
            }
        }
    }
?>