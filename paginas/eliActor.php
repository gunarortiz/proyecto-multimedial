<?php 
    include("../base_datos/bd.php");

    if(isset($_GET['idactor'])){
        $idactor = $_GET['idactor'];
        $query = "DELETE FROM actor WHERE idactor = '$idactor'";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query failed");
        }
        $_SESSION['message'] = 'Task Removed succesfully';
        $_SESSION['message_type'] = 'danger';
        
        header("Location: actores.php");
    }
?>