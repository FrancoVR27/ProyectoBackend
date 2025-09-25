<?php
require_once 'C:/xampp/htdocs/taller_de_autos/logicaDatos/db_connection.php'; 
function obtenerVehiculosEnCola() {
    global $pdo;
    $query = "SELECT * FROM vehiculos WHERE estado = 'En cola'";
    $stmt = $pdo->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
