<?php
    include('session.php');

    if(isset($_GET['idambiente'])){
       $idambiente = $_GET['idambiente'];
       $query = "SELECT * FROM ambiente WHERE idambiente = '$idambiente'";
       $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $idambiente = $row['idambiente'];
            $tipo = $row['tipo'];
        }

    }    
    if(isset($_POST['update'])){
        $idambiente = $_GET['idambiente'];
        $tipo = $_POST['tipo'];
        $query = "UPDATE ambiente set tipo =  '$tipo' WHERE idambiente = '$idambiente'";
        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Task Update succesfully';
        $_SESSION['message_type'] = 'warning';
    
        header("Location: ambientes.php");
    }
?>
<?php
    include("partes/header.php");
?>
<div class="container p-4"> 
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editAmbiente.php?idambiente=<?php echo $_GET['idambiente']; ?>" method="POST">
                    <div class="form-group">
                    <input type="text" name="tipo" value="<?php echo $tipo;?>"\
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