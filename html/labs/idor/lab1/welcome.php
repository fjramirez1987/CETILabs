<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Bienvenido</title>
    <!-- Head -->
    <?php include 'template/head.php'; ?>
</head>
<body class="bg-light">

<!-- Barra de navegación -->
<?php include 'template/navbar.php'; ?>

<!-- Contenido de bienvenida -->
<div class="container my-5">
    <div class="text-center">
        <h1 class="display-4">¡Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p class="lead">Nos alegra verte nuevamente. Explora el contenido y personaliza tu experiencia.</p>
        <a href="profile.php?id=<?php echo $_SESSION['user_id']; ?>" class="btn btn-primary btn-lg mt-3">Ver tu Perfil</a>
    </div>

    <!-- Secciones adicionales -->
    <div class="row mt-5">
        <!-- Tarjeta 1 -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Novedades</h5>
                    <img src="assets/images/news.png" class="img-fluid" alt="Novedades" style="width: 150px;">
                    <p class="card-text">Mantente al tanto de las últimas noticias y actualizaciones en nuestro sistema.</p>
                    <a href="#" class="btn btn-outline-primary">Leer más</a>
                </div>
            </div>
        </div>
        <!-- Tarjeta 2 -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Recursos</h5>
                    <img src="assets/images/resources.png" class="img-fluid" alt="Recursos" style="width: 150px;">
                    <p class="card-text">Explora recursos útiles y tutoriales para aprovechar al máximo nuestra plataforma.</p>
                    <a href="#" class="btn btn-outline-primary">Ver recursos</a>
                </div>
            </div>
        </div>
        <!-- Tarjeta 3 -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Soporte</h5>
                    <img src="assets/images/support.png" class="img-fluid" alt="Soporte" style="width: 150px;">
                    <p class="card-text">¿Tienes preguntas? Nuestro equipo de soporte está aquí para ayudarte.</p>
                    <a href="#" class="btn btn-outline-primary">Contactar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include 'template/footer.php'; ?>

</body>
</html>
