<?php
$flag = 'flag{injection_success_Xmas}';

// Conexión a la base de datos SQLite
try {
    $pdo = new PDO('sqlite:lab.db', null, null, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Modo de errores como excepciones
        PDO::SQLITE_ATTR_OPEN_FLAGS => PDO::SQLITE_OPEN_READONLY  // Base de datos en modo solo lectura
    ]);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Procesar la solicitud de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta vulnerable a inyección SQL
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $pdo->query($query);

    if ($result && $result->fetch()) {
        echo "<h1>¡Acceso concedido!</h1>";
        // Imagen de enhorabuena
        echo "<img src='images/enhorabuena.png' class='santa-image' alt='Papá Noel Aprobado' width='250'>";
        echo "<p>La bandera es: <code>$flag<code></p>";
    } else {
        echo "<h1>Acceso denegado</h1>";
        echo "<p>Usuario o contraseña incorrectos</p>";
    }
} else {
    echo "<h1>¡Acceso denegado!</h1>";
    echo "<p>Debes ser un administrador para acceder a esta página, ¡fuera de aquí 💩!</p>";
}
?>
