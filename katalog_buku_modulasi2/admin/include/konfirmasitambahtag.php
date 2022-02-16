<?php 

$tag = $_POST['tag'];
if(empty($tag)){
	header("Location:tambah-tag_notif-tambahkosong");
}else{
	$sql = "insert into `tag` (`tag`) 
	values ('$tag')";
	mysqli_query($koneksi,$sql);
header("Location:tag_notif-tambahberhasil");	
}
?>
