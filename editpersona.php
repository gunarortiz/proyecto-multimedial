<?php
    include("base_datos/bd.php");

    if(isset($_GET['idpersona'])){
       $idpersona = $_GET['idpersona'];
       $query = "SELECT * FROM persona WHERE idpersona = '$idpersona'";
       $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $idpersona = $row['idpersona'];
            $ci = $row['ci'];
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $fecha_nac = $row['fecha_nac'];
            $telefono = $row['telefono'];
        }

    }    
    if(isset($_POST['update'])){
        $idpersona = $_GET['idpersona'];
        $ci = $_POST['ci'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha_nac = $_POST['fecha_nac'];
        $telefono = $_POST['telefono'];
        $query = "UPDATE persona set ci ='$ci',nombre ='$nombre', apellido ='$apellido', fecha_nac = '$fecha_nac', telefono = '$telefono' WHERE idpersona = '$idpersona'";
        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Task Update succesfully';
        $_SESSION['message_type'] = 'warning';
    
        header("Location: personas.php");
    }
?>
<?php
    include("partes/header.php");
?>
<div class="container p-4"> 
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editpersona.php?idpersona=<?php echo $_GET['idpersona']; ?>" method="POST">
                    
                <div class="form-group">
                        <input type="number" name="ci" value="<?php echo $ci;?>"
                            class="form-control" placeholder="Editar apellido">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre;?>"
                            class="form-control" placeholder="Editar apellido">
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellido" value="<?php echo $apellido;?>"
                            class="form-control" placeholder="Editar apellido">
                    </div>
                    <div class="form-group">
                    <input type="date" name="fecha_nac" value="<?php echo $fecha_nac;?>"\
                            class="form-control" placeholder="Update Title"
                        >                    </div>
                    <div class="form-group">
                        <input type="number" name="telefono" value="<?php echo $telefono;?>"
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