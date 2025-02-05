<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <center>Tabla Contactos
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Mensaje</th>
        </tr>
        <?php
        include 'conexion.php';
        $sql = "SELECT * FROM contactos"; // Consulta SQL para obtener todos los datos de la tabla contactos
        $stmt = $conn->query($sql);
        
        // Obtener todas las filas
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($resultados as $fila) {
            ?>
            <tr>
                <td><?php echo $fila['nombre'] ?></td>
                <td><?php echo $fila['email'] ?></td>
                <td><?php echo $fila['mensaje'] ?></td>
                <td><a href="get/get.php?id=<?php echo $fila['id'] ?>">Id URL</a></td>
            </tr>
            <?php    
    }
        ?>
        </center>
</body>
</html>