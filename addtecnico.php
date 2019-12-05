<?php 
include("base_datos/bd.php");
if(isset($_POST['addtecnico'])){
    $idtec = $_POST['idtec'];
    $mat_trabajo = $_POST['mat_trabajo'];
    $query = "INSERT INTO tecnico(idtec,mat_trabajo) VALUES ('$idtec','$mat_trabajo')";
    $result = mysqli_query($conexion,$query);

    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    
    header("Location: tecnicos.php");
}
?>