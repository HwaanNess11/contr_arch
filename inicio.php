<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
    <?php
    echo "
    <h1>Inicio de sesión</h1>
    <form action='acciones.php' method='post' target='_blank'>
    <fieldset>
        <legend> Introduce tus datos </legend><br>
        Usuario: <input type='text' placeholder='nombre' id='usuario' name='usuario' required/>
        <br><br>
            Casa:
            <select name=zona>
                <option value=halcones>Halcones</option>
                <option value=ajoltes>Ajolotes</option>
                <option value=teporingos>Teporingos</option>
            </select>
            <br><br>
            <input type='submit' value='Entrar'/>
    </fieldset>
    </form>"
    ?>
</body>
</html>