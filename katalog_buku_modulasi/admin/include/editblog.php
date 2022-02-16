<?php 

if(isset($_GET['data'])){
	$id_blog = $_GET['data'];
    //get data kategori buku
    $sql_k = "SELECT blog.id_kategori_blog ,blog.judul, blog.isi,
    kategori_blog.kategori_blog, kategori_blog.id_kategori_blog FROM blog 
    join kategori_blog  on blog.id_kategori_blog = kategori_blog.id_kategori_blog where id_blog='$id_blog'";
    $query_k = mysqli_query($koneksi,$sql_k);
    while($data_k = mysqli_fetch_array($query_k)){
      $judul = $data_k['judul'];
      $isi = $data_k['isi'];
      $id_kategori = $data_k['id_kategori_blog'];
    }
}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data Blog</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=blog">Data Blog</a></li>
              <li class="breadcrumb-item active">Edit Data Blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Blog</h3>
        <div class="card-tools">
          <a href="index.php?include=blog" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br></br>
      <div class="col-sm-10">
      <?php if(!empty($_GET['notif'])){?>
                  <?php if($_GET['notif']=="judulkosong"){?>
                        <div class="alert alert-danger" role="alert">
                        Mohon Masukkan Judul</div>
                  <?php } else if($_GET['notif']=="isikosong"){?>
                        <div class="alert alert-danger" role="alert">
                        Mohon Masukkan Isi</div>
                  <?php } else if($_GET['notif']=="kategorikosong"){?>
                        <div class="alert alert-danger" role="alert">
                        Mohon Memilih Kategori</div>
                  <?php } else if($_GET['notif']=="penuliskosong"){?>
                        <div class="alert alert-danger" role="alert">
                        Mohon Memilih Penulis</div>
                    <?php }}?>
      </div>
      <form class="form-horizontal" method="post" action="index.php?include=konfirmasi-edit-blog">
        <div class="card-body">
          
        <div class="form-group row">
            <label for="kategori" class="col-sm-3 col-form-label">Kategori Blog</label>
            <div class="col-sm-7">
              <select class="form-control" id="kategori" name = "kategori">
                <option value="">--Pilih Kategori--</option>
                <?php 
                  $kategori = mysqli_query($koneksi, "select * from kategori_blog");
                  while($row=mysqli_fetch_array($kategori)){?>
                <option value="<?php echo $row['id_kategori_blog']; ?>"><?php echo $row['kategori_blog']; ?></option>
                <?php }?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="penulis" class="col-sm-3 col-form-label">Penulis</label>
            <div class="col-sm-7">
              <select class="form-control" id="penulis" name = "penulis">
                <option value="">--Pilih Penulis--</option>
                <?php 
                  $kategori = mysqli_query($koneksi, "select * from user");
                  while($row=mysqli_fetch_array($kategori)){?>
                <option value="<?php echo $row['id_user']; ?>"><?php echo $row['nama']; ?></option>
                <?php }?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="nim" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="judul" id="" value="<?php echo $judul;?>">
            </div>
            <div class="col-sm-7">
              <input type="hidden" class="form-control" name="id_blog" id="" value="<?php echo $id_blog;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="isi" class="col-sm-3 col-form-label">Isi</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="isi" id="editor1" rows="12"><?php echo $isi;?></textarea>
            </div>
          </div>

          </div>
        </div>

      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>

