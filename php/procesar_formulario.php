<?php

require __DIR__ . '/csrf_protection.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../nav/presupuestos.php');
    exit;
}

$errors = [];
$nombre = trim($_POST['nombre'] ?? '');
$email = trim($_POST['email'] ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$dispositivo = trim($_POST['dispositivo'] ?? '');
$descripcion = trim($_POST['descripcion'] ?? '');
$acepto = isset($_POST['acepto']);

if (!validateCsrfToken($_POST['csrf_token'] ?? '')) {
    $errors[] = 'Token CSRF inválido.';
}

if ($nombre === '') {
    $errors[] = 'El nombre es obligatorio.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Introduce un correo electrónico válido.';
}

if (!preg_match('/^[0-9]{9}$/', $telefono)) {
    $errors[] = 'El teléfono debe tener 9 dígitos.';
}

if ($dispositivo === '') {
    $errors[] = 'Selecciona el tipo de dispositivo.';
}

if ($descripcion === '') {
    $errors[] = 'La descripción del servicio es obligatoria.';
}

if (!$acepto) {
    $errors[] = 'Debes aceptar la política de privacidad.';
}

function h($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resultado de solicitud - ReparaTech</title>
  <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <header>
    <img src="../img/logo.png" alt="Logotipo Empresa" class="logo">
    <nav>
      <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="../nav/productos.php">Productos</a></li>
        <li><a href="../nav/presupuestos.php">Presupuesto</a></li>
        <li><a href="../nav/contacto.php">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h2>Resultado de la solicitud</h2>

    <?php if (!empty($errors)): ?>
      <section class="mensaje-error">
        <h3>No se pudo procesar tu solicitud</h3>
        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?php echo h($error); ?></li>
          <?php endforeach; ?>
        </ul>
        <p><a href="../nav/presupuestos.php">Volver al formulario de presupuesto</a></p>
      </section>
    <?php else: ?>
      <section class="mensaje-exito">
        <h3>Solicitud recibida correctamente</h3>
        <p>Hemos recibido tu solicitud de presupuesto. Estos son los datos enviados:</p>
        <ul>
          <li><strong>Nombre:</strong> <?php echo h($nombre); ?></li>
          <li><strong>Correo:</strong> <?php echo h($email); ?></li>
          <li><strong>Teléfono:</strong> <?php echo h($telefono); ?></li>
          <li><strong>Dispositivo:</strong> <?php echo h($dispositivo); ?></li>
          <li><strong>Descripción:</strong> <?php echo h($descripcion); ?></li>
          <li><strong>Aceptó política de privacidad:</strong> <?php echo $acepto ? 'Sí' : 'No'; ?></li>
        </ul>
        <p>Nos pondremos en contacto contigo lo antes posible.</p>
      </section>
    <?php endif; ?>
  </main>

  <footer>
    <p>© 2025 ReparaTech - Todos los derechos reservados</p>
    <p>Dirección: Calle Vigo 17, Villacañas, España</p>
  </footer>
</body>
</html>
