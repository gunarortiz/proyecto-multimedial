<?php
include('session.php');

include('partes/header.php');

$query = "SELECT idprog, nombre FROM programa p";
$resp = mysqli_query($conexion, $query);


?>
<script src="High/code/highcharts.js"></script>
<script src="High/code/modules/exporting.js"></script>
<script src="High/code/modules/export-data.js"></script>
<div class="content ">
    <div class="animated fadeIn ">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-body">

                        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<script type="text/javascript">
    Highcharts.chart('container', {
        chart: {
            type: 'areaspline'
        },
        title: {
            text: 'Duración de Cada Episodio Según el Programa'
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 150,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        xAxis: {
            categories: [
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo '"Episodio ' . $i . '",';
                }
                ?>

            ],
            plotBands: [{ // visualize the weekend
                from: 4.5,
                to: 6.5,
                color: 'rgba(68, 170, 213, .2)'
            }]
        },
        yAxis: {
            title: {
                text: 'Duracion de episodio'
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: ' minutos'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            areaspline: {
                fillOpacity: 0.5
            }
        },
        series: [{
            <?php
            while ($row = mysqli_fetch_array($resp)) {

                echo 'name:"' . $row['nombre'] . '",';
                echo 'data:[';
                $idpro = $row['idprog'];
                $queryd = "SELECT tmp.duracion FROM (SELECT tmp.idprog,tmp.idepi,e.duracion FROM (SELECT p.idprog, e.idepi FROM programa p LEFT JOIN episodio e on p.idprog = e.idprog WHERE e.idepi is not NULL) tmp left JOIN escena e on tmp.idepi = e.idepi ) TMP WHERE tmp.idprog ='$idpro'";
                $respd = mysqli_query($conexion, $queryd);

                while ($rowd = mysqli_fetch_array($respd)) {
                    echo substr($rowd['duracion'],0,2) . ',';
                }
                echo ']},{';
            }
            ?>


        }]
    });
</script>
<?php
include('partes/footer.php');
?>