<?php
// Comprobar si el parámetro "write" está presente en la URL
if (isset($_GET['write']) && $_GET['write'] === 'true') {
    // Mostrar formulario de escribir carta
    echo '
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Escribe tu Carta a Papá Noel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header text-white bg-success">
                            <h1>🎄 Escribe tu Carta a Papá Noel 🎅</h1>
                        </div>
                        <div class="card-body">
                            <form action="submit_letter.php" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Tu Nombre:</label>
                                    <input type="text" class="form-control" id="name" name="name" required/>
                                </div>
                                <div class="mb-3">
                                    <label for="letter" class="form-label">Tu Carta:</label>
                                    <textarea class="form-control" id="letter" name="letter" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar Carta</button>
                            </form>
                        </div>
                    </div>
                    <a href="index.php" class="btn btn-primary mt-3">Volver a la Página Principal</a>
                </div>
            </div>
        </div>
    </body>
    </html>
    ';
} else {
    // Mostrar formulario oculto de login si el parámetro "admin" está presente
    echo '
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acceso de Administrador</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header text-white bg-danger">
                            <h1>🔒 Acceso de Administrador</h1>
                        </div>
                        <div class="card-body">
                            <form action="admin_login.php" method="POST">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Usuario:</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña:</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-danger">Iniciar Sesión</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    ';
}
?>
