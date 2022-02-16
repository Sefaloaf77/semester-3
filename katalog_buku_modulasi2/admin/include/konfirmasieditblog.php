<?php 

$id_userlogin = $_SESSION['id_user'];
  $id_blog = $_POST['id_blog'];
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $kategori= $_POST['kategori'];
  $penulis= $_POST['penulis'];
  $tgl = date('Y/m/d');
   if(empty($judul)){
 	    header("Location:editblog-data-".$id_blog."_notif-judulkosong");
   }
    else if(empty($isi)){
        header("Location:editblog-data-".$id_blog."_notif-isikosong");
   }else if(empty($kategori)){
    header("Location:editblog-data-".$id_blog."_notif-kategorikosong");
   }else if(empty($penulis)){
    header("Location:editblog-data-".$id_blog."_notif-penuliskosong");
   }else{
    $sql = "UPDATE `blog` set judul='$judul', isi='$isi', id_kategori_blog='$kategori', tanggal='$tgl', id_user = '$penulis'
    where `id_blog`='$id_blog'";
    mysqli_query($koneksi,$sql);
	
	  header("Location:blog_notif-editberhasil");
  }

?>
