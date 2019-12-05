<?php include('session.php');?>

<?php include("partes/header.php")?>
<div class="container contenedor p-4">
    <div class="row">
        <div class="col-md-4">
                <h1>Escenas</h1>
            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           <?php session_unset(); }?>
            <div class="card card-body">
                <form action="addescena.php" method="POST">
                    <div class="form-group">
                        <input type="number" name="nroescena" class="form-control" placeholder="ID Escena" autofocus  min="1" max="999" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="varchar" name="idepi" rows="2" class="form-control" placeholder="idepi" autofocus required >
                    </div>
                    <div class="form-group">
                        <input type="text" name="duracion" class="form-control" placeholder="duracion" autofocus  min="1" max="999" autofocus required>
                    </div>
                    <input type="submit" class="btn btn-success btn-block"
                    name="addescena" value="Guardar"> 
                </form>
            </div>
            <hr class="mb-4">
            <a href="listas_pdf/listaEscenaPDF.php">
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
                            <th>Nro Escena</th>
                            <th>Id Episodio</th>
                            <th>Duración</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM escena";
                        $result_tasks = mysqli_query($conexion,$query);

                        while($row = mysqli_fetch_array($result_tasks)){ ?>
                            <tr>
                                <td><?php echo $row['nroescena']?></td>
                                <td><?php echo $row['idepi']?></td>
                                <td><?php echo $row['duracion']?></td>
                                <td> 
                                    <a href="editescena.php?nroescena=<?php echo $row['nroescena']?>" class="btn btn-secondary">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="eliescena.php?nroescena=<?php echo $row['nroescena']?>" class="btn btn-danger">
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