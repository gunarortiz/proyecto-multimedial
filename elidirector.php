<?php 
    include("base_datos/bd.php");

    if(isset($_GET['iddire'])){
        $iddire = $_GET['iddire'];
        $query = "DELETE FROM director WHERE iddire = '$iddire'";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query failed");
        }
        $_SESSION['message'] = 'Task Removed succesfully';
        $_SESSION['message_type'] = 'danger';
        
        header("Location: directores.php");
    }
?>