<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['id'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
$catid=intval($_GET['cid']);
$category=$_POST['kategori'];
$description=$_POST['deskripsi'];
$query=mysqli_query($con,"Update  tblkategori set Kategori='$category',Deskripsi='$description' where id='$catid'");
if($query)
{
$msg="Kategori berhasil diupdate";
}
else{
$error="Mungkin ada yang bermasalah. Mohon coba lagi.";    
} 
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>iNDOiNFO | Edit Kategori</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Edit Kategori</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="dashboard.php">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Kategori </a>
                                        </li>
                                        <li class="active">
                                            Edit Kategori
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Edit Kategori </b></h4>
                                    <hr />
                        		


<div class="row">
<div class="col-sm-12">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Berhasil!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh Gagal!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>

<?php 
$catid=intval($_GET['cid']);
$query=mysqli_query($con,"Select id,Kategori,Deskripsi,TanggalPosting,TanggalUpdate from  tblkategori where Is_Active=1 and id='$catid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>



                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" name="kategori" method="post">
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Kategori</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="<?php echo htmlentities($row['Kategori']);?>" name="kategori" required>
	                                                </div>
	                                            </div>
<?php } ?>
        <div class="form-group">
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">
                                                  
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Update
                                                </button>
                                                    </div>
                                                </div>

	                                        </form>
                        				</div>


                        			</div>


                        			




           
                       


                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('includes/footer.php');?>

            </div>


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>