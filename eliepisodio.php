<?php 
    include("base_datos/bd.php");

    if(isset($_GET['idepi'])){
        $idepi = $_GET['idepi'];
        $query = "DELETE FROM episodio WHERE idepi = '$idepi'";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query failed");
        }
        $_SESSION['message'] = 'Task Removed succesfully';
        $_SESSION['message_type'] = 'danger';
        
        header("Location: episodios.php");
    }
?>