<?php
require_once 'C:/xampp/htdocs/taller_de_autos/logicaDatos/db_connection.php'; 
function obtenerUltimaReparacion($vehiculo_id) {
    global $pdo;
    $query = "SELECT r.vehiculo_id, r.fecha_revision, r.resultados
              FROM revisiones_tecnicas r
              WHERE r.vehiculo_id = ?
              ORDER BY r.fecha_revision DESC
              LIMIT 1";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$vehiculo_id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
