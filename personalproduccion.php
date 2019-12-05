<?php include("base_datos/bd.php")?>

<?php include("partes/header.php")?>
<div class="container contenedor p-4">
    <div class="row">
        <div class="col-md-4">
                <h1>Personal Producción</h1>
            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           <?php session_unset(); }?>
            <div class="card card-body">
                <form action="addpersonal.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="idper" class="form-control" placeholder="ID Personal" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="varchar" name="turno" rows="2" class="form-control" placeholder="turno" autofocus required >
                    </div>
                    <div class="form-group">
                        <input type="varchar" name="sueldo" class="form-control" placeholder="sueldo" autofocus  min="1000" max="5000" autofocus required>
                    </div>
                    <input type="submit" class="btn btn-success btn-block"
                    name="addpersonal" value="Guardar"> 
                </form>
            </div>
            <hr class="mb-4">
            <a href="listas_pdf/listaPersonalProduccionPDF.php">
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
                            <th>Id Personal Prod</th>
                            <th>Turno</th>
                            <th>Sueldo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM personalproduccion";
                        $result_tasks = mysqli_query($conexion,$query);

                        while($row = mysqli_fetch_array($result_tasks)){ ?>
                            <tr>
                                <td><?php echo $row['idper']?></td>
                                <td><?php echo $row['turno']?></td>
                                <td><?php echo $row['sueldo']?></td>
                                <td> 
                                    <a href="editpersonalproduccion.php?idper=<?php echo $row['idper']?>" class="btn btn-secondary">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="elipersonalproduccion.php?idper=<?php echo $row['idper']?>" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i>
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