<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escribir Carta a Papá Noel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
        }
        .card {
            margin-top: 20px;
            background-color: #fffaf0;
            border: 1px solid #d2691e;
        }
        .card-header {
            background-color: #d2691e;
            color: white;
        }
        .btn-submit {
            background-color: #d2691e;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-white text-center">
                        <h2>🎅 Escribir Carta a Papá Noel 🎄</h2>
                    </div>
                    <div class="card-body">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $name = htmlspecialchars($_POST['name']);
                            $letter = htmlspecialchars($_POST['letter']);
                            // Aquí no se almacena en la base de datos, solo se simula el envío
                            echo "<div class='alert alert-success'>Gracias, <strong>$name</strong>. Tu carta ha sido enviada a Papá Noel.</div>";
                        } else {
                            // NO se ha enviado el formulario, mostrar formulario                        
                            echo "<div class='alert alert-danger'>Algo no está funcionado bien...</div>";
                        }
                        ?>
                    </div>
                </div>
                <a href="index.php" class="btn btn-primary mt-3">Volver a la Página Principal</a>
            </div>
        </div>
    </div>
</body>
</html>
