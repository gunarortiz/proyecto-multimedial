<?php 
    include("base_datos/bd.php");

    if(isset($_GET['idambiente'])){
        $idambiente = $_GET['idambiente'];
        $query = "DELETE FROM ambiente WHERE idambiente = '$idambiente'";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query failed");
        }
        $_SESSION['message'] = 'Task Removed succesfully';
        $_SESSION['message_type'] = 'danger';
        
        header("Location: ambientes.php");
    }
?>