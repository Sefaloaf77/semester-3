<?php 

if(isset($_SESSION['id_konten'])){
  $id_konten = $_SESSION['id_konten'];
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
 
   if(empty($judul)){
 	    header("Location:edit-konten-data-".$id_konten."_notif-judulkosong");
   }
    else if(empty($isi)){
        header("Location:edit-konten-data-".$id_konten."_notif-isikosong");
   }else{
	$sql = "update `konten` set `judul`='$judul', `isi`='$isi'
	where `id_konten`='$id_konten'";
	mysqli_query($koneksi,$sql);
	unset($_SESSION['id_konten']);
	header("Location:konten_notif-editberhasil");
  }
}
?>
