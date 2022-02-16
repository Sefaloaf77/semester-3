<?php 
session_start();
error_reporting(0);
include('includes/config.php');

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
          <h1 class="mt-4">Berita <?php echo htmlentities($row['kategori']);?></h1>
          <!-- Blog Post -->
<?php 
        if($_GET['catid']!=''){
$_SESSION['catid']=intval($_GET['catid']);
}
             






     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblberita";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblberita.id as pid,tblberita.JudulBerita as judulberita,tblberita.GambarBerita,tblkategori.Kategori as kategori,tblberita.DetailBerita as detailberita,tblberita.TanggalPosting as tanggalposting,tblberita.UrlBerita as url from tblberita left join tblkategori on tblkategori.id=tblberita.IdKategori left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblberita.SubCategoryId where tblberita.IdKategori='".$_SESSION['catid']."' and tblberita.Is_Active=1 order by tblberita.id desc LIMIT $offset, $no_of_records_per_page");

$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
echo "Tidak Ditemukan";
}
else {
while ($row=mysqli_fetch_array($query)) {


?>
          <div class="mb-4 my-4">
            <div class="row">
              <div class="col-4">
                <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['GambarBerita']);?>" alt="<?php echo htmlentities($row['judulberita']);?>">
              </div>
              <div class="col">
                <div class="card-body py-0">
                <h4 class="card-title"><a class="text-dark" href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['judulberita']);?></a></h4>
                <div class="text-muted">
                Diposting pada <?php echo htmlentities($row['tanggalposting']);?>
                </div>
                <p><b>Kategori : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['kategori']);?></a> </p>
                <p><?php echo substr(strip_tags($row['detailberita']),0,200); ?>...</p>
              </div>
              </div>
            </div>
          </div>
<?php } ?>

    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>
<?php } ?>
       

      

          <!-- Pagination -->




        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar-single.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>

</html>
