<?php
    include('session.php');

    if(isset($_GET['idactor'])){
       $idactor = $_GET['idactor'];
       $query = "SELECT * FROM actor WHERE idactor = '$idactor'";
       $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $idactor = $row['idactor'];
            $sueldo = $row['sueldo'];
            $tipo = $row['tipo'];
            $anio_debut = $row['anio_debut'];
        }

    }    
    if(isset($_POST['update'])){
        $idactor = $_GET['idactor'];
        $sueldo = $_POST['sueldo'];
        $tipo = $_POST['tipo'];
        $anio_debut = $_POST['anio_debut'];
        $query = "UPDATE actor set sueldo ='$sueldo', tipo = '$tipo', anio_debut = '$anio_debut' WHERE idactor = '$idactor'";
        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Task Update succesfully';
        $_SESSION['message_type'] = 'warning';
    
        header("Location: actores.php");
    }
?>
<?php
    include("partes/header.php");
?>
<div class="container p-4"> 
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editActor.php?idactor=<?php echo $_GET['idactor']; ?>" method="POST">
                    <div class="form-group">
                        <input type="number" name="sueldo" value="<?php echo $sueldo;?>"
                            class="form-control" placeholder="Editar sueldo">
                    </div>
                    <div class="form-group">
                    <input type="text" name="tipo" value="<?php echo $tipo;?>"\
                            class="form-control" placeholder="Update Title"
                        >                    </div>
                    <div class="form-group">
                        <input type="date" name="anio_debut" value="<?php echo $anio_debut;?>"
                            class="form-control" placeholder="Update Title">
                    </div>
                    <button class="btn btn-success" name="update">
                        Editar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("partes/footer.php") ;?>