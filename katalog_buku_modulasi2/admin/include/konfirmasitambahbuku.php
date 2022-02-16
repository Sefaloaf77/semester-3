<?php 
 
    $id_kategori_buku = $_POST['kategori_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $id_penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $sinopsis = $_POST['sinopsis'];
    $tag = $_POST['tag'];
    $lokasi_file = $_FILES['cover']['tmp_name'];
    $nama_file = $_FILES['cover']['name'];
    $direktori = 'cover/'.$nama_file;
 
    if(empty($id_kategori_buku)){	   
      header("Location:tambah-buku_notif-tambahkosong-data-kategoribuku");
   }else if(empty($judul)){
	header("Location:tambah-buku_notif-tambahkosong-data-judul");
   }else if(empty($pengarang)){	    
      header("Location:tambah-buku_notif-tambahkosong-data-pengarang");
   }else if(empty($id_penerbit)){
	header("Location:tambah-buku_notif-tambahkosong-data-penerbit");
   }else if(empty($tahun_terbit)){
	header("Location:tambah-buku_notif-tambahkosong-data-tahunterbit");
   }else if(empty($tag)){
	header("Location:tambah-buku_notif-tambahkosong-data-tag");
   }else if(!move_uploaded_file($lokasi_file,$direktori)){
      header("Location:tambah-buku_notif-tambahkosong-data-cover");
    }else{   
	$sql = "INSERT INTO `buku` 
      (`id_kategori_buku`,`judul`,`pengarang`,`id_penerbit`,`tahun_terbit`,`sinopsis`,`cover`)
      VALUES ('$id_kategori_buku','$judul','$pengarang','$id_penerbit','$tahun_terbit','$sinopsis','$nama_file')";
      //echo $sql;
	mysqli_query($koneksi,$sql);
	$id_buku = mysqli_insert_id($koneksi);
	if(!empty($_POST['tag'])){
		foreach($_POST['tag'] as $id_tag){
		   $sql_i = "insert into `tag_buku` (`id_buku`, `id_tag`) 
		   values ('$id_buku', '$id_tag')";
		   mysqli_query($koneksi,$sql_i);
		}
	}
      header("Location:buku_notif-tambahberhasil");
    }
?>
