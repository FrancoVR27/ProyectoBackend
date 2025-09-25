<?php
require_once '../logicaDatos/repositorios/garantiaBD.php';
function mostrarVehiculosGarantiaExpirada() {
    $vehiculos = obtenerVehiculosGarantiaExpirada();
    return $vehiculos;
}
?>
