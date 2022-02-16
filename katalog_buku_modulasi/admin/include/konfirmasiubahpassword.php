<?php

$passBaru   = $_POST['pass_baru'];
$passLama   = $_POST['pass_lama'];
$passKonfirm = $_POST['pass_konfirm']; 

$passEnkrip = mysqli_real_escape_string($koneksi, MD5($passLama));
$sql_d = "SELECT `password` from `user` where `id_user` = '$id_user' ";  
$query_d = mysqli_query($koneksi,$sql_d);

    while($data_d = mysqli_fetch_row($query_d)){
       $passDb= $data_d[0];
    }

if((empty($passLama))){
    header("Location:index.php?include=ubah-password&data=passLamaKosong");
    }else if((empty($passBaru))){
        header("Location:index.php?include=ubah-password&data=passBaruKosong");
    }else if((empty($passKonfirm))){
        header("Location:index.php?include=ubah-password&data=passKonfirmKosong");
    }else if($passEnkrip != $passDb){
        header("Location:index.php?include=ubah-password&data=passLamaBeda");
    }else if($passBaru != $passKonfirm){
        header("Location:index.php?include=ubah-password&data=passBaruBeda");
    }else{
        $sql_d = "UPDATE `user` set `password`='$passBaru' where `id_user`='$id_user'";
		mysqli_query($koneksi,$sql_d);
        header("Location:index.php?include=ubah-password&data=ubahBerhasil");
	}



?>