<?php 
include 'conexion.php';
$sql = "SELECT * FROM prueba1"; // Consulta SQL para obtener todos los datos de la tabla prueba1
$stmt = $conn->query($sql);

// Obtener todas las filas
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultados as $fila) {
    echo $fila['id'] . ' - ' . $fila['name'] . '<br>';
}
?>