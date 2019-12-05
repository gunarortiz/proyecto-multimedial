<?php
    include("../base_datos/bd.php");

    if(isset($_GET['idprog'])){
       $idprog = $_GET['idprog'];
       $query = "SELECT * FROM programa WHERE idprog = '$idprog'";
       $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $idprog = $row['idprog'];
            $nombre = $row['nombre'];
            $genero = $row['genero'];
            $nrotemporadas = $row['nrotemporadas'];
            $pais = $row['pais'];
        }

    }    
    if(isset($_POST['update'])){
        $idprog = $_GET['idprog'];
        $nombre = $_POST['nombre'];
        $genero = $_POST['genero'];
        $nrotemporadas = $_POST['nrotemporadas'];
        $pais = $_POST['pais'];
        $query = "UPDATE programa set nombre ='$nombre', genero = '$genero', nrotemporadas = '$nrotemporadas', pais = '$pais' WHERE idprog = '$idprog'";
        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Task Update succesfully';
        $_SESSION['message_type'] = 'warning';
    
        header("Location: programas.php");
    }
?>
<?php
    include("../partes/header.php");
?>
<div class="container p-4"> 
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editprograma.php?idprog=<?php echo $_GET['idprog']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre;?>"
                            class="form-control" placeholder="Editar nombre">
                    </div>
                    <div class="form-group">
                    <input type="text" name="genero" value="<?php echo $genero;?>"\
                            class="form-control" placeholder="Update Title"
                        >                    </div>
                    <div class="form-group">
                        <input type="number" name="nrotemporadas" value="<?php echo $nrotemporadas;?>"
                            class="form-control" placeholder="Update Title">
                    </div>
                    <div class="form-group">
                        <input type="text" name="pais" value="<?php echo $pais;?>"
                            class="form-control" placeholder="Editar nombre">
                    </div>
                    <button class="btn btn-success" name="update">
                        Editar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("../partes/footer.php") ;?>