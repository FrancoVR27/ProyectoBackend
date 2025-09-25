<?php
require_once '../logicaDatos/repositorios/revisionesBD.php';
function registrarRevisionTecnicaNegocio($vehiculo_id, $fecha_revision, $resultados) {
    return registrarRevisionTecnica($vehiculo_id, $fecha_revision, $resultados);
}
?>
