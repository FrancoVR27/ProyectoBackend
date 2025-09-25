<?php
require_once '../logicaNegocio/vehiculo/espera.php';
$vehiculos = mostrarVehiculosEnCola();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehículos en Cola de Reparación</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Vehículos en Cola de Reparación</h1>
        <a href="index.php" class="button-back-header">Volver al Menú</a>
    </header>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Año</th>
                    <th>Fecha de Almacenaje</th>
                    <th>Última Actualización</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($vehiculos as $vehiculo) {
                    echo "<tr>";
                    echo "<td>" . $vehiculo['id'] . "</td>";
                    echo "<td>" . $vehiculo['modelo'] . "</td>";
                    echo "<td>" . $vehiculo['color'] . "</td>";
                    echo "<td>" . $vehiculo['anio'] . "</td>";
                    echo "<td>" . $vehiculo['fecha_almacenaje'] . "</td>";
                    echo "<td>" . $vehiculo['ultima_actualizacion_reparacion'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
