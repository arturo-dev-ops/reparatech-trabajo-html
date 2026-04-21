<?php

// Protección contra CSRF
session_start();

function generateCsrfToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validateCsrfToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Generar token para un formulario
$csrfToken = generateCsrfToken();

?>

<!-- Ejemplo de formulario protegido contra CSRF -->
<form method="POST" action="procesar_formulario.php">
    <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">
    <input type="text" name="campo" placeholder="Escribe algo">
    <button type="submit">Enviar</button>
</form>