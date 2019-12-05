<?php
    include("base_datos/bd.php");

    if(isset($_GET['nroescena'])){
       $nroescena = $_GET['nroescena'];
       $query = "SELECT * FROM escena WHERE nroescena = '$nroescena'";
       $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $nroescena = $row['nroescena'];
            $idepi = $row['idepi'];
            $duracion = $row['duracion'];
        }

    }    
    if(isset($_POST['update'])){
        $nroescena = $_GET['nroescena'];
        $idepi = $_POST['idepi'];
        $duracion = $_POST['duracion'];
        $query = "UPDATE escena set idepi ='$idepi', duracion = '$duracion' WHERE nroescena = '$nroescena'";
        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Task Update succesfully';
        $_SESSION['message_type'] = 'warning';
    
        header("Location: escenas.php");
    }
?>
<?php
    include("partes/header.php");
?>
<div class="container p-4"> 
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editescena.php?nroescena=<?php echo $_GET['nroescena']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="idepi" value="<?php echo $idepi;?>"
                            class="form-control" placeholder="Editar idepi">
                    </div>
                    <div class="form-group">
                    <input type="number" name="duracion" value="<?php echo $duracion;?>"\
                            class="form-control" placeholder="Update Title"
                        >                    </div>
                    <button class="btn btn-success" name="update">
                        Editar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("partes/footer.php") ;?>