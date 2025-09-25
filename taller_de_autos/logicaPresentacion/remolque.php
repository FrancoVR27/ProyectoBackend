<?php
if (isset($_POST['vehiculo_id'])) {
    $vehiculo_id = $_POST['vehiculo_id'];
    require_once '../logicaNegocio/cotizaciones/remolque.php';
    $remolques = mostrarRemolquePorVehiculo($vehiculo_id);
} else {
    $remolques = [];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remolque del Vehículo</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Remolque del Vehículo</h1>
        <a href="index.php" class="button-back-header">Volver al Menú</a>
    </header>
    <div class="form-container">
        <form method="POST" action="remolque.php">
            <label for="vehiculo_id">ID del Vehículo Remolcado:</label>
            <input type="number" name="vehiculo_id" id="vehiculo_id" required>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <?php if (!empty($remolques)): ?>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID Remolque</th>
                        <th>ID Vehículo</th>
                        <th>Distancia Recorrida (km)</th>
                        <th>Coste del Viaje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($remolques as $remolque) {
                        echo "<tr>";
                        echo "<td>" . $remolque['id'] . "</td>";
                        echo "<td>" . $remolque['vehiculo_id'] . "</td>";
                        echo "<td>" . $remolque['distancia_km'] . " km</td>";
                        echo "<td>" . $remolque['coste_viaje'] . ".bs </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <p>No se encontraron registros para este vehículo.</p>
    <?php endif; ?>

</body>
</html>
