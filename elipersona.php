<?php 
    include("base_datos/bd.php");

    if(isset($_GET['idpersona'])){
        $idpersona = $_GET['idpersona'];
        $query = "DELETE FROM persona WHERE idpersona = '$idpersona'";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query failed");
        }
        $_SESSION['message'] = 'Task Removed succesfully';
        $_SESSION['message_type'] = 'danger';
        
        header("Location: personas.php");
    }
?>