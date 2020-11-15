<?php 

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:index.php");
    exit;

      
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido - culvita</title>
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">

</head>
<body>
    <div class="ctn-welcome">

        <img src="img/logo register" alt="" class="logo">
    <h1 class="title-wecome">Bienvenido lo has
        <b>LOGRADOOOOOOOOO!!!</b>
        <d href="www/inicio.html" class="ininav">Comenzar la navegación</d>
        <a href="Cerrar sesión.php" class="close-sesion">Cerrar Sesión</a>
        
    </h1>
    </div>
</body>
</html>