<?php 
include("base_datos/bd.php");
if(isset($_POST['addCanal'])){
    $idcanal = $_POST['idcanal'];
    $nroemi = $_POST['nroemi'];
    $nombrec = $_POST['nombrec'];
    $query = "INSERT INTO canal(idcanal,nroemi,nombrec) VALUES ('$idcanal','$nroemi','$nombrec')";
    $result = mysqli_query($conexion,$query);

    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    
    header("Location: canales.php");
}
?>