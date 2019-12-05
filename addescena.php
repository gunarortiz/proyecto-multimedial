<?php 
include("base_datos/bd.php");
if(isset($_POST['addescena'])){
    $nroescena = $_POST['nroescena'];
    $idepi = $_POST['idepi'];
    $duracion = $_POST['duracion'];
    $query = "INSERT INTO escena(nroescena,idepi,duracion) VALUES ('$nroescena','$idepi','$duracion')";
    $result = mysqli_query($conexion,$query);

    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    
    header("Location: escenas.php");
}
?>