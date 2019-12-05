<?php 
include("../base_datos/bd.php");
if(isset($_POST['addActor'])){
    $idactor = $_POST['idactor'];
    $sueldo = $_POST['sueldo'];
    $tipo = $_POST['tipo'];
    $anio_debut = $_POST['anio_debut'];
    $query = "INSERT INTO actor(idactor,sueldo,tipo,anio_debut) VALUES ('$idactor','$sueldo','$tipo','$anio_debut')";
    $result = mysqli_query($conexion,$query);

    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    
    header("Location: actores.php");
}
?>