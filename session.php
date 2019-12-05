<?php
   include('base_datos/bd.php');
   if(!isset($_SESSION)) 
    { 
   session_start();
    }
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conexion,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>