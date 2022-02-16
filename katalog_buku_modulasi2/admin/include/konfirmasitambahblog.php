<?php 

$id_userlogin = $_SESSION['id_user'];
$kategori_blog = $_POST['kategori'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tgl = date('Y/m/d');

if(empty($kategori_blog)){
	header("Location:tambah-blog_notif-kategorikosong");
}
else if(empty($judul)){
	header("Location:tambah-blog_notif-judulkosong");
}
else if(empty($isi)){
	header("Location:tambah-blog_notif-isikosong");
}
else{
	$sql = "insert into `blog` (`id_kategori_blog`, `judul`, `isi`, `tanggal`) 
	values ('$kategori_blog', '$judul', '$isi', '$tgl')";
	mysqli_query($koneksi,$sql);
header("Location:blog_notif-tambahberhasil");	
}
?>
