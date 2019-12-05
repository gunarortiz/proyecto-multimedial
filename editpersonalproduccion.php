<?php
    include("base_datos/bd.php");

    if(isset($_GET['idper'])){
       $idper = $_GET['idper'];
       $query = "SELECT * FROM personalproduccion WHERE idper = '$idper'";
       $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $idper = $row['idper'];
            $turno = $row['turno'];
            $sueldo = $row['sueldo'];
        }

    }    
    if(isset($_POST['update'])){
        $idper = $_GET['idper'];
        $turno = $_POST['turno'];
        $sueldo = $_POST['sueldo'];
        $query = "UPDATE personalproduccion set turno ='$turno', sueldo = '$sueldo' WHERE idper = '$idper'";
        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Task Update succesfully';
        $_SESSION['message_type'] = 'warning';
    
        header("Location: personalproduccion.php");
    }
?>
<?php
    include("partes/header.php");
?>
<div class="container p-4"> 
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editpersonalproduccion.php?idper=<?php echo $_GET['idper']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="turno" value="<?php echo $turno;?>"
                            class="form-control" placeholder="Editar turno">
                    </div>
                    <div class="form-group">
                    <input type="number" name="sueldo" value="<?php echo $sueldo;?>"\
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