<?php 
include("../base_datos/bd.php");
if(isset($_POST['addAmbiente'])){
    $idambiente = $_POST['idambiente'];
    $tipo = $_POST['tipo'];
    $query = "INSERT INTO ambiente(idambiente,tipo) VALUES ('$idambiente','$tipo')";
    $result = mysqli_query($conexion,$query);

    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    
    header("Location: ambientes.php");
}
?>