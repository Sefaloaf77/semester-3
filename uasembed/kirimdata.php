<?php
     //koneksi
     $koneksi = mysqli_connect("localhost","root","","uas_embed");

     //tangkap parameter dari nodemcu
     $suhu = $_GET['suhu'];
     $kelembapan = $_GET['kelembapan'];

     //simpan ke tabel tb_sensor
     mysqli_query($koneksi, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");

     //simpan nilai ke tabel tb_sensor
     $simpan = mysqli_query($koneksi, "INSERT INTO tb_sensor(suhu, kelembapan)VALUES('$suhu', '$kelembapan')");

     //berikan respon ke nodemcu
     if ($simpan) {
         echo "Berhasil disimpan";
     } 
     else {
         echo "Gagal disimpan";
     }
?>