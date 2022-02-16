<?php 
$id_userlogin = $_SESSION['id_user'];
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_blog = $_GET['data'];
		$sql_dh = "delete from `blog` 
		where `id_blog` = '$id_blog'";
		mysqli_query($koneksi,$sql_dh);
	}
}
if(isset($_POST["katakunci"])){
  $katakunci_blog = $_POST["katakunci"];
  $_SESSION['katakunci_blog'] = $katakunci_blog;
}
if(isset($_SESSION['katakunci_blog'])){
  $katakunci_blog = $_SESSION['katakunci_blog'];
}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fab fa-blogger"></i> Blog</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Blog</h3>
                <div class="card-tools">
                  <a href="index.php?include=tambah-blog" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah  Blog</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="index.php?include=blog">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
              <div class="col-sm-12">
              <?php if(!empty($_GET['notif'])){?>
                  <?php if($_GET['notif']=="tambahberhasil"){?>
                        <div class="alert alert-success" role="alert">
                        Data Berhasil Ditambahkan</div>
                  <?php } else if($_GET['notif']=="editberhasil"){?>
                        <div class="alert alert-success" role="alert">
                        Data Berhasil Diubah</div>
                  <?php } else if($_GET['notif']=="hapusberhasil"){?>
                        <div class="alert alert-warning" role="alert">
                        Data Berhasil Dihapus</div>
                  <?php }?>
              <?php }?>    
              </div>
              <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="30%">Kategori</th>
                        <th width="30%">Judul</th>
                        <th width="20%">Tanggal</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 

                      $batas = 2;
                      if(!isset($_GET['halaman'])){
                          $posisi = 0;
                          $halaman = 1;
                      }else{
                          $halaman = $_GET['halaman'];
                          $posisi = ($halaman-1) * $batas;
                      } 

                    //menampilkan data dari database
                      $sql_k = "SELECT blog.id_kategori_blog , blog.id_blog ,blog.judul, blog.tanggal,
                      kategori_blog.kategori_blog, kategori_blog.kategori_blog FROM blog 
                      join kategori_blog  on blog.id_kategori_blog = kategori_blog.id_kategori_blog ";

                      if(!empty($katakunci_blog)){
                        
                        $sql_k .= "where `kategori_blog` LIKE '%$katakunci_blog%'";
                      }
                      $sql_k .= "ORDER BY `judul` limit $posisi, $batas";
                      $query_k = mysqli_query($koneksi,$sql_k);
                      $posisi+1;
                      while($data_k = mysqli_fetch_array($query_k)){
                        $id_blog = $data_k['id_blog'];
                        $kategori = $data_k['kategori_blog'];
                        $judul = $data_k['judul'];
                        $tanggal = $data_k['tanggal'];
                      ?>
                      <tr>
                        <td><?php echo $posisi+1;?></td>
                        <td><?php echo $kategori;?></td>
                        <td><?php echo $judul;?></td>
                        <td><?php echo $tanggal;?></td>
                        <td align="center">
                          <a href="index.php?include=edit-blog&data=<?php echo $id_blog;?>" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="index.php?include=detail-blog&detail=<?php echo $id_blog; ?>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data 
                            <?php echo $judul; ?>?'))window.location.href='index.php?include=blog&aksi=hapus&data=<?php echo $id_blog;?>&notif=hapusberhasil'"" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                        </td>
                      </tr>
          <?php $posisi++; }?>      
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <?php 
                $sql_jum = "select `id_blog`,`id_kategori_blog`, `judul`, `tanggal` from `blog`";
                if(!empty($katakunci_blog)){
                  
                  $sql_jum .= " where `judul` LIKE '%$katakunci_blog%'";
                } 
                $sql_jum .= " order by `judul`";
                $query_jum = mysqli_query($koneksi,$sql_jum);
                $jum_data = mysqli_num_rows($query_jum);
                $jum_halaman = ceil($jum_data/$batas);
              ?>
              <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
<?php 
if($jum_halaman==0){
   //tidak ada halaman
}else if($jum_halaman==1){
   echo "<li class='page-item'><a class='page-link'>1</a></li>";
}else{
   $sebelum = $halaman-1;
   $setelah = $halaman+1;
   if($halaman!=1){
     echo "<li class='page-item'><a class='page-link' href='index.php?include=blog&halaman=1'>First</a></li>";
     echo "<li class='page-item'><a class='page-link' href='index.php?include=blog&halaman=$sebelum'>«</a></li>";
  }
  for($i=1; $i<=$jum_halaman; $i++){
      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
         if($i!=$halaman){
             echo "<li class='page-item'><a class='page-link'href='index.php?include=blog&halaman=$i'>$i</a></li>";
         }else{
            echo "<li class='page-item'><a class='page-link'>$i</a></li>";
         }
      }
   }
   if($halaman!=$jum_halaman){
        echo "<li class='page-item'><a class='page-link' href='index.php?include=blog&halaman=$setelah'>»</a></li>";
        echo "<li class='page-item'><a class='page-link' href='index.php?include=blog&halaman=$jum_halaman'>Last</a></li>";
   }
              
}?>
</ul>
                  </div>
                </div>
            <!-- /.card -->

    </section>

