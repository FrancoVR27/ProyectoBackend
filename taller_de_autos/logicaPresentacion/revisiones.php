<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vehiculo_id = $_POST['vehiculo_id'];
    $fecha_revision = $_POST['fecha_revision'];
    $resultados = $_POST['resultados'];
    require_once '../logicaNegocio/reparaciones-revisiones/revisiones.php';
    $revision_id = registrarRevisionTecnicaNegocio($vehiculo_id, $fecha_revision, $resultados);
    if ($revision_id) {
        $mensaje = "Revisión técnica registrada exitosamente con ID: $revision_id";
        $reparacion_agregada = [
            'vehiculo_id' => $vehiculo_id,
            'fecha_revision' => $fecha_revision,
            'resultados' => $resultados
        ];
    } else {
        $mensaje = "Hubo un error al registrar la revisión técnica. Inténtelo de nuevo.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Revisión Técnica</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Registrar Nueva Revisión Técnica</h1>
        <a href="index.php" class="button-back-header">Volver al Menú</a>
    </header>

    <div class="form-container">
        <form method="POST" action="revisiones.php">
            <label for="vehiculo_id">ID del Vehículo:</label>
            <input type="number" name="vehiculo_id" id="vehiculo_id" required>

            <label for="fecha_revision">Fecha de Revisión:</label>
            <input type="date" name="fecha_revision" id="fecha_revision" required>

            <label for="resultados">Descripción de la Revisión:</label>
            <textarea name="resultados" id="resultados" required></textarea>

            <input type="submit" value="Registrar Revisión Técnica">
        </form>
    </div>

    <?php if (isset($mensaje)): ?>
        <div class="confirmation">
            <p><?php echo $mensaje; ?></p>
            <?php if (isset($reparacion_agregada)): ?>
                <h3>Revisión Técnica Agregada:</h3>
                <ul>
                    <li><strong>ID Vehículo:</strong> <?php echo $reparacion_agregada['vehiculo_id']; ?></li>
                    <li><strong>Fecha de Revisión:</strong> <?php echo $reparacion_agregada['fecha_revision']; ?></li>
                    <li><strong>Descripción:</strong> <?php echo $reparacion_agregada['resultados']; ?></li>
                </ul>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</body>
</html>
