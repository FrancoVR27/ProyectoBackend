<?php
require_once '../logicaDatos/repositorios/remolqueBD.php';
function mostrarRemolquePorVehiculo($vehiculo_id) {
    $remolque = obtenerRemolquePorVehiculo($vehiculo_id);
    return $remolque;
}
?>
