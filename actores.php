<?php include("base_datos/bd.php")?>

<?php include("partes/header.php")?>
<div class="container contenedor p-4">
    <div class="row">
        <div class="col-md-4">
                <h1>Actores</h1>
            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           <?php session_unset(); }?>
            <div class="card card-body">
                <form action="addActor.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="idactor" class="form-control" placeholder="ID Actor" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="sueldo" rows="2" class="form-control" placeholder="Sueldo" autofocus min="999" max="99999999" autofocus required >
                    </div>
                    <div class="form-group">
                        <input type="text" name="tipo" class="form-control" placeholder="Tipo" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="date" name="anio_debut" rows="2" class="form-control" placeholder="Año debut" autofocus  min="1950-01-01" max="2018-12-31" required>
                    </div>
                    <input type="submit" class="btn btn-success btn-block"
                    name="addActor" value="Guardar"> 
                </form>
            </div>
        </div>
        <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Sueldo</th>
                            <th>Tipo</th>
                            <th>Año de su debut</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM actor";
                        $result_tasks = mysqli_query($conexion,$query);

                        while($row = mysqli_fetch_array($result_tasks)){ ?>
                            <tr>
                                <td><?php echo $row['idactor']?></td>
                                <td><?php echo $row['sueldo']?></td>
                                <td><?php echo $row['tipo']?></td>
                                <td><?php echo $row['anio_debut']?></td>
                                <td> 
                                    <a href="editActor.php?idactor=<?php echo $row['idactor']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="eliActor.php?idactor=<?php echo $row['idactor']?>" class="btn btn-danger">
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