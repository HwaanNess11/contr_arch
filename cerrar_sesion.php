<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statics\stylesheet.css"></link>
    <title>Cerrar sesión</title>
</head>
<body>
<?php
    session_start();
    if( $_SESSION["usuario"] == "" || $_SESSION["casa"] == "") 
        header("location: inicio.php");

    echo "<h1>Esperamos verte pronto, ", $_SESSION["usuario"], "</h1>
    <a href='inicio.php'>Volver al inicio</a><br>";
?>
</body>
</html>