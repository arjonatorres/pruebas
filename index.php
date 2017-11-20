<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Acceso base de datos</title>
    </head>
    <body>
        <?php
        $pdo = new PDO('pgsql:host=localhost;dbname=pruebas', 'pruebas', 'pruebas');
        $sent = $pdo->query('SELECT *
                               FROM moviles');
        ?>
        <table border=2>
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Pantalla</th>
                    <th>Color</th>
                </tr>
            </thead>
        <tbody>
        <?php
        foreach ($sent as $fila): ?>
            <tr>
                <td><?= $fila['marca'] ?></td>
                <td><?= $fila['modelo'] ?></td>
                <td><?= $fila['pantalla'] ?></td>
                <td><?= $fila['color'] ?></td>
            </tr>
        <?php
        endforeach;
        ?>
    </body>
</html>
