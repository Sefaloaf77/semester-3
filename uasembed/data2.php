<?php
    $koneksi = mysqli_connect("localhost", "root", "", "uas_embed");

    //baca tanggal
    $tanggal = mysqli_query($koneksi, "SELECT tanggal FROM tb_sensor ORDER BY ID ASC");
    //baca data suhu
    $suhu = mysqli_query($koneksi, "SELECT suhu FROM tb_sensor ORDER BY ID ASC");
?>
<!-- grafik -->
<div class="panel panel-warning">
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
                datasets : [{
                    label : "Suhu",
                    data : [
                        <?php
                            while($data_suhu = mysqli_fetch_array($suhu))
                            {
                                echo $data_suhu['suhu'].',';
                            }
                        ?>
                    ]
                }]
            };

            var option = {
                showLines : true,
                animation : {duration : 5}
            };

            //cetak ke canvas

            var myLineChart = Chart.Line(canvas, {
                data : data,
                options : option
            });
        </script>
    </div>
</div>