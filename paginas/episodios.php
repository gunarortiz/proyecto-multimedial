<?php include("../base_datos/bd.php")?>

<?php include("../includes/header.php")?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
                <h1>Episodios</h1>
            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           <?php session_unset(); }?>
            <div class="card card-body">
                <form action="addepisodio.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="idepi" class="form-control" placeholder="ID Episodio" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="nrotemporada" rows="2" class="form-control" placeholder="nrotemporada" autofocus min="1" max="200" autofocus required >
                    </div>
                    <div class="form-group">
                        <input type="text" name="idprog" rows="2" class="form-control" placeholder="Id Programa" autofocus required>
                    </div>
                    <input type="submit" class="btn btn-success btn-block"
                    name="addepisodio" value="Guardar"> 
                </form>
            </div>
        </div>
        <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nro Temporada</th>
                            <th>Nombre</th>
                            <th>Id Programa</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM episodio";
                        $result_tasks = mysqli_query($conexion,$query);

                        while($row = mysqli_fetch_array($result_tasks)){ ?>
                            <tr>
                                <td><?php echo $row['idepi']?></td>
                                <td><?php echo $row['nrotemporada']?></td>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['idprog']?></td>
                                <td> 
                                    <a href="editespisodio.php?idepi=<?php echo $row['idepi']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="eliepisodio.php?idepi=<?php echo $row['idepi']?>" class="btn btn-danger">
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
<?php include("../includes/footer.php")?>