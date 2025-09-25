<?php
require_once 'C:/xampp/htdocs/taller_de_autos/logicaDatos/db_connection.php'; 
function obtenerVehiculosAlmacenados($dias_almacenados) {
    global $pdo;
    $query = "SELECT id, modelo, color, fecha_almacenaje, DATEDIFF(CURDATE(), fecha_almacenaje) AS dias_almacenados
              FROM vehiculos
              WHERE DATEDIFF(CURDATE(), fecha_almacenaje) > ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$dias_almacenados]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
