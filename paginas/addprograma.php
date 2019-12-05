<?php 
include("../base_datos/bd.php");
if(isset($_POST['addprograma'])){
    $idprog = $_POST['idprog'];
    $nombre = $_POST['nombre'];
    $genero = $_POST['genero'];
    $nrotemporadas = $_POST['nrotemporadas'];
    $pais = $_POST['pais'];
    $query = "INSERT INTO programa(idprog,nombre,genero,nrotemporadas,pais) VALUES ('$idprog','$nombre','$genero','$nrotemporadas','$pais')";
    $result = mysqli_query($conexion,$query);

    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    
    header("Location: programas.php");
}
?>
