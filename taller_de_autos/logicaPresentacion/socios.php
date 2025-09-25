<?php
require_once '../logicaNegocio/socios/sociosNegocio.php';
$socios = mostrarSocios();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socios Técnicos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Socios Técnicos Autorizados</h1>
        <a href="index.php" class="button-back-header">Volver al Menú</a>
    </header>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($socios as $socio) {
                    echo "<tr>";
                    echo "<td>" . $socio['id'] . "</td>";
                    echo "<td>" . $socio['nombre'] . "</td>";
                    echo "<td>" . $socio['direccion'] . "</td>";
                    echo "<td>" . $socio['telefono'] . "</td>";
                    echo "<td>" . $socio['email'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
