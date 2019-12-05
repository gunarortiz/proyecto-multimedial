<?php 
    include("../base_datos/bd.php");

    if(isset($_GET['idtec'])){
        $idtec = $_GET['idtec'];
        $query = "DELETE FROM tecnico WHERE idtec = '$idtec'";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query failed");
        }
        $_SESSION['message'] = 'Task Removed succesfully';
        $_SESSION['message_type'] = 'danger';
        
        header("Location: tecnicos.php");
    }
?>