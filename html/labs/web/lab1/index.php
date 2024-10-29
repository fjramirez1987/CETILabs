<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Robots</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e0f7fa;
        }
        .navbar {
            background-color: #00796b;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .sidebar {
            height: 100vh;
            background-color: #004d40;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #00695c;
        }
        .footer {
            background-color: #00796b;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .card {
            margin-top: 20px;
            background-color: #f9f9f9;
        }
        .card-header {
            background-color: #00796b;
            color: white;
        }
        .robot-image {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <!-- Cabecera -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tienda de Robots</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Menú lateral -->
            <div class="col-md-2 sidebar">
                <a href="#">Inicio</a>
                <a href="#">Productos</a>
                <a href="#">Ofertas</a>
                <a href="#">Contacto</a>
            </div>

            <!-- Contenido principal -->
            <div class="col-md-10">
                <div class="mt-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header text-white text-center">
                                    <h2>🤖 Bienvenido a la Tienda de Robots 🤖</h2>
                                </div>
                                <div class="card-body">
                                    <p>Encuentra los mejores robots para todas tus necesidades. ¡Ofertas exclusivas solo por tiempo limitado!</p>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="images/BigRobots.png" class="robot-image" alt="BigRobots">
                                            <h5 class="text-center">Robot Asistente</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="images/roB.png" class="robot-image" alt="roB">
                                            <h5 class="text-center">Robot Limpiador</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="images/robot2W.png" class="robot-image" alt="robot2W">
                                            <h5 class="text-center">Robot Vigilante</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="images/robotArm.png" class="robot-image" alt="robotArm">
                                            <h5 class="text-center">Robot Brazo</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="images/robotDog.png" class="robot-image" alt="robotDog">
                                            <h5 class="text-center">Robot Perro</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="images/robotFlying.png" class="robot-image" alt="robotFlying">
                                            <h5 class="text-center">Robot Volador</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="index.php" class="btn btn-primary mt-3">Volver a la Página Principal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Tienda de Robots. Todos los derechos reservados. FjRamírez</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
