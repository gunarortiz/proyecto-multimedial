<?php 
include("base_datos/bd.php");
if(isset($_POST['addAsistente'])){
    $idasi = $_POST['idasi'];
    $especialidad = $_POST['especialidad'];
    $query = "INSERT INTO asistente(idasi,especialidad) VALUES ('$idasi','$especialidad')";
    $result = mysqli_query($conexion,$query);

    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    
    header("Location: asistentes.php");
}
?>