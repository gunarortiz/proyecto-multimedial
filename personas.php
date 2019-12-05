<?php include('session.php');?>

<?php include("partes/header.php")?>
<div class="container contenedor p-4">
    <div class="row">
        <div class="col-md-4">
                <h1>Personas</h1>
            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           <?php session_unset(); }?>
            <div class="card card-body">
                <form action="addpersona.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="idpersona" class="form-control" placeholder="ID Persona" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="ci" rows="2" class="form-control" placeholder="ci" autofocus min="999" max="99999999" autofocus required >
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellido" class="form-control" placeholder="apellido" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="date" name="fecha_nac" rows="2" class="form-control" placeholder="Fecha Nac" autofocus  min="1950-01-01" max="2018-12-31" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="telefono" rows="2" class="form-control" placeholder="telefono" autofocus min="999" max="99999999" autofocus required >
                    </div>
                    <input type="submit" class="btn btn-success btn-block"
                    name="addpersona" value="Guardar"> 
                </form>
            </div>
            <hr class="mb-4">
            <a href="listas_pdf/listaPersonaPDF.php">
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
                            <th>ci</th>
                            <th>nombre</th>
                            <th>apellido</th>
                            <th>Fecha Nacimiento</th>
                            <th>Telefono</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM persona";
                        $result_tasks = mysqli_query($conexion,$query);

                        while($row = mysqli_fetch_array($result_tasks)){ ?>
                            <tr>
                                <td><?php echo $row['idpersona']?></td>
                                <td><?php echo $row['ci']?></td>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['apellido']?></td>
                                <td><?php echo $row['fecha_nac']?></td>
                                <td><?php echo $row['telefono']?></td>
                                <td> 
                                    <a href="editpersona.php?idpersona=<?php echo $row['idpersona']?>" class="btn btn-secondary">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="elipersona.php?idpersona=<?php echo $row['idpersona']?>" class="btn btn-danger">
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