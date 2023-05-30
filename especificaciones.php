<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statics\stylesheet.css"></link>
    <title>Especificaciones</title>
</head>
<body>
<?php
    session_start();

    $accion = (isset($_POST["accion"]) && $_POST["accion"] != "") ? $_POST["accion"] : false;

    $_SESSION["accion"] = $accion;

    if( $_SESSION["usuario"] == "" || $_SESSION["casa"] == "")
        header("location: inicio.php");
    
    if( $_SESSION["accion"] == "")
        header("location: acciones.php");

    if(isset($_SESSION["strecho"]))
        $var=strlen($_SESSION["strecho"]);
    $_SESSION["regis"] = (isset($_SESSION["strecho"]) && strlen($_SESSION["strecho"]) != 0) ? $var : 0;

    // echo $_SESSION["regis"], "<br>";
    // echo strlen($_SESSION["strecho"]), "<br>";
    // echo isset($_SESSION["regis"]);

    echo "
    <h1>Especifica que quieres $accion</h1>
    <div class=frm><form action='registro.php' method='post' target='_blank'>
    <fieldset>
        <p>¿Qué archivo o carpeta?</p><br>
                <input type=radio name=tipo value='el archivo'/> Archivo<br>
                <input type=radio name=tipo value='la carpeta'/>  Carpeta<br>
                <br>
                Nombre <input type='text' placeholder='nomb.ext' id='nomb' name='nomb' required/>
                <br><br>
                <input type='submit' value='Siguiente'/>
    </fieldset>
    </form></div>";

?>
</body>
</html>