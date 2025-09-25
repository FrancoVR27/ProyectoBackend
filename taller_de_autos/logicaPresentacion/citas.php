<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vehiculo_id = $_POST['vehiculo_id'];
    $fecha_cita = $_POST['fecha_cita'];
    $tipo_servicio = $_POST['tipo_servicio'];
    $socio_id = $_POST['socio_id'];
    $estado = $_POST['estado'];

    require_once '../logicaNegocio/citas/citas.php';

    $cita_id = registrarCitaNegocio($vehiculo_id, $fecha_cita, $tipo_servicio, $socio_id, $estado);

    if ($cita_id) {
        $mensaje = "Cita registrada exitosamente con ID: $cita_id";
        $cita_agregada = [
            'vehiculo_id' => $vehiculo_id,
            'fecha_cita' => $fecha_cita,
            'tipo_servicio' => $tipo_servicio,
            'socio_id' => $socio_id,
            'estado' => $estado
        ];
    } else {
        $mensaje = "Hubo un error al registrar la cita. Inténtelo de nuevo.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cita</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Registrar Nueva Cita</h1>
        <a href="index.php" class="button-back-header">Volver al Menú</a>
    </header>
    <div class="form-container">
        <form method="POST" action="citas.php">
            <label for="vehiculo_id">ID del Vehículo:</label>
            <input type="number" name="vehiculo_id" id="vehiculo_id" required>
            <label for="fecha_cita">Fecha de la Cita:</label>
            <input type="datetime-local" name="fecha_cita" id="fecha_cita" required>
            <label for="tipo_servicio">Tipo de Servicio:</label>
            <select name="tipo_servicio" id="tipo_servicio" required>
                <option value="Mantenimiento">Mantenimiento</option>
                <option value="Reparación">Reparación</option>
            </select>
            <label for="socio_id">ID del Socio:</label>
            <input type="number" name="socio_id" id="socio_id" required>
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" required>
                <option value="Pendiente">Pendiente</option>
                <option value="Confirmada">Confirmada</option>
                <option value="Cancelada">Cancelada</option>
            </select>
            <input type="submit" value="Registrar Cita">
        </form>
    </div>
    <?php if (isset($mensaje)): ?>
        <div class="confirmation">
            <p><?php echo $mensaje; ?></p>
            <?php if (isset($cita_agregada)): ?>
                <h3>Cita Agregada:</h3>
                <ul>
                    <li><strong>ID Vehículo:</strong> <?php echo $cita_agregada['vehiculo_id']; ?></li>
                    <li><strong>Fecha de la Cita:</strong> <?php echo $cita_agregada['fecha_cita']; ?></li>
                    <li><strong>Tipo de Servicio:</strong> <?php echo $cita_agregada['tipo_servicio']; ?></li>
                    <li><strong>ID Socio:</strong> <?php echo $cita_agregada['socio_id']; ?></li>
                    <li><strong>Estado:</strong> <?php echo $cita_agregada['estado']; ?></li>
                </ul>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</body>
</html>
