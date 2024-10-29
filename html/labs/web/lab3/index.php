<?php
require 'csrf.php';
$token = generateToken();
$password_fixed = "123456";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'] ?? '';
    $csrf_token = $_POST['csrf_token'] ?? '';

    if ($password === $password_fixed) {
        if (!verifyToken($csrf_token)) {
            die('Token inválido o expirado');
        } else {
            echo '<h1>¡Laboratorio completado!</h1>';
            echo '<img src="images/enhorabuena.png" alt="¡Enhorabuena!">';
            echo '<h2><code><strong>flag{csrf_t0k3n_v4l1d4t10n}</strong></code></h2>';
            die();
        }
    } else {
        die('Se ha producido un error... ¿Estás intentando algo raro?');
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Peluches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff; /* Fondo suave para la página */
        }
        .navbar {
            background-color: #ff6f61; /* Barra de navegación color salmón */
        }
        .navbar-brand {
            color: white !important;
            font-weight: bold;
        }
        .nav-link {
            color: white !important;
        }
        .nav-link:hover {
            background-color: #ff8f81; /* Hover en los enlaces */
            color: white !important;
        }
        .card {
            background-color: #fff3e6; /* Fondo claro en las tarjetas */
            border: 2px solid #ffd700; /* Bordes dorados */
        }
        .card-title {
            color: #ff6f61; /* Color de los títulos de las tarjetas */
            font-weight: bold;
        }
        .btn-primary {
            background-color: #ff6f61;
            border-color: #ff6f61;
        }
        .btn-primary:hover {
            background-color: #ff8f81;
            border-color: #ff8f81;
        }
        footer {
            background-color: #ff6f61;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        h1, h2 {
            color: #ff6f61;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Tienda de Peluches</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Peluches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h1>Bienvenido a nuestra tienda de peluches</h1>
                <p>Descubre nuestra selección exclusiva de peluches de alta calidad, ideales para todas las edades. ¡Perfectos para regalos o coleccionistas!</p>
                <p><strong>Para resolver este laboratorio, debes enviar una petición POST con el password 123456</strong></p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="images/oso.png" class="card-img-top" alt="Peluches">
                            <div class="card-body">
                                <h5 class="card-title">Peluche Oso</h5>
                                <p class="card-text">Un adorable oso de peluche de alta calidad, suave y tierno.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="images/gato.png" class="card-img-top" alt="Peluches">
                            <div class="card-body">
                                <h5 class="card-title">Peluche Gato</h5>
                                <p class="card-text">Un lindo gato de peluche, suave, esponjoso y siempre listo para abrazar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="images/conejo.png" class="card-img-top" alt="Peluches">
                            <div class="card-body">
                                <h5 class="card-title">Peluche Conejo</h5>
                                <p class="card-text">Este conejo de peluche es perfecto para abrazar y dormir.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h2>Busca tu peluche</h2>
                <form action="submit.php" method="POST">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($token); ?>">
                    <div class="mb-3">
                        <label for="search" class="form-label">Buscar peluche:</label>
                        <input type="text" class="form-control" id="search" name="search" placeholder="Escribe el nombre del peluche" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="mt-4">
        <p>&copy; 2024 Tienda de Peluches. Todos los derechos reservados. FjRamírez</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
