<?php
if (isset($_POST['dias_almacenados'])) {
    $dias_almacenados = $_POST['dias_almacenados'];
    require_once '../logicaNegocio/vehiculo/almacen.php';
    $vehiculos = mostrarVehiculosAlmacenados($dias_almacenados);
} else {
    $vehiculos = []; 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehículos Almacenados</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Vehículos Almacenados</h1>
        <a href="index.php" class="button-back-header">Volver al Menú</a>
    </header>
    <div class="form-container">
        <form method="POST" action="almacenamiento.php">
            <label for="dias_almacenados">Número de Días Almacenados:</label>
            <input type="number" name="dias_almacenados" id="dias_almacenados" required>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <?php if (!empty($vehiculos)): ?>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID Vehículo</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>Fecha de Almacenaje</th>
                        <th>Días Almacenados</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($vehiculos as $vehiculo) {
                        echo "<tr>";
                        echo "<td>" . $vehiculo['id'] . "</td>";
                        echo "<td>" . $vehiculo['modelo'] . "</td>";
                        echo "<td>" . $vehiculo['color'] . "</td>";
                        echo "<td>" . $vehiculo['fecha_almacenaje'] . "</td>";
                        echo "<td>" . $vehiculo['dias_almacenados'] . " días</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <p>No se encontraron vehículos almacenados por ese número de días.</p>
    <?php endif; ?>

</body>
</html>
