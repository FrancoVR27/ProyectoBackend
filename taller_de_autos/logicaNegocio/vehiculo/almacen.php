<?php
require_once '../logicaDatos/repositorios/almacenBD.php';
function mostrarVehiculosAlmacenados($dias_almacenados) {
    $vehiculos = obtenerVehiculosAlmacenados($dias_almacenados);
    return $vehiculos;
}
?>
