<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statics\stylesheet.css"></link>
    <title>Registro de acciones</title>
</head>
<body>
<?php
    session_start();

    if($_SESSION["usuario"] == "" || $_SESSION["casa"] == "")
        header("location: inicio.php");

    $_SESSION["tipo"] = (isset($_POST["tipo"]) && $_POST["tipo"] != "") ? $_POST["tipo"] : false;
    $_SESSION["nomb"] = (isset($_POST["nomb"]) && $_POST["nomb"] != "") ? $_POST["nomb"] : false;

    $usuario = $_SESSION["usuario"];
    $casa = $_SESSION["casa"];
    $accion = $_SESSION["accion"];
    $tipo = $_SESSION["tipo"];
    $nomb = $_SESSION["nomb"];

    echo "<h1>Acciones realizadas</h1>";

    if($usuario != "" && $casa != "" && $accion != "" && $tipo != "" && $nomb != "")
    {
        if($_SESSION["regis"]==0)
            $_SESSION["cad1"]="";
        else
            $_SESSION["cad1"]=$_SESSION["strecho"];
        $datos = array("<li>", $usuario, "de la casa", $casa, "decició", $accion, $tipo, $nomb, "</li>");
        $_SESSION["cad2"] = implode (" ", $datos);
        $arreglodecad = array($_SESSION["cad1"], $_SESSION["cad2"]);
        $_SESSION["strecho"] = implode ("", $arreglodecad);
        echo $_SESSION["strecho"];
    }
    else
        echo $_SESSION["strecho"];

    $_SESSION["volver"] = 1;
    echo "<br><a href='acciones.php'>Volver</a>";


?>
</body>
</html>