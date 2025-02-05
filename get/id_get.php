<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nombre'])) {
    // Recoger los datos enviados por GET
    $nombre = htmlspecialchars($_GET['nombre']);
    $email = htmlspecialchars($_GET['email']);
    $mensaje = htmlspecialchars($_GET['mensaje']);

    // Validar que los campos no estén vacíos
    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        // Aquí puedes procesar los datos, por ejemplo:
        // - Guardarlos en una base de datos.
        // - Enviarlos por correo electrónico.
        // - Mostrar un mensaje de éxito.

        echo "<h3>Datos recibidos correctamente:</h3>";
        echo "Nombre: " . $nombre . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Mensaje: " . $mensaje . "<br>";
    } else {
        echo "<p style='color: red;'>Por favor, completa todos los campos.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Método GET</title>
</head>
<body>
    <h2>Formulario de Contacto</h2>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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