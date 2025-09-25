<?php
require_once '../logicaDatos/repositorios/citasBD.php';
function registrarCitaNegocio($vehiculo_id, $fecha_cita, $tipo_servicio, $socio_id, $estado) {
    return registrarCita($vehiculo_id, $fecha_cita, $tipo_servicio, $socio_id, $estado);
}
?>
