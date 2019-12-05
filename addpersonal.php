<?php 
include("base_datos/bd.php");
if(isset($_POST['addpersonal'])){
    $idper = $_POST['idper'];
    $turno = $_POST['turno'];
    $sueldo = $_POST['sueldo'];
    $query = "INSERT INTO personalproduccion(idper,turno,sueldo) VALUES ('$idper','$turno','$sueldo')";
    $result = mysqli_query($conexion,$query);

    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    
    header("Location: personalproduccion.php");
}
?>