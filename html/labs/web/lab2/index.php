<?php
// Establecer la cookie access_granted si no existe
if (!isset($_COOKIE['sid'])) {
    setcookie('access_granted', 'false', time() + 3600, "/"); // Cookie expira en 1 hora
}

// Comprobar si la cookie ha sido modificada
$access_granted = isset($_COOKIE['sid']) && $_COOKIE['sid'] === 'true';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monstruo de las Galletas: ¡Acceso a las Galletas!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .cookie-bg {
            background-size: cover;
            background-position: center;
        }
        .card-header {
            background-color: #004aad;
        }
        .btn-primary {
            background-color: #0066cc;
        }
        .btn-primary:hover {
            background-color: #00509e;
        }
        .monster {
            max-width: 300px;
        }
    </style>
</head>
<body class="cookie-bg">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow">
                    <div class="card-header text-white text-center">
                        <h1>🍪 Monstruo de las Galletas 🍪</h1>
                    </div>
                    <div class="card-body text-center">
                        <img src="images/monster.webp" class="monster mb-4" alt="Monstruo de las Galletas">
                        <p><strong>¡Bienvenido!</strong> El Monstruo de las Galletas está buscando sus deliciosas galletas. Pero parece que algo le está impidiendo acceder a ellas.</p>
                        <p>¿Podrás ayudarlo a encontrar la manera de conseguir esas galletas que tanto le gustan?</p>

                        <?php if ($access_granted): ?>
                            <div class="alert alert-success mt-4">
                                <h4>🎉 ¡El Monstruo de las Galletas está feliz! 🎉</h4>
                                <p>¡Has conseguido acceso a las galletas secretas! 🥳🍪</p>
                                <img src="images/cookies.png" alt="Galletas" class="img-fluid monster">
                                <br>
                                <h4>🚩 ¡Felicidades! Has encontrado la bandera:</h4>
                                <code class="mt-4">flag{galletas_y_cookies}</code>

                            </div>
                        <?php else: ?>
                            <div class="alert alert-danger mt-4">
                                <h4>🚫 ¡Acceso denegado! 🚫</h4>
                                <p>Parece que todavía no hay acceso a las galletas...</p>
                                <img src="images/vacio.png" alt="Vacia" class="img-fluid" width="150">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2 text-center">
                <p>by FjRamírez</p>  
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
