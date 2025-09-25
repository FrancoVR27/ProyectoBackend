<?php
require_once '../logicaDatos/repositorios/dañoBD.php';

function calcularCotizacion($vehiculo_id) {
    $vehiculo = obtenerNivelDeDano($vehiculo_id);

    if ($vehiculo) {
        switch ($vehiculo['nivel_dano']) {
            case 'Leve':
                return 200;
            case 'Moderado':
                return 300;
            case 'Severo':
                return 500;
            default:
                return 0;
        }
    } else {
        return 0;
    }
}
?>
