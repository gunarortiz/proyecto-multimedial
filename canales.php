<?php include("base_datos/bd.php")?>

<?php include("partes/header.php")?>
<div class="container contenedor p-4">
    <div class="row">
        <div class="col-md-4">
                <h1>Canales</h1>
            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           <?php session_unset(); }?>
            <div class="card card-body">
                <form action="addCanal.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="idcanal" class="form-control" placeholder="ID Canal" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="nroemi" rows="2" class="form-control" placeholder="nroemi" autofocus min="1" max="999" autofocus required >
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombrec" class="form-control" placeholder="nombrec" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" autofocus required>
                    </div>
                    <input type="submit" class="btn btn-success btn-block"
                    name="addCanal" value="Guardar"> 
                </form>
            </div>
            <hr class="mb-4">
            <a href="listas_pdf/listaCanalPDF.php">
            <div class="boton-pdf">
                <img src="assets/pdf.svg" style="margin-right: 10px" width="30px" alt="">
                Descargar informe
            </div>
            </a>
        </div>
        <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nro Emisión</th>
                            <th>Nombre Canal</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM canal";
                        $result_tasks = mysqli_query($conexion,$query);

                        while($row = mysqli_fetch_array($result_tasks)){ ?>
                            <tr>
                                <td><?php echo $row['idcanal']?></td>
                                <td><?php echo $row['nroemi']?></td>
                                <td><?php echo $row['nombrec']?></td>
                                <td> 
                                    <a href="editCanal.php?idcanal=<?php echo $row['idcanal']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="eliCanal.php?idcanal=<?php echo $row['idcanal']?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                       <?php }
                        ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>
<?php include("partes/footer.php")?>