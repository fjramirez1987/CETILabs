<?php
require 'csrf.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $search = $_POST['search'] ?? '';
    $csrf_token = $_POST['csrf_token'] ?? '';

    // Si es una búsqueda:
    if ($search) {
        if (!verifyToken($csrf_token)) {
            die('Token inválido o expirado');
        } else {
            echo '<h2>Resultados para: ' . htmlspecialchars($search) . '</h2>';
            echo '<br>';
            echo 'No se encontraron resultados';
            echo '<br>';
            echo '<a href="javascript:history.back()">Volver atrás</a>';
        }
    } else {
        echo 'Se ha producido un error... ¿Estás intentando algo raro?';
    }
}
?>
