<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $accion = (isset($_POST["accion"]) && $_POST["accion"] != "") ? $_POST["accion"] : false;

    echo "
    <h1>Especifica qué quieres $accion</h1>
    <form>
    <fieldset>
        <legend>¿Qué archivo o carpeta?</legend><br>
                <input type=radio name=tipo value='archivo'/> Archivo<br>
                <input type=radio name=tipo value='carpeta'/>  Carpeta<br>
                <br>
                Nombre <input type='text' placeholder='nomb.ext' id='archocarp' name='archocarp' required/>
                <br><br>
                <input type='submit' value='Siguiente'/>
    </fieldset>
    </form>";
?>
</body>
</html>