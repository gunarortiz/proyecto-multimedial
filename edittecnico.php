<?php
    include("base_datos/bd.php");

    if(isset($_GET['idtec'])){
       $idtec = $_GET['idtec'];
       $query = "SELECT * FROM tecnico WHERE idtec = '$idtec'";
       $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $idtec = $row['idtec'];
            $mat_trabajo = $row['mat_trabajo'];
        }

    }    
    if(isset($_POST['update'])){
        $idtec = $_GET['idtec'];
        $mat_trabajo = $_POST['mat_trabajo'];
        $query = "UPDATE tecnico set mat_trabajo =  '$mat_trabajo' WHERE idtec = '$idtec'";
        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Task Update succesfully';
        $_SESSION['message_type'] = 'warning';
    
        header("Location: tecnicos.php");
    }
?>
<?php
    include("partes/header.php");
?>
<div class="container p-4"> 
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edittecnico.php?idtec=<?php echo $_GET['idtec']; ?>" method="POST">
                    <div class="form-group">
                    <input type="text" name="mat_trabajo" value="<?php echo $mat_trabajo;?>"\
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