<?php
    include("base_datos/bd.php");

    if(isset($_GET['idepi'])){
       $idepi = $_GET['idepi'];
       $query = "SELECT * FROM episodio WHERE idepi = '$idepi'";
       $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $idepi = $row['idepi'];
            $nombre = $row['nombre'];
            $nrotemporada = $row['nrotemporada'];
            $idprog = $row['idprog'];
        }

    }    
    if(isset($_POST['update'])){
        $idepi = $_GET['idepi'];
        $nombre = $_POST['nombre'];
        $nrotemporada = $_POST['nrotemporada'];
        $idprog = $_POST['idprog'];
        $query = "UPDATE episodio set nombre ='$nombre', nrotemporada = '$nrotemporada', idprog = '$idprog' WHERE idepi = '$idepi'";
        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Task Update succesfully';
        $_SESSION['message_type'] = 'warning';
    
        header("Location: episodios.php");
    }
?>
<?php
    include("partes/header.php");
?>
<div class="container p-4"> 
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editespisodio.php?idepi=<?php echo $_GET['idepi']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre;?>"
                            class="form-control" placeholder="Editar nombre">
                    </div>
                    <div class="form-group">
                    <input type="number" name="nrotemporada" value="<?php echo $nrotemporada;?>"\
                            class="form-control" placeholder="Update Title"
                        >                    </div>
                    <div class="form-group">
                        <input type="text" name="idprog" value="<?php echo $idprog;?>"
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