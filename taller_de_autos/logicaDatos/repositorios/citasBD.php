<?php
//require_once '../db_connection.php';
require_once 'C:/xampp/htdocs/taller_de_autos/logicaDatos/db_connection.php'; 
function registrarCita($vehiculo_id, $fecha_cita, $tipo_servicio, $socio_id, $estado) {
    global $pdo;
    $query = "INSERT INTO citas (vehiculo_id, fecha_cita, tipo_servicio, socio_id, estado)
              VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$vehiculo_id, $fecha_cita, $tipo_servicio, $socio_id, $estado]);
    return $pdo->lastInsertId();
}
?>
