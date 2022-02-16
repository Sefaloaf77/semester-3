<?php
    //koneksi
    $koneksi = mysqli_connect("localhost","root","","uas_embed");

    //baca data dari tabel

   // baca id tertinggi
    $sql_ID = mysqli_query($koneksi, "SELECT MAX(ID) FROM tb_sensor");
    // echo $sql_ID;
    //tanggap data
    $data_ID = mysqli_fetch_array($sql_ID);
    // echo $data_ID;
    //ambil id terakhir/terbesar
    $ID_akhir = $data_ID['MAX(ID)'];
    $ID_awal = $ID_akhir - 4;

    //baca tanggal 
    $tanggal = mysqli_query($koneksi, "SELECT tanggal FROM tb_sensor WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY ID ASC");
    
    //baca suhu
    $suhu = mysqli_query($koneksi,"SELECT suhu FROM tb_sensor WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY ID ASC");

    //baca kelembapan
    $kelembapan = mysqli_query($koneksi,"SELECT kelembapan FROM tb_sensor WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY ID ASC");
?>

<!-- tampilan grafik -->
<div class="panel panel-warning" style="background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4.5px );
-webkit-backdrop-filter: blur( 4.5px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );">
    <div class="panel-heading">
        Grafik Sensor
    </div>

    <div class="panel-body">
        <!-- canvas grafik -->
        <canvas id="myChart"></canvas>

        <script type="text/javascript">
            var canvas = document.getElementById('myChart');
            var data = {
                labels : [
                    <?php
                    while($data_tanggal = mysqli_fetch_array($tanggal))
                    {
                        echo '"'.$data_tanggal['tanggal'].'",';
                    }
                    ?>
                ],
                datasets: [
                    {
                    label: "Suhu",
                    fill: true,
                    backgroundColor: "rgba(255, 157, 10, 0.6)",
                    borderColor: "rgba(217, 131, 2)",
                    lineTension: 0.4,
                    pointRadius: 5,
                    data: [
                        <?php
                        while($data_suhu = mysqli_fetch_array($suhu))
                        {
                            echo $data_suhu['suhu'].',';
                        }
                        ?>
                    ]
                },
                    {
                    label: "Kelembapan",
                    fill: true,
                    backgroundColor: "rgba(50, 7, 120, 0.6)",
                    borderColor: "rgba(50, 7, 120)",
                    lineTension: 0.4,
                    pointRadius: 5,
                    data: [
                        <?php
                        while($data_kelembapan = mysqli_fetch_array($kelembapan))
                        {
                            echo $data_kelembapan['kelembapan'].',';
                        }
                        ?>
                    ]
                }
            ]
            };

            var option = {
                showLines : true,
                animation : {duration : 7}
            };

            var myLineChart = Chart.Line(canvas, {
                data : data,
                options : option
            });
        </script>
    </div>
</div>