<?php include('session.php');?>

<?php include("partes/header.php")?>
<div class="container contenedor p-4">
    <div class="row">
        <div class="col-md-4">
                <h1>Programas</h1>
            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           <?php session_unset(); }?>
            <div class="card card-body">
                <form action="addprograma.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="idprog" class="form-control" placeholder="ID Programa" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre" rows="2" class="form-control" placeholder="nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"  autofocus required >
                    </div>
                    <div class="form-group">
                        <input type="text" name="genero" class="form-control" placeholder="genero" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="nrotemporadas" rows="2" class="form-control" placeholder="Nro temporada" autofocus  min="1" max="20" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pais" class="form-control" placeholder="pais" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" autofocus required>
                    </div>
                    <input type="submit" class="btn btn-success btn-block"
                    name="addprograma" value="Guardar"> 
                </form>
            </div>
            <hr class="mb-4">
            <a href="listas_pdf/listaProgramaPDF.php">
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
                            <th>Nombre</th>
                            <th>Género</th>
                            <th>Nro temporadas</th>
                            <th>País</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM programa";
                        $result_tasks = mysqli_query($conexion,$query);

                        while($row = mysqli_fetch_array($result_tasks)){ ?>
                            <tr>
                                <td><?php echo $row['idprog']?></td>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['genero']?></td>
                                <td><?php echo $row['nrotemporadas']?></td>
                                <td><?php echo $row['pais']?></td>
                                <td> 
                                    <a href="editprograma.php?idprog=<?php echo $row['idprog']?>" class="btn btn-secondary">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="eliprograma.php?idprog=<?php echo $row['idprog']?>" class="btn btn-danger">
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