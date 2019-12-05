<?php
    include("base_datos/bd.php");

    if(isset($_GET['iddire'])){
       $iddire = $_GET['iddire'];
       $query = "SELECT * FROM director WHERE iddire = '$iddire'";
       $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $iddire = $row['iddire'];
            $cargo = $row['cargo'];
        }

    }    
    if(isset($_POST['update'])){
        $iddire = $_GET['iddire'];
        $cargo = $_POST['cargo'];
        $query = "UPDATE director set cargo =  '$cargo' WHERE iddire = '$iddire'";
        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Task Update succesfully';
        $_SESSION['message_type'] = 'warning';
    
        header("Location: directores.php");
    }
?>
<?php
    include("partes/header.php");
?>
<div class="container p-4"> 
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editdirector.php?iddire=<?php echo $_GET['iddire']; ?>" method="POST">
                    <div class="form-group">
                    <input type="text" name="cargo" value="<?php echo $cargo;?>"\
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