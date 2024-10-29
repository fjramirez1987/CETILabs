<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETILabs - Laboratorios de Ciberseguridad</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>
<body>
    <div class="scanline"></div>
    <!-- Cabecera -->
    <header class="text-white text-center py-1">
        <img src="assets/images/logo.png" alt="Laboratorios de Ciberseguridad" class="img-fluid" style="max-width: 250px;">
        <h1>Laboratorios de Ciberseguridad</h1>
        <p>Explora diferentes categorías y mejora tus habilidades</p>
    </header>

    <!-- Contenido principal -->
    <div class="container my-5">
        <div class="row">

            <!-- Categoría 1: Seguridad de Aplicaciones Web -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-category text-white">
                        <h4>Seguridad de Aplicaciones Web</h4>
                        <button class="btn btn-light btn-sm float-end" data-bs-toggle="collapse" data-bs-target="#webSecurityLabs">Ver laboratorios</button>
                    </div>
                    <div class="card-body">
                        <p>En esta categoría aprenderás sobre cómo asegurar aplicaciones web y detectar vulnerabilidades comunes en ellas.</p>
                        <div id="webSecurityLabs" class="collapse">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5>Laboratorio 1: bigRobots</h5>
                                    <p>Este laboratorio, Los participantes deben explorar el sitio web y descubrir cómo acceder a un archivo oculto que contiene la bandera del desafío.</p>
                                    <a href="labs/web/lab1" target="_blank" class="btn btn-success">Acceder al laboratorio</a>
                                </li>
                                <li class="list-group-item">
                                    <h5>Laboratorio 2: SID</h5>
                                    <p>Este laboratorio presenta un desafío en el que los participantes deben ayudar al Monstruo de las Galletas a conseguir acceso a sus galletas secretas.</p>
                                    <a href="labs/web/lab2" target="_blank" class="btn btn-success">Acceder al laboratorio</a>
                                </li>
                                <li class="list-group-item">
                                    <h5>Laboratorio 3: POST-me</h5>
                                    <p>El objetivo de este laboratorio es enseñar a los participantes cómo se implementan medidas de seguridad en una aplicación web.</p>
                                    <a href="labs/web/lab3" target="_blank" class="btn btn-success">Acceder al laboratorio</a>
                                </li>
                                <li class="list-group-item">
                                    <h5>Laboratorio 4: Inspector</h5>
                                    <p>Este laboratorio nos guiará por el análisis de una aplicación web usando solo las herramientas integradas del navegador, aprenderemos a verificar manualmente una aplicación web en busca de vulnerabilidades de seguridad</p>
                                    <a href="labs/web/lab4" target="_blank" class="btn btn-success">Acceder al laboratorio</a>
                                    <a href="assets/resources/web/lab4/lab4.pdf" target="_blank" class="btn btn-primary float-end">Guía</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Categoría 2: IDOR -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-category text-white">
                        <h4>IDOR (Insecure Direct Object Reference)</h4>
                        <button class="btn btn-light btn-sm float-end" data-bs-toggle="collapse" data-bs-target="#idorLabs">Ver laboratorios</button>
                    </div>
                    <div class="card-body">
                        <p>Aprende sobre cómo las referencias directas e inseguras pueden comprometer la seguridad de una aplicación y cómo detectarlas.</p>
                        <div id="idorLabs" class="collapse">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5>Laboratorio 1: simpleIDOR</h5>
                                    <p>En este laboratorio, los participantes deben encontrar un método para acceder a los perfiles de otro usuario mediante la manipulación de parámetros en la URL.</p>
                                    <a href="labs/idor/lab1" target="_blank" class="btn btn-success">Acceder al laboratorio</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categoría 3: SQL Injection -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-category text-white">
                        <h4>SQL Injection</h4>
                        <button class="btn btn-light btn-sm float-end" data-bs-toggle="collapse" data-bs-target="#sqlInjectionLabs">Ver laboratorios</button>
                    </div>
                    <div class="card-body">
                        <p>Explora cómo las inyecciones SQL pueden comprometer bases de datos y sistemas, y cómo prevenirlas.</p>
                        <div id="sqlInjectionLabs" class="collapse">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5>Laboratorio 1: Xmas</h5>
                                    <p>El objetivo del laboratorio es que los participantes encuentren y exploten una vulnerabilidad en la página para escribir una carta a Papá Noel.</p>
                                    <a href="labs/isql/lab1" target="_blank" class="btn btn-success">Acceder al laboratorio</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categoría 4: Cross-Site Scripting (XSS) -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-category text-white">
                        <h4>Cross-Site Scripting (XSS)</h4>
                    </div>
                    <div class="card-body">
                        <p>Aprende sobre vulnerabilidades de scripting entre sitios y cómo los atacantes pueden inyectar código malicioso.</p>
                        <p>Sin laboratorios disponibles por el momento.</p>
                    </div>
                </div>
            </div>

            <!-- Categoría 5: CSRF -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-category text-white">
                        <h4>Cross-Site Request Forgery (CSRF)</h4>
                    </div>
                    <div class="card-body">
                        <p>Descubre cómo los atacantes pueden forjar solicitudes maliciosas en nombre de un usuario legítimo.</p>
                        <p>Sin laboratorios disponibles por el momento.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Pie de página -->
    <footer class="text-white text-center py-4">
        <p>&copy; 2024 Laboratorios de Ciberseguridad. Todos los derechos reservados. IES Castelar - FjRamírez</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
