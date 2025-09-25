<?php
require_once 'C:/xampp/htdocs/taller_de_autos/logicaDatos/db_connection.php'; 
function obtenerVehiculosGarantiaExpirada() {
    global $pdo;
    $query = "SELECT id, modelo, color, fecha_fin_garantia
              FROM vehiculos
              WHERE fecha_fin_garantia < CURDATE()";
    $stmt = $pdo->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
