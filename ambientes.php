<?php include("base_datos/bd.php")?>

<?php include("partes/header.php")?>
<div class="container contenedor p-4">
    <div class="row">
        <div class="col-md-4">
                <h1>Ambientes</h1>
            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           <?php session_unset(); }?>
            <div class="card card-body">
                <form action="addAmbiente.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="idambiente" class="form-control" placeholder="ID Ambiente" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="tipo" rows="2" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" placeholder="Tipo" autofocus required >
                    <input type="submit" class="btn btn-success btn-block"
                    name="addAmbiente" value="Guardar"> 
                </form>
            </div>
        </div>
        <hr class="mb-4">
            <a href="listas_pdf/listaAmbientePDF.php">
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
                            <th>Tipo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM ambiente";
                        $result_tasks = mysqli_query($conexion,$query);

                        while($row = mysqli_fetch_array($result_tasks)){ ?>
                            <tr>
                                <td><?php echo $row['idambiente']?></td>
                                <td><?php echo $row['tipo']?></td>
                                <td> 
                                    <a href="editAmbiente.php?idambiente=<?php echo $row['idambiente']?>" class="btn btn-secondary">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="eliAmbiente.php?idambiente=<?php echo $row['idambiente']?>" class="btn btn-danger">
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