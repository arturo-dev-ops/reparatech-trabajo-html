<?php require __DIR__ . '/../php/csrf_protection.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1" >
  <title>Presupuesto - Empresa Ficticia</title>
  <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon" >
  <link rel="stylesheet" href="../css/styles.css" >
</head>
<body>
  <header>
    <img src="../img/logo.png" alt="Logotipo Empresa" class="logo" >
    <nav>
      <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="presupuestos.php" class="activo">Presupuesto</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h2>Solicita tu presupuesto personalizado</h2>
<form action="../php/procesar_formulario.php" method="post">
  <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken, ENT_QUOTES, 'UTF-8'); ?>">

  <label for="nombre">Nombre completo:</label>
  <input type="text" id="nombre" name="nombre" required >

  <label for="email">Correo electrónico:</label>
  <input type="email" id="email" name="email" required >

  <label for="telefono">Teléfono de contacto:</label>
  <input type="tel" id="telefono" name="telefono" required pattern="[0-9]{9}" title="Introduce un teléfono válido de 9 dígitos" >

  <label for="dispositivo">Tipo de dispositivo:</label>
  <select id="dispositivo" name="dispositivo" required>
    <option value="">Seleccione...</option>
    <option value="portatil">Portátil</option>
    <option value="sobremesa">Ordenador de sobremesa</option>
    <option value="movil">Móvil / Smartphone</option>
    <option value="tablet">Tablet</option>
    <option value="otros">Otros dispositivos</option>
  </select>

  <label for="descripcion">Descripción del problema o servicio solicitado:</label>
  <textarea id="descripcion" name="descripcion" rows="5" required></textarea>

  <label>
    <input type="checkbox" name="acepto" required >
    Acepto la política de privacidad
  </label>

  <button type="submit">Solicitar reparación del dispositivo</button>
</form>

  </main>

  <footer>
    <p>© 2026 ReparaTech - Todos los derechos reservados</p>
    <p>Dirección: Calle Vigo 17, Villacañas, España</p>
  </footer>
</body>
</html>
