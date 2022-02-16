<?php
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
    <div class="container my-5 py-5">

<?php 
$pagetype='contactus';
$query=mysqli_query($con,"select JudulHalaman,Deskripsi from tblhalaman where NamaHalaman='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
      <h1 class="mt-4 mb-3"><?php echo htmlentities($row['JudulHalaman'])?></h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Kontak</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-12">
          <iframe class="mt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.415037987395!2d112.61365991466485!3d-7.955989681479007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78836564ffe905%3A0xa23e714224e7efe3!2sGedung%20Pendidikan%20Vokasi%20Universitas%20Brawijaya!5e0!3m2!1sid!2sid!4v1638725861144!5m2!1sid!2sid" width="1100" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <p><?php echo $row['Deskripsi'];?></p>
        </div>
      </div>
      <!-- /.row -->
<?php } ?>
    
    </div>
    <!-- /.container -->

    <!-- Footer -->
 <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
