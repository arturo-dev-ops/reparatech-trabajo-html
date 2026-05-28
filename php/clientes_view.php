<?php
require __DIR__ . '/business_logic.php';
$clientes = obtenerClientes();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <ul>
        <?php foreach ($clientes as $cliente): ?>
            <li><?php echo htmlspecialchars($cliente['nombre']); ?> (<?php echo htmlspecialchars($cliente['email']); ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>