<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['id'])==0)
  { 
header('location:index.php');
}
else{
if( $_GET['disid'])
{
	$id=intval($_GET['disid']);
	$query=mysqli_query($con,"update tblkomentar set status='0' where id='$id'");
	$msg="Komentar tidak disetujui ";
}
// Code for restore
if($_GET['appid'])
{
	$id=intval($_GET['appid']);
	$query=mysqli_query($con,"update tblkomentar set status='1' where id='$id'");
	$msg="Komentar disetujui";
}

// Code for deletion
if($_GET['action']=='del' && $_GET['rid'])
{
	$id=intval($_GET['rid']);
	$query=mysqli_query($con,"delete from  tblkomentar  where id='$id'");
	$delmsg="Kategori dihapus selamanya";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>iNDOiNFO | Kelola Komentar</title>
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

            <!-- ========== Left Sidebar Start ========== -->
<?php include('includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Komentar disetujui</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="dashboard.php">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Komentar </a>
                                        </li>
                                        <li class="active">
                                          Komentar disetujui
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


<div class="row">
<div class="col-sm-12">  
 
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Berhasil!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<?php if($delmsg){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh, Gagal!</strong> <?php echo htmlentities($delmsg);?></div>
<?php } ?>


</div>
                                    <div class="row">
										<div class="col-md-12">
											<div class="demo-box m-t-20">

												<div class="table-responsive">
                                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th width="300">Komentar</th>
                                                                 <th>Status</th>
                                                                <th>Berita</th>
                                                                <th>Tanggal posting</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
<?php 
$query=mysqli_query($con,"Select tblkomentar.id,  tblkomentar.nama,tblkomentar.email,tblkomentar.TanggalPosting,tblkomentar.komentar,tblberita.id as idberita,tblberita.JudulBerita from  tblkomentar join tblberita on tblberita.id=tblkomentar.IdBerita where tblkomentar.status=1");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>

 <tr>
<th scope="row"><?php echo htmlentities($cnt);?></th>
<td><?php echo htmlentities($row['nama']);?></td>
<td><?php echo htmlentities($row['email']);?></td>
<td><?php echo htmlentities($row['komentar']);?></td>
<td><?php $st=$row['status'];
if($st=='0'):
echo "Menunggu Persetujuan";
else:
echo "Disetujui";
endif;
?></td>


<td><a href="edit-post.php?pid=<?php echo htmlentities($row['postid']);?>"><?php echo htmlentities($row['JudulBerita']);?></a> </td>
<td><?php echo htmlentities($row['TanggalPosting']);?></td>
<td>
<?php if($st==0):?>
    <a href="manage-comments.php?disid=<?php echo htmlentities($row['id']);?>" title="Komentar tidak disetujui"><i class="ion-arrow-return-right" style="color: #29b6f6;"></i></a> 
<?php else :?>
  <a href="manage-comments.php?appid=<?php echo htmlentities($row['id']);?>" title="Komentar disetujui"><i class="ion-arrow-return-right" style="color: #29b6f6;"></i></a> 
<?php endif;?>

	&nbsp;<a href="manage-comments.php?rid=<?php echo htmlentities($row['id']);?>&&action=del"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
</tr>
<?php
$cnt++;
 } ?>
</tbody>   
                                                    </table>
                                                </div>
											</div>

										</div>

							
									</div>
                                    <!--- end row -->   
                            <div class="row">
                            <div class="col-md-12">
                            <div class="demo-box m-t-20">
                            <div class="m-b-30">
                            </div>    
											</div>

										</div>

							
									</div>           
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