<?php 
    include("../base_datos/bd.php");

    if(isset($_GET['nroescena'])){
        $nroescena = $_GET['nroescena'];
        $query = "DELETE FROM escena WHERE nroescena = '$nroescena'";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query failed");
        }
        $_SESSION['message'] = 'Task Removed succesfully';
        $_SESSION['message_type'] = 'danger';
        
        header("Location: escenas.php");
    }
?>