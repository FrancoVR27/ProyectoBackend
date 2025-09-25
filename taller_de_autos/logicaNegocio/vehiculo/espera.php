<?php
require_once '../logicaDatos/repositorios/esperaBD.php';
function mostrarVehiculosEnCola() {
    $vehiculos = obtenerVehiculosEnCola();
    return $vehiculos;
}
?>
