<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $modelo = $_POST['modelo'];
    $color = $_POST['color'];
    $anio = $_POST['anio'];
    $fecha_fin_garantia = $_POST['fecha_fin_garantia'];
    $nivel_dano = $_POST['nivel_dano'];
    $fecha_almacenaje = $_POST['fecha_almacenaje'];
    $cliente_id = $_POST['cliente_id'];

    require_once '../logicaNegocio/vehiculo/vehiculosNegocio.php';

    $vehiculo_id = registrarNuevoVehiculo($modelo, $color, $anio, $fecha_fin_garantia, $nivel_dano, $fecha_almacenaje, $cliente_id);

    if ($vehiculo_id) {
        $mensaje = "Vehículo registrado exitosamente con ID: $vehiculo_id";
        $vehiculo_agregado = [
            'modelo' => $modelo,
            'color' => $color,
            'anio' => $anio,
            'fecha_fin_garantia' => $fecha_fin_garantia,
            'nivel_dano' => $nivel_dano,
            'fecha_almacenaje' => $fecha_almacenaje,
            'cliente_id' => $cliente_id
        ];
    } else {
        $mensaje = "Hubo un error al registrar el vehículo. Inténtelo de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Vehículo</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Registrar un Nuevo Vehículo</h1>
        <a href="index.php" class="button-back-header">Volver al Menú</a>
    </header>

    <div class="form-container">
        <form method="POST" action="agregarauto.php">
            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" id="modelo" required>

            <label for="color">Color:</label>
            <input type="text" name="color" id="color" required>

            <label for="anio">Año de Fabricación:</label>
            <input type="number" name="anio" id="anio" required>

            <label for="fecha_fin_garantia">Fecha Fin de Garantía:</label>
            <input type="date" name="fecha_fin_garantia" id="fecha_fin_garantia" required>

            <label for="nivel_dano">Nivel de Daño:</label>
            <select name="nivel_dano" id="nivel_dano" required>
                <option value="Levele">Levele</option>
                <option value="Moderado">Moderado</option>
                <option value="Severo">Severo</option>
            </select>

            <label for="fecha_almacenaje">Fecha de Almacenaje:</label>
            <input type="date" name="fecha_almacenaje" id="fecha_almacenaje" required>

            <label for="cliente_id">Cliente ID:</label>
            <input type="number" name="cliente_id" id="cliente_id" required>

            <input type="submit" value="Registrar Vehículo">
        </form>
    </div>

    <?php if (isset($mensaje)): ?>
        <div class="confirmation">
            <p><?php echo $mensaje; ?></p>
            <?php if (isset($vehiculo_agregado)): ?>
                <h3>Vehículo agregado:</h3>
                <ul>
                    <li><strong>Modelo:</strong> <?php echo $vehiculo_agregado['modelo']; ?></li>
                    <li><strong>Color:</strong> <?php echo $vehiculo_agregado['color']; ?></li>
                    <li><strong>Año:</strong> <?php echo $vehiculo_agregado['anio']; ?></li>
                    <li><strong>Fecha Fin de Garantía:</strong> <?php echo $vehiculo_agregado['fecha_fin_garantia']; ?></li>
                    <li><strong>Nivel de Daño:</strong> <?php echo $vehiculo_agregado['nivel_dano']; ?></li>
                    <li><strong>Fecha de Almacenaje:</strong> <?php echo $vehiculo_agregado['fecha_almacenaje']; ?></li>
                    <li><strong>Cliente ID:</strong> <?php echo $vehiculo_agregado['cliente_id']; ?></li>
                </ul>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</body>
</html>
