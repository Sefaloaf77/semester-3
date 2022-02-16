<?php 
session_start();
include('includes/config.php');
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['nama'];
$email=$_POST['email'];
$comment=$_POST['komentar'];
$postid=intval($_GET['nid']);
$st1='0';
$query=mysqli_query($con,"insert into tblkomentar(IdBerita,nama,email,komentar,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
  echo "<script>alert('komentar berhasil disubmit. Komentar akan muncul setelah direview oleh admin ');</script>";
  unset($_SESSION['token']);
else :
 echo "<script>alert('Mungkin ada yang bermasalah. Mohon coba lagi.');</script>";  

endif;

}
}
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
     <?php include('includes/head.php');?>
  </head>

  <body>

    <!-- Navigation -->
   <?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php
$pid=intval($_GET['nid']);
$query=mysqli_query($con,"select tblberita.JudulBerita as judulberita,tblberita.GambarBerita,tblkategori.Kategori as kategori,tblkategori.id as cid,tblberita.DatailBerita as detailberita,tblberita.TanggalPosting as tanggalposting,tblberita.UrlBerita as url from tblberita left join tblkategori on tblkategori.id=tblberita.IdKategori left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblberita.SubCategoryId where tblberita.id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="mb-4 my-4">
      
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['judulberita']);?></h2>
              <p><b>Kategori : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['kategori']);?></a> |
                <b> Diposting pada </b><?php echo htmlentities($row['tanggalposting']);?></p>
                <hr />

 <img class="img-fluid rounded" src="admin/postimages/<?php echo htmlentities($row['GambarBerita']);?>" alt="<?php echo htmlentities($row['judulberita']);?>">
  
              <p class="card-text"><?php 
$pt=$row['detailberita'];
              echo  (substr($pt,0));?></p>
             
            </div>
            <div class="card-footer text-muted">
             
           
            </div>
          </div>
<?php } ?>
       
        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar-single.php');?>
      </div>
      <!-- /.row -->
<!---Comment Section --->

 <div class="row" style="margin-top: -8%">
   <div class="col-md-8">
<div class="card my-4">
            <h5 class="card-header">Yuk Tinggalkan Komentar:</h5>
            <div class="card-body">
              <form name="Komentar" method="post">
      <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
 <div class="form-group">
<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
</div>

 <div class="form-group">
 <input type="email" name="email" class="form-control" placeholder="Email" required>
 </div>


                <div class="form-group">
                  <textarea class="form-control" name="komentar" rows="3" placeholder="Komentarmu" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </form>
            </div>
          </div>

  <!---Comment Display Section --->

 <?php 
 $sts=1;
 $query=mysqli_query($con,"select nama,komentar,TanggalPosting from  tblkomentar where IdBerita='$pid' and status='$sts'");
while ($row=mysqli_fetch_array($query)) {
?>
<div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt="">
            <div class="media-body">
              <h5 class="mt-0"><?php echo htmlentities($row['nama']);?> <br />
                  <span style="font-size:11px;"><b>at</b> <?php echo htmlentities($row['TanggalPosting']);?></span>
            </h5>
           
             <?php echo htmlentities($row['komentar']);?>            </div>
          </div>
<?php } ?>

        </div>
      </div>
    </div>

  
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
