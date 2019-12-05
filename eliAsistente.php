<?php 
    include("base_datos/bd.php");

    if(isset($_GET['idasi'])){
        $idasi = $_GET['idasi'];
        $query = "DELETE FROM asistente WHERE idasi = '$idasi'";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query failed");
        }
        $_SESSION['message'] = 'Task Removed succesfully';
        $_SESSION['message_type'] = 'danger';
        
        header("Location: asistentes.php");
    }
?>