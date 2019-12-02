<?php
    $server = 'localhost';
    $user = 'root';
    $pw = '';
    $bd = 'serietelevision';

    $conexion = new mysqli($server, $user, $pw, $bd);

    if(mysqli_connect_error()){
        echo 'Conexion Fallida: ', mysqli_connect_error();
        exit();
    }

?>