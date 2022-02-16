<?php 

	$id_user = $_POST['id_user'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$level = $_POST['level'];
	$nama_file = $_FILES['foto']['name'];
	$lokasi_file = $_FILES['foto']['tmp_name'];
	$direktori = 'foto/'.$nama_file;
	$username = mysqli_real_escape_string($koneksi, $user);
	$password = mysqli_real_escape_string($koneksi, MD5($pass));
   
    //get foto 
    $sql_f = "SELECT `foto`, `password` FROM `user` WHERE `id_user`='$id_user'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $foto = $data_f[0];
		$passlama=$data_f[1];
    }
	//pengecekan password
	if(empty($pass)){
		$password=$passlama;
	}	
	if(empty($nama)){
	    header("Location:index.php?include=edit-user&notif=namakosong&data=$id_user");
	}else if(empty($email)){
	    header("Location:index.php?include=edit-user&notif=emailkosong&data=$id_user");
	}
	else if(empty($username)){
	    header("Location:index.php?include=edit-user&notif=usernamekosong&data=$id_user");	
	}
	else if(empty($level)){
	    header("Location:index.php?include=edit-user&notif=levelkosong&data=$id_user");	
	}
	else{
		//pengecekan foto
        $lokasi_file = $_FILES['foto']['tmp_name'];
		$nama_file = $_FILES['foto']['name'];
		$direktori = 'foto/'.$nama_file;
		if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($foto)){
                     unlink("foto/$foto");
            }
				$sql = "UPDATE `user` set `nama`='$nama', `email`='$email' ,`password`='$password', `level`='$level', `username`='$username', `foto` = '$nama_file'
				where `id_user`='$id_user'";
				 //echo $sql;
		  		mysqli_query($koneksi,$sql);
			}else {
		$sql = "UPDATE `user` set `nama`='$nama', `email`='$email' ,`password`='$password', `level`='$level', `username`='$username'
				where `id_user`='$id_user'";
				 //echo $sql;
		  		mysqli_query($koneksi,$sql);
	
		}
	header("Location:index.php?include=user&notif=editberhasil");
}
?>
