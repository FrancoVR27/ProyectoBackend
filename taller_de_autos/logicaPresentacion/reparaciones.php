<?php
if (isset($_POST['vehiculo_id'])) {
    $vehiculo_id = $_POST['vehiculo_id'];
    require_once '../logicaNegocio/reparaciones-revisiones/reparacion.php';
    $reparacion = mostrarUltimaReparacion($vehiculo_id);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Última Reparación del Vehículo</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Última Reparación del Vehículo</h1>
        <a href="index.php" class="button-back-header">Volver al Menú</a>
    </header>

    <div class="form-container">
        <form method="POST" action="reparaciones.php">
            <label for="vehiculo_id">ID del Vehículo:</label>
            <input type="number" name="vehiculo_id" id="vehiculo_id" required>
            <input type="submit" value="Consultar Reparación">
        </form>
    </div>

    <?php if (isset($reparacion)): ?>
        <?php if ($reparacion): ?>
            <div class="table-container">
                <h3>Última Reparación:</h3>
                <table>
                    <tr>
                        <th>ID Vehículo</th>
                        <th>Fecha de Reparación</th>
                        <th>Descripción</th>
                    </tr>
                    <tr>
                        <td><?php echo $reparacion['vehiculo_id']; ?></td>
                        <td><?php echo $reparacion['fecha_revision']; ?></td>
                        <td><?php echo $reparacion['resultados']; ?></td>
                    </tr>
                </table>
            </div>
        <?php else: ?>
            <p>No se encontraron reparaciones para este vehículo.</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
