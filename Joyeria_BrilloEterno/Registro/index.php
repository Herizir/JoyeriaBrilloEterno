<!DOCTYPE html>
<html>
    <head>
        <title>Reregistro</title>
        <link rel="stylesheet" href="styless.css">
    </head>
    <body>
        <div>
            <form method="post">
            <h2>Registro</h2>
            <p>Registrar</p>
                <label for="nombre"></label>
                <input type="text" id="name" name="name" placeholder="Nombre"><br>
                <label for="correo"></label>
                <input type="text" id="correo" name="correo" placeholder="Correo electronico"><br>
                <label for="numero"></label>
                <input type="text" id="numero" name="numero" placeholder="Numero de telefono"><br>
                <input class="btn" type="submit" name="register" href="../index.html">
            </form>
            <?php
            include("registrar.php");
            ?>
        </div>
    </body>
</html>