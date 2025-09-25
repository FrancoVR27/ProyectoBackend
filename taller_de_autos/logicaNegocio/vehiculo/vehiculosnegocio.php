<?php
require_once '../logicaDatos/repositorios/vehiculosBD.php';
function registrarNuevoVehiculoNegocio($modelo, $color, $anio, $fecha_fin_garantia, $nivel_dano, $fecha_almacenaje, $cliente_id) {
    return registrarNuevoVehiculo($modelo, $color, $anio, $fecha_fin_garantia, $nivel_dano, $fecha_almacenaje, $cliente_id);
}
?>
