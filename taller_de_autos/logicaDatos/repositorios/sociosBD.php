<?php
require_once 'C:/xampp/htdocs/taller_de_autos/logicaDatos/db_connection.php'; 
function obtenerSocios() {
    global $pdo;
    $query = "SELECT * FROM socios";
    $stmt = $pdo->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
