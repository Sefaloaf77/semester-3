<?php
include('includes/config.php');
//error_reporting(0);
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $username = mysqli_real_escape_string($con, $user);
        $password = mysqli_real_escape_string($con, MD5($pass));
        
        //cek username dan password
        $sql="select `id`, `Level` from `tbladmin` 
                where `Username`='$username' and
               `Password`='$password'";
        $query = mysqli_query($con, $sql);
        $jumlah = mysqli_num_rows($query);
        if(empty($user)){
            header("Location:index.php?gagal=userKosong");
        }else if(empty($pass)){
            header("Location:index.php?gagal=passKosong");
        }else if($jumlah==0){
            header("Location:index.php?gagal=userpassSalah");
        }else{
            session_start();
            //get data
            while($data = mysqli_fetch_row($query)){
                $id_user = $data[0]; //1
                $level = $data[1]; //speradmin
                $_SESSION['id']=$id_user;
                $_SESSION['Level']=$level;
                header("Location:dashboard.php");
            }           
        }
    }
?>