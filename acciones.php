<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acciones</title>
</head>
<body>
<?php

    $usuario = (isset($_POST["usuario"]) && $_POST["usuario"] != "") ? $_POST["usuario"] : false;

    echo "
    <h1>¿Qué acción quieres realizar, $usuario?</h1>
    <form action='especificaciones.php' method='post' target='_blank'>
    <fieldset>
        <legend> Acciones </legend><br>
                <input type=radio name=accion value='crear'/> Crear<br>
                <input type=radio name=accion value='renombrar'/>  Renombrar<br>
                <input type=radio name=accion value='eliminar''/>  Eliminar<br>
            <br><br>
            <input type='submit' value='Siguiente'/>
    </fieldset>
    </form>
    <a href='registro.php'>Ver registro de acciones</a><br>
    <a href='cerrar_sesion.php'>Salir</a><br>";
    ?>
</body>
</html>