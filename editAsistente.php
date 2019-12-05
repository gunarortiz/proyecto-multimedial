<?php
    include('session.php');

    if(isset($_GET['idasi'])){
       $idasi = $_GET['idasi'];
       $query = "SELECT * FROM asistente WHERE idasi = '$idasi'";
       $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $idasi = $row['idasi'];
            $especialidad = $row['especialidad'];
        }

    }    
    if(isset($_POST['update'])){
        $idasi = $_GET['idasi'];
        $especialidad = $_POST['especialidad'];
        $query = "UPDATE asistente set especialidad =  '$especialidad' WHERE idasi = '$idasi'";
        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Task Update succesfully';
        $_SESSION['message_type'] = 'warning';
    
        header("Location: asistentes.php");
    }
?>
<?php
    include("partes/header.php");
?>
<div class="container p-4"> 
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editAsistente.php?idasi=<?php echo $_GET['idasi']; ?>" method="POST">
                    <div class="form-group">
                    <input type="text" name="especialidad" value="<?php echo $especialidad;?>"\
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