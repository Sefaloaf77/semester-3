<?php 

$penerbit = $_POST['penerbit'];
$alamat = $_POST['alamat'];
if(empty($penerbit)){
	header("Location:tambah-penerbit_notif-penerbitkosong");
} else if(empty($alamat)){
	header("Location:tambahpenerbit_notif-alamatkosong");
}else{
	$sql = "insert into `penerbit` (`penerbit`,`alamat`) values ('$penerbit','$alamat')";
	mysqli_query($koneksi,$sql);
	header("Location:penerbit_notif-tambahberhasil");	
}
?>
