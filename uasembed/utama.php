<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard Embedded System</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="jquery-latest.js"></script>
    
    <!-- pemanggilan data grafik -->
    <script type="text/javascript">
        var refreshid = setInterval(function(){
            $('#responsecontainer').load('data.php');
        }, 5000);
    </script>
</head>
<body style="background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
">
    <div class="container text-center" style="margin-top: 60px; margin-bottom: 50px">
        <h1 style="font-weight: bolder;">UAS Embedded System</h1>
        <p>(data yang ditampilkan adalah 5 data terakhir)</p>
    </div>

    <!-- grafik -->
    <div class="container" id="responsecontainer" style="width: 80%;text-align: center"></div>
    
    <!-- anggota kelompok -->
    <div class="container card" style="margin: 50px auto;">
        <div class="judul text-center bg-danger py-5">
            <h4 class="fs-2" style="padding: 10px 0 !important;">Kelompok 3 TIK 3A</h4>
        </div>
        <div class="row text-center" style="display: flex; justify-content:space-around; margin-top: 30px">
                <div class="col-md-3 shadow" style="border: 1px solid #000; border-radius: 30px; padding: 10px;background: rgba( 255, 255, 255, 0.25 ); box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); backdrop-filter: blur( 4.5px ); -webkit-backdrop-filter: blur( 4.5px ); border: 1px solid rgba( 255, 255, 255, 0.18 );">
                    <img src="assets/img/2.jpg" style="border-radius: 30px;" height="250" alt="">
                    <h4 style="font-weight: bolder;">Sefalo 'Aadila Faruq</h4>
                    <p>203140714111015</p>
                </div>
                <div class="col-md-3 shadow" style="border: 1px solid #000; border-radius: 30px; padding: 10px;background: rgba( 255, 255, 255, 0.25 ); box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); backdrop-filter: blur( 4.5px ); -webkit-backdrop-filter: blur( 4.5px ); border: 1px solid rgba( 255, 255, 255, 0.18 );">
                    <img src="assets/img/1.jpeg" style="border-radius: 30px;" height="250" alt="">
                    <h4 style="font-weight: bolder;">Azka Rama Dhaninda</h4>
                    <p>203140714111013</p>
                </div>
                <div class="col-md-3 shadow" style="border: 1px solid #000; border-radius: 30px; padding: 10px;background: rgba( 255, 255, 255, 0.25 ); box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); backdrop-filter: blur( 4.5px ); -webkit-backdrop-filter: blur( 4.5px ); border: 1px solid rgba( 255, 255, 255, 0.18 );">
                    <img src="assets/img/3.jpg" style="border-radius: 30px;" height="250" alt="">
                    <h4 style="font-weight: bolder;">Ishfah Abidal Azis</h4>
                    <p>203140714111027</p>
                </div>
            </div>
        
    </div>
</body>
</html>