<?php 
include("base_datos/bd.php");
if(isset($_POST['addepisodio'])){
    $idepi = $_POST['idepi'];
    $nombre = $_POST['nombre'];
    $nrotemporada = $_POST['nrotemporada'];
    $idprog = $_POST['idprog'];
    $query = "INSERT INTO episodio(idepi,nombre,nrotemporada,idprog) VALUES ('$idepi','$nombre','$nrotemporada','$idprog')";
    $result = mysqli_query($conexion,$query);

    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    
    header("Location: episodios.php");
}
?>