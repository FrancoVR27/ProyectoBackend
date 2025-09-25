<?php
require_once '../logicaDatos/repositorios/sociosBD.php';
function mostrarSocios() {
    $socios = obtenerSocios();
    return $socios;
}
?>
