<?php
include('session.php');

include('partes/header.php');


$query = "SELECT turno, COUNT(*) as cantidad FROM personalproduccion group by turno";
$resp = mysqli_query($conexion, $query);

$query1 = "SELECT COUNT(*) as total FROM personalproduccion";
$resp1 = mysqli_query($conexion, $query1);
$row1 = mysqli_fetch_array($resp1);
?>
<script src="High/code/highcharts.js"></script>
<script src="High/code/highcharts-3d.js"></script>
<script src="High/code/modules/exporting.js"></script>
<script src="High/code/modules/export-data.js"></script>

<div class="content ">
    <div class="animated fadeIn ">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                <div class="card">
                    <div class="card-body">

                        <div id="cont" style="height: 400px"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<script type="text/javascript">
    Highcharts.chart('cont', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Reporte de Porcentaje de Personal según el Turno.'
        },
        subtitle: {
            text: <?php
                    echo '"Total de Personal: ' . $row1['total'] . '"';
                    ?>
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Notas',
            data: [
                <?php
                while ($row = mysqli_fetch_array($resp)) {
                    $por = $row['cantidad'] * 100 / $row1['total'];
                    echo '["' . strtoupper(utf8_encode($row['turno'])) . '",' . $por . '],';
                }
                ?>
            ]
        }]
    })
</script>
<?php
include('partes/footer.php');
?>