<?php
require_once 'C:/xampp/htdocs/taller_de_autos/logicaDatos/db_connection.php'; 
function obtenerRemolquePorVehiculo($vehiculo_id) {
    global $pdo;
    $query = "SELECT r.id, r.vehiculo_id, r.distancia_km, (r.distancia_km * 800) AS coste_viaje
              FROM remolque r
              WHERE r.vehiculo_id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$vehiculo_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
