<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statics\stylesheet.css"></link>
    <title>Inicio de sesión</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION["volver"] = 0;
    echo "
    <h1>Inicio de sesion</h1>
    <div class=frm><form action='acciones.php' method='post'>
    <fieldset>
        <p> Introduce tus datos </p><br>
        Usuario: <input type='text' placeholder='nombre' id='usuario' name='usuario' required/>
        <br><br>
            Casa:
            <select name='casa'>
                <option value=halcones>Halcones</option>
                <option value=ajoltes>Ajolotes</option>
                <option value=teporingos>Teporingos</option>
            </select>
            <br><br><br>
            <input type='submit' value='Entrar'/>
    </fieldset>
    </form></div>";
    ?>
</body>
</html>