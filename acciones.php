<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statics\stylesheet.css"></link>
    <title>Acciones</title>
</head>
<body>
<?php
    session_start();

    if($_SESSION["volver"] == 0){
    $_SESSION["usuario"]= (isset($_POST["usuario"]) && $_POST["usuario"] != "") ? $_POST["usuario"] : false;
    $_SESSION["casa"] = (isset($_POST["casa"]) && $_POST["casa"] != "") ? $_POST["casa"] : false;}

    if($_SESSION["volver"] == 0)
        if( $_POST["usuario"] == "" || $_POST["casa"] == "")
            header("location: inicio.php");

    echo "
    <h1>¿Que accion quieres realizar, ", $_SESSION["usuario"], "?</h1>
    <div class=frm><form action='especificaciones.php' method='post' target='_blank'>
    <fieldset>
        <p> Acciones </p><br>
                <input type=radio name=accion value='crear'/> Crear<br>
                <input type=radio name=accion value='renombrar'/>  Renombrar<br>
                <input type=radio name=accion value='eliminar''/>  Eliminar<br>
            <br><br>
            <input type='submit' value='Siguiente'/>
    </fieldset>
    </form> </div><br><br>
    <div class=links>
    <a href='registro.php'>Ver registro de acciones</a><br><br>
    <a href='cerrar_sesion.php'>Salir</a><br> </div>";
    ?>
</body>
</html>