
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Método POST</title>
</head>
<body>
    <h2>Formulario de Contacto</h2>
    <form method="post" action="post.php">
        <!-- Campo Nombre -->
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <!-- Campo Email -->
        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <!-- Campo Mensaje -->
        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="5" cols="30" required></textarea><br><br>

        <!-- Botón de Envío -->
        <button type="submit">Enviar</button>
    </form>
</body>
</html>