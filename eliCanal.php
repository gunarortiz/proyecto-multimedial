<?php 
    include("base_datos/bd.php");

    if(isset($_GET['idcanal'])){
        $idcanal = $_GET['idcanal'];
        $query = "DELETE FROM canal WHERE idcanal = '$idcanal'";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query failed");
        }
        $_SESSION['message'] = 'Task Removed succesfully';
        $_SESSION['message_type'] = 'danger';
        
        header("Location: canales.php");
    }
?>