<?php
require_once 'C:/xampp/htdocs/taller_de_autos/logicaDatos/db_connection.php'; 
function registrarNuevoVehiculo($modelo, $color, $anio, $fecha_fin_garantia, $nivel_dano, $fecha_almacenaje, $cliente_id) {
    global $pdo;
    $query = "INSERT INTO vehiculos (modelo, color, anio, fecha_fin_garantia, nivel_dano, fecha_almacenaje, estado, cliente_id)
              VALUES (?, ?, ?, ?, ?, ?, 'En cola',?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$modelo, $color, $anio, $fecha_fin_garantia, $nivel_dano, $fecha_almacenaje, $cliente_id]);
    return $pdo->lastInsertId();
}
?>


