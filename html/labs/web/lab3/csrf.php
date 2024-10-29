<?php
require 'db.php';

function generateToken() {
    $token = bin2hex(random_bytes(32));
    $db = getDBConnection();
    $stmt = $db->prepare('INSERT INTO csrf_tokens (token) VALUES (:token)');
    $stmt->bindParam(':token', $token);
    $stmt->execute();
    return $token;
}

function verifyToken($token) {
    $db = getDBConnection();
    $stmt = $db->prepare('SELECT * FROM csrf_tokens WHERE token = :token AND created_at >= datetime("now", "-1 hour")');
    $stmt->bindParam(':token', $token);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
}
?>
