<?php include("../base_datos/bd.php")?>

<?php include("../includes/header.php")?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
                <h1>Técnicos</h1>
            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           <?php session_unset(); }?>
            <div class="card card-body">
                <form action="addtecnico.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="idtec" class="form-control" placeholder="ID Tecnico" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="mat_trabajo" rows="2" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" placeholder="mat_trabajo" autofocus required >
                    <input type="submit" class="btn btn-success btn-block"
                    name="addtecnico" value="Guardar"> 
                </form>
            </div>
        </div>
        <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id Tecnico</th>
                            <th>Material trabajo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM tecnico";
                        $result_tasks = mysqli_query($conexion,$query);

                        while($row = mysqli_fetch_array($result_tasks)){ ?>
                            <tr>
                                <td><?php echo $row['idtec']?></td>
                                <td><?php echo $row['mat_trabajo']?></td>
                                <td> 
                                    <a href="edittecnico.php?idtec=<?php echo $row['idtec']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="elitecnico.php?idtec=<?php echo $row['idtec']?>" class="btn btn-danger">
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