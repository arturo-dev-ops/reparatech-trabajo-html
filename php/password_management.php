<?php

// Ejemplo de manejo de contraseñas
function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

function verifyPassword($password, $hashedPassword) {
    return password_verify($password, $hashedPassword);
}

// Uso de ejemplo
$password = 'mi_contraseña_segura';
$hashedPassword = hashPassword($password);

if (verifyPassword('mi_contraseña_segura', $hashedPassword)) {
    echo 'Contraseña verificada correctamente.';
} else {
    echo 'La contraseña no coincide.';
}

?>