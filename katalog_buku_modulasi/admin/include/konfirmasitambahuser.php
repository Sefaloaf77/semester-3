<?php 

$nama = $_POST['nama'];
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$level = $_POST['level'];

$username = mysqli_real_escape_string($koneksi, $user);
$password = mysqli_real_escape_string($koneksi, MD5($pass));

if((empty($nama)) && (empty($email)) && (empty($username)) && (empty($password)) ){
	header("Location:index.php?include=tambah-user&notif=tambahkosong");
}else if((empty($nama))){
    header("Location:index.php?include=tambah-user&notif=namakosong");
}
else if((empty($email))){
    header("Location:index.php?include=tambah-user&notif=emailkosong");
}
else if((empty($username))){
    header("Location:index.php?include=tambah-user&notif=usernamekosong");
}
else if((empty($password))){
    header("Location:index.php?include=tambah-user&notif=passwordkosong");
}
else{
    
	$sql = "INSERT INTO user (nama, email, username, password, level) 
	values ('$nama', '$email', '$username','$password','$level')";
	mysqli_query($koneksi,$sql);
 
    $lokasi_file = $_FILES['foto']['tmp_name'];
	$nama_file = $_FILES['foto']['name'];
	$direktori = 'foto/'.$nama_file;
		if(move_uploaded_file($lokasi_file,$direktori)){
                     $sql= "UPDATE  user set foto= '$nama_file' where `nama` = '$nama'"; 
                     mysqli_query($koneksi,$sql);
		   
		}
    
header("Location:index.php?include=user&notif=tambahberhasil");	
}
// }
?>
