<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Has encontrado la bandera!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e0f7fa;
        }
        .flag-card {
            margin-top: 50px;
            background-color: #f9f9f9;
            border: 1px solid #00796b;
        }
        .flag-header {
            background-color: #00796b;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card flag-card">
                    <div class="card-header text-white text-center flag-header">
                        <h2>🎉 ¡Felicidades! 🎉</h2>
                    </div>
                    <div class="card-body text-center">
                        <p>Has encontrado la bandera:</p>
                        <h4><strong>flag{robots_are_hidden}</strong></h4>
                    </div>
                </div>
                <a href="../index.php" class="btn btn-primary mt-3">Volver a la Página Principal</a>
            </div>
        </div>
    </div>
</body>
</html>
