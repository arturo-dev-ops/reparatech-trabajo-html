<?php

// Lógica de negocio
function obtenerClientes() {
    try {
        $db = (new DatabaseConnection())->connect();
        $query = $db->query("SELECT * FROM clientes");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        error_log("Error al obtener clientes: " . $e->getMessage());
        return [];
    }
}

?>