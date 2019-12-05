<?php
    include("base_datos/bd.php");

    if(isset($_GET['idcanal'])){
       $idcanal = $_GET['idcanal'];
       $query = "SELECT * FROM canal WHERE idcanal = '$idcanal'";
       $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $idcanal = $row['idcanal'];
            $nroemi = $row['nroemi'];
            $nombrec = $row['nombrec'];
        }

    }    
    if(isset($_POST['update'])){
        $idcanal = $_GET['idcanal'];
        $nroemi = $_POST['nroemi'];
        $nombrec = $_POST['nombrec'];
        $query = "UPDATE canal set nroemi ='$nroemi', nombrec = '$nombrec' WHERE idcanal = '$idcanal'";
        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Task Update succesfully';
        $_SESSION['message_type'] = 'warning';
    
        header("Location: canales.php");
    }
?>
<?php
    include("partes/header.php");
?>
<div class="container p-4"> 
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editCanal.php?idcanal=<?php echo $_GET['idcanal']; ?>" method="POST">
                    <div class="form-group">
                        <input type="number" name="nroemi" value="<?php echo $nroemi;?>"
                            class="form-control" placeholder="Editar nroemi">
                    </div>
                    <div class="form-group">
                    <input type="text" name="nombrec" value="<?php echo $nombrec;?>"\
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