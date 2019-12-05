<?php
include('base_datos/bd.php');
include('partes/header.php')
?>
<div class="container p-3">
    <h1 class="py-2">Reportes en PDF</h1>
    <div class="row">
        <div class="col-md-3 col-12 p-3">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">PERSONAL ENCARGADO DE LA ILUMINACION</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="reportes_pdf/pdf1.php" class="card-link">Acceder al pdf</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-12  p-3">
            <div class="card">
            <div class="card-body">
                    <h5 class="card-title">EPISODIOS Y ESCENAS ATYPICAL</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="reportes_pdf/pdf2.php" class="card-link">Acceder al pdf</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-12  p-3">
            <div class="card">
            <div class="card-body">
                    <h5 class="card-title">LOCACIONES</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="reportes_pdf/pdf3.php" class="card-link">Acceder al pdf</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-12 p-3">
            <div class="card">
            <div class="card-body">
                    <h5 class="card-title">SUELDO PERSONAL PRODUCCION</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="reportes_pdf/pdf4.php" class="card-link">Acceder al pdf</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include('partes/footer.php');
?>