<?php
session_start();
require_once 'db.php';

$db = new Database();
$pdo = $db->getPdo();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
    $stmt->bindParam(':username', $username); // Evitamos iSQL Injection
    $stmt->bindParam(':password', $password); // Evitamos iSQL Injection
    $stmt->execute();

    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: welcome.php');
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login</title>
    <!-- Head -->
    <?php include 'template/head.php'; ?>
</head>
<body class="bg-light d-flex align-items-center flex-column" style="height: 100vh;">
<div class="container d-flex justify-content-center py-4">
    <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Iniciar Sesión</h2>
            <?php if (isset($error)) echo "<p class='text-danger text-center'>$error</p>"; ?>
            <form method="POST" action="index.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Usuario</label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
            </form>
        </div>
        <div class="text-center mt-3">
            <a href="#" class="text-muted">¿Olvidaste tu contraseña?</a>
            <div class="alert alert-warning mt-3" role="alert"> Usuario: mario Contraseña: 123456</div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include 'template/footer.php'; ?>

</body>
</html>
