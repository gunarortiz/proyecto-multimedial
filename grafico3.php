<?php
include('../partes/header.php');
include('../base_datos/bd.php');


$query = "SELECT pais,SUM(nrotemporadas) as temporadas, COUNT(*) as cantidad FROM programa GROUP by pais";
$resp = mysqli_query($conexion, $query);


$resp1 = mysqli_query($conexion, $query);

?>
<script src="../High/code/highcharts.js"></script>
<!-- <script src="High/code/highcharts-3d.js"></script> -->
<script src="../High/code/modules/exporting.js"></script>
<script src="../High/code/modules/export-data.js"></script>

<div class="content ">
    <div class="animated fadeIn ">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                <div class="card">
                    <div class="card-body">
                    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<script type="text/javascript">
    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Número de Temporadas de un Programa según el País'
    },
    subtitle: {
        text: 'Gráfico de Columnas'
    },
    xAxis: {
        categories: [
            <?php
                while($row = mysqli_fetch_array($resp)){
                    echo '"'.$row['pais'].'",';
                }    
            ?>
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Cantidad (unidades)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        <?php
            while($row = mysqli_fetch_array($resp1)){
                echo 'name:"'.utf8_encode($row['pais']).'", data: ['.$row['temporadas'].','.$row['cantidad'].']},{';
            }    
        ?>
    }]
});
</script>
<?php
include('../partes/footer.php');
?>