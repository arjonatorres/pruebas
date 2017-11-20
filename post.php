<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Prueba filter</title>
    </head>
    <body>
        <?php
        $clave = filter_input(INPUT_POST, 'clave', FILTER_VALIDATE_INT) ?? false;
        var_dump($clave);
        ?>
        <form action="index.php" method="post">
            <input type="hidden" name="clave" value="5">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
