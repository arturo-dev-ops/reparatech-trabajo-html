<?php

require 'csrf_protection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!validateCsrfToken($_POST['csrf_token'])) {
        die('Token CSRF inválido.');
    }

    // Procesar los datos del formulario
    echo 'Formulario procesado correctamente.';
}

?>