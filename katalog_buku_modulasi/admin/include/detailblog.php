<?php 


if(isset($_GET['detail'])){
	$id_blog = $_GET['detail'];
	
	
    //mengambil data tabel blog dan kategori blog
    $sql_k = "SELECT blog.id_kategori_blog ,blog.judul, blog.isi, blog.tanggal,
    kategori_blog.kategori_blog, kategori_blog.id_kategori_blog FROM blog 
    join kategori_blog  on blog.id_kategori_blog = kategori_blog.id_kategori_blog where `id_blog`='$id_blog'";
    $query_k = mysqli_query($koneksi,$sql_k);
    while($data_k = mysqli_fetch_array($query_k)){
      $judul = $data_k['judul'];
      $isi = $data_k['isi'];
      $kategori = $data_k['kategori_blog'];
      $tanggal = $data_k['tanggal'];
    }

    $sql_u = "SELECT blog.id_user, user.id_user, user.nama  FROM blog 
    join user  on blog.id_user = user.id_user where `id_blog`='$id_blog'";
    $query_u = mysqli_query($koneksi,$sql_u);
    while($data_u = mysqli_fetch_array($query_u)){
      $nama = $data_u['nama'];
    }
}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data Blog</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=blog">Data Blog</a></li>
              <li class="breadcrumb-item active">Detail Data Blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="index.php?include=blog" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>                 
                      <tr>
                        <td width="20%"><strong>Tanggal<strong></td>
                        <td width="80%"><?php echo $tanggal; ?></td>
                      </tr>              
                      <tr>
                        <td width="20%"><strong>Kategori Blog<strong></td>
                        <td width="80%"><?php echo $kategori; ?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Judul<strong></td>
                        <td width="80%"><?php echo $judul; ?></td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Penulis<strong></td>
                        <td width="80%"><?php echo $nama; ?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Isi<strong></td>
                        <td width="80%"><?php echo $isi; ?></td>
                      </tr>
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>

