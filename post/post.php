<?php
include '../conexion.php';
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos enviados por POST
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Validar que los campos no estén vacíos
    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        // Aquí puedes procesar los datos, por ejemplo:
        // - Guardarlos en una base de datos.
        // - Enviarlos por correo electrónico.
        // - Mostrar un mensaje de éxito.


        // Insertar datos en la base de datos
        $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (:nombre, :email, :mensaje)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mensaje', $mensaje);
  
        if ($stmt->execute()) {
            echo "Datos insertados correctamente";
            // header("Location: ../index.php");
            echo "<h3>Datos recibidos correctamente:</h3>";
            echo "Nombre: " . $nombre . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Mensaje: " . $mensaje . "<br>";
        } else {
            echo "Error al insertar los datos";
        }

    } else {
        echo "<p style='color: red;'>Por favor, completa todos los campos.</p>";
    }
}
?>