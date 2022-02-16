  
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-lock"></i> Ubah Password</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Ubah Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Pengaturan Password</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
     
      <form class="form-horizontal" action="index.php?include=konfirmasi-ubah-password" method="post">
        <div class="card-body">
          <h6>
            <i class="text-blue"><i class="fas fa-info-circle"></i> Silahkan memasukkan password lama dan password baru Anda untuk mengubah password.</i>
          </h6><br>
          
          <div class="form-group row">
            <label for="pass_lama" class="col-sm-3 col-form-label">Password Lama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="pass_lama" value="" name="pass_lama">
              <?php if(!empty($_GET['data'])){?>
              <!-- cek pass lama -->
              <?php if($_GET['data']=="passLamaKosong"){?>
              <span class="text-danger">Mohon maaf, password lama wajib diisi.</span>
              <?php }
                    else if($_GET['data']=="passLamaBeda"){?>
              <span class="text-danger">Mohon maaf, password lama salah.</span>
              <?php }} ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="pass_baru" class="col-sm-3 col-form-label">Password Baru</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="pass_baru" name="pass_baru">
              <?php if(!empty($_GET['data'])){?>
                <!-- cek passbaru -->
              <?php if($_GET['data']=="passBaruKosong"){?>
              <span class="text-danger">Mohon maaf, password baru wajib diisi.</span>
              <?php }} ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="konfirmasi" class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="konfirmasi" name="pass_konfirm" value="">
              <?php if(!empty($_GET['data'])){?>
              <!-- cek pass konfirm -->
              <?php if($_GET['data']=="passKonfirmKosong"){?>
              <span class="text-danger">Mohon maaf, password konfirmasi wajib diisi.</span>
              <?php }
                    else if($_GET['data']=="passBaruBeda"){?>
              <span class="text-danger">Mohon maaf, password konfirmasi salah.</span>
              <?php }} ?>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
