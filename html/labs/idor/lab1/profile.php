<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

require_once 'db.php';

$db = new Database();
$pdo = $db->getPdo();

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM users WHERE id = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$user = $stmt->fetch();

if (!$user) {
    echo "<p>Perfil no encontrado.</p>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Perfil de Usuario</title>
    <!-- Head -->
    <?php include 'template/head.php'; ?>
</head>
<body class="bg-light">

<!-- Barra de navegación -->
<?php include 'template/navbar.php'; ?>

<!-- Contenido de perfil -->
<div class="container>
    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white"
                                 style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                 <h5><?php echo htmlspecialchars($user['fullname']); ?></h5>
                                <img src="assets/images/<?php echo htmlspecialchars($user['profile_picture']); ?>"
                                     alt="Avatar" class="img-fluid my-5" style="width: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Información</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted"><?php echo htmlspecialchars($user['email']); ?></p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Teléfono</h6>
                                            <p class="text-muted">123 456 789</p>
                                        </div>
                                    </div>
                                    <h6>Biografía</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-12 mb-3">
                                            <p class="text-muted"><?php echo htmlspecialchars_decode($user['bio']); ?></p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Footer -->
<?php include 'template/footer.php'; ?>

</body>
</html>
