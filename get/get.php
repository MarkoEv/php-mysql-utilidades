<?php
// Incluir el archivo de conexión a la base de datos
require_once '../conexion.php';

// Verificar si se ha enviado el ID mediante GET
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Recoger el ID enviado por GET
    $id = htmlspecialchars($_GET['id']);

    // Validar que el ID sea un número entero
    if (!is_numeric($id)) {
        echo "<p style='color: red;'>El ID proporcionado no es válido.</p>";
        exit;
    }

    try {
        // Consulta preparada para obtener datos del contacto
        $sql = "SELECT id, nombre FROM contactos WHERE id = :id";
        $stmt = $conn->prepare($sql);

        // Asignar el valor del ID al marcador de posición
        $stmt->execute(['id' => $id]);

        // Obtener los resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Mostrar los resultados
        if (!empty($resultados)) {
            foreach ($resultados as $fila) {
                echo $fila['id'] . ' - ' . $fila['nombre'] . '<br>';
            }
        } else {
            echo "<p style='color: red;'>No se encontró ningún contacto con el ID proporcionado.</p>";
        }
    } catch (PDOException $e) {
        echo "Error de conexión o consulta: " . $e->getMessage();
    }
} else {
    echo "<p style='color: red;'>No se ha proporcionado un ID válido.</p>";
}
?>