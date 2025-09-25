<?php
require_once '../logicaDatos/repositorios/reparacionBD.php';
function mostrarUltimaReparacion($vehiculo_id) {
    return obtenerUltimaReparacion($vehiculo_id);
}
?>
