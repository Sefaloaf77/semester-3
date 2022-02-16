<?php 

if(isset($_SESSION['id_kategori_buku'])){
  $id_kategori_buku = $_SESSION['id_kategori_buku'];
  $kategori_buku = $_POST['kategori_buku'];
 
   if(empty($kategori_buku)){
 	    header("Location:edit-kategori-buku-data-".$id_kategori_buku."_notif-editkosong");
  }else{
	$sql = "update `kategori_buku` set `kategori_buku`='$kategori_buku' 
	where `id_kategori_buku`='$id_kategori_buku'";
	mysqli_query($koneksi,$sql);
	unset($_SESSION['id_kategori_buku']);
	header("Location:kategori-buku_notif-editberhasil");
  }
}
?>
