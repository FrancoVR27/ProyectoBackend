<?php
require_once '../logicaNegocio/vehiculo/garantia.php';
$vehiculos = mostrarVehiculosGarantiaExpirada();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehículos con Garantía Expirada</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Vehículos con Garantía Expirada</h1>
        <a href="index.php" class="button-back-header">Volver al Menú</a>
    </header>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID Vehículo</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Fecha Fin de Garantía</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($vehiculos) {
                    foreach ($vehiculos as $vehiculo) {
                        echo "<tr>";
                        echo "<td>" . $vehiculo['id'] . "</td>";
                        echo "<td>" . $vehiculo['modelo'] . "</td>";
                        echo "<td>" . $vehiculo['color'] . "</td>";
                        echo "<td>" . $vehiculo['fecha_fin_garantia'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay vehículos con garantía expirada.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
