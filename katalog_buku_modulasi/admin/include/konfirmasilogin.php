<?php
    //akses file koneksi database
      
    // if (isset($_POST['submit'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $username = mysqli_real_escape_string($koneksi, $user);
        $password = mysqli_real_escape_string($koneksi, MD5($pass));
        
        //cek username dan password
        $sql="select `id_user`, `level` from `user` 
                where `username`='$username' and
               `password`='$password'";
        $query = mysqli_query($koneksi, $sql);
        
        if(empty($user) && empty($pass)){
            header("Location:login&gagal=userpass-kosong");
        }else if(empty($pass)){
            header("Location:login&gagal=pass-kosong");
        }else if(empty($user)){
            header("Location:login&gagal=user-kosong");
        }else{ 
            //get data
            while($data = mysqli_fetch_row($query)){
                $id_user = $data[0]; //1
                $level = $data[1]; //speradmin
                $_SESSION['id_user']=$id_user;
                $_SESSION['level']=$level;
                header("Location:index.php?include=profil");
            }           
        }
    // }
?>
