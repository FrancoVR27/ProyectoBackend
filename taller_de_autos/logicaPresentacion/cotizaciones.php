<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vehiculo_id = $_POST['vehiculo_id'];

    require_once '../logicaNegocio/cotizaciones/cotizardaños.php';

    $cotizacion = calcularCotizacion($vehiculo_id);

    if ($cotizacion > 0) {
        $mensaje = "El coste estimado de la reparación para el vehículo con ID $vehiculo_id es de Bs $cotizacion";
        $vehiculo = obtenerNivelDeDano($vehiculo_id);
    } else {
        $mensaje = "No se encontró el vehículo o el vehículo no tiene un nivel de daño válido.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotización de Reparación</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Cotización de Reparación</h1>
        <a href="index.php" class="button-back-header">Volver al Menú</a>
    </header>

    <div class="form-container">
        <form method="POST" action="cotizaciones.php">
            <label for="vehiculo_id">ID del Vehículo:</label>
            <input type="number" name="vehiculo_id" id="vehiculo_id" required>

            <input type="submit" value="Calcular Cotización">
        </form>
    </div>

    <?php if (isset($mensaje)): ?>
        <div class="confirmation">
            <p><?php echo $mensaje; ?></p>
            <?php if (isset($vehiculo)): ?>
                <h3>Datos del Vehículo:</h3>
                <ul>
                    <li><strong>ID Vehículo:</strong> <?php echo $vehiculo_id; ?></li>
                    <li><strong>Nivel de Daño:</strong> <?php echo $vehiculo['nivel_dano']; ?></li>
                </ul>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</body>
</html>
