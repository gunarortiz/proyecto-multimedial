<?php 
    include("../base_datos/bd.php");

    if(isset($_GET['idprog'])){
        $idprog = $_GET['idprog'];
        $query = "DELETE FROM programa WHERE idprog = '$idprog'";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query failed");
        }
        $_SESSION['message'] = 'Task Removed succesfully';
        $_SESSION['message_type'] = 'danger';
        
        header("Location: programas.php");
    }
?>