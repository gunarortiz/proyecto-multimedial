<?php 
include("../base_datos/bd.php");
if(isset($_POST['adddirector'])){
    $iddire = $_POST['iddire'];
    $cargo = $_POST['cargo'];
    $query = "INSERT INTO director(iddire,cargo) VALUES ('$iddire','$cargo')";
    $result = mysqli_query($conexion,$query);

    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    
    header("Location: directores.php");
}
?>