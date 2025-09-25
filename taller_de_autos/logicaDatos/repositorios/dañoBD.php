<?php
require_once 'C:/xampp/htdocs/taller_de_autos/logicaDatos/db_connection.php'; 
function obtenerNivelDeDano($vehiculo_id) {
    global $pdo;

    $query = "SELECT nivel_dano FROM vehiculos WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$vehiculo_id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
