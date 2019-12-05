<?php 
    include("../base_datos/bd.php");

    if(isset($_GET['idper'])){
        $idper = $_GET['idper'];
        $query = "DELETE FROM personalproduccion WHERE idper = '$idper'";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query failed");
        }
        $_SESSION['message'] = 'Task Removed succesfully';
        $_SESSION['message_type'] = 'danger';
        
        header("Location: personalproduccion.php");
    }
?>