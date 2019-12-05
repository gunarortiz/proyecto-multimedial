<?php 
include("base_datos/bd.php");
if(isset($_POST['addpersona'])){
    $idpersona = $_POST['idpersona'];
    $ci = $_POST['ci'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nac = $_POST['fecha_nac'];
    $telefono = $_POST['telefono'];
    $query = "INSERT INTO persona(idpersona,ci,nombre,apellido,fecha_nac,telefono) VALUES ('$idpersona','$ci','$nombre','$apellido','$fecha_nac','$telefono')";
    $result = mysqli_query($conexion,$query);

    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    
    header("Location: personas.php");
}
?>