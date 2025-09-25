<?php
require_once 'C:/xampp/htdocs/taller_de_autos/logicaDatos/db_connection.php'; 
function registrarRevisionTecnica($vehiculo_id, $fecha_revision, $resultados) {
    global $pdo;
    $query = "INSERT INTO revisiones_tecnicas (vehiculo_id, fecha_revision, resultados)
              VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$vehiculo_id, $fecha_revision, $resultados]);
    return $pdo->lastInsertId();
}
?>
