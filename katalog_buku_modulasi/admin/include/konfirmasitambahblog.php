<?php 

$id_userlogin = $_SESSION['id_user'];
$kategori_blog = $_POST['kategori'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tgl = date('Y/m/d');

if(empty($kategori_blog)){
	header("Location:index.php?include=tambah-blog&notif=kategorikosong");
}
else if(empty($judul)){
	header("Location:index.php?include=tambah-blog&notif=judulkosong");
}
else if(empty($isi)){
	header("Location:index.php?include=tambah-blog&notif=isikosong");
}
else{
	$sql = "insert into `blog` (`id_kategori_blog`, `judul`, `isi`, `tanggal`) 
	values ('$kategori_blog', '$judul', '$isi', '$tgl')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=blog&notif=tambahberhasil");	
}
?>
