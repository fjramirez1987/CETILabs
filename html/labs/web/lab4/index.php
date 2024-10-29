<?php

header('X-Custom-Header: flag{las_cabeceras_tambien_pueden_ser_interesantes}');

// Establecer una cookie
$cookie_name = "session_id";
$cookie_value = "flag{las_cookies_son_deliciosas}";
$cookie_expiration = time() + (86400 * 30); // La cookie expira en 30 días
setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");

?>


<!--  Esta página es temporal mientras trabajamos en la nueva página de inicio @ /new-home-beta.php -->

    <?php include 'theme/head.php'; ?>

    <?php include 'theme/nav.php'; ?>

    <!-- Sección de contenido adicional -->
    <div class="container content-section">
        <div class="row px-2">
            <div class="col">
                <h2 class="coltext-center">Últimas Noticias</h2>
                <p>¡Bienvenido a Noticias Deportivas! Tu fuente de información deportiva más confiable y actualizada. En nuestro sitio web encontrarás las noticias deportivas más recientes y relevantes de tus equipos y deportes favoritos.</p>
                <p>El equipo de Noticias Deportivas está comprometido en ofrecerte la información más actualizada y relevante del mundo del deporte. Cubrimos todo tipo de eventos deportivos, desde ligas locales hasta competiciones internacionales.</p>
                <p>¡No te pierdas nuestras últimas actualizaciones y análisis sobre los partidos más emocionantes de fútbol, baloncesto, tenis, y mucho más!</p>
            </div>
        </div>
    </div>


    <!-- Sección del equipo de noticias -->
    <div class="container team-section">
        <h2 class="text-center">Conoce a nuestro equipo de noticias deportivas</h2>
        <div class="row mt-4">
            <div class="col-md-4 team-member">
                <img src="assets/images/juan.jpg" alt="Juan Pérez">
                <h5>Juan Pérez</h5>
                <p>Especialista en fútbol</p>
            </div>
            <div class="col-md-4 team-member">
                <img src="assets/images/maria.jpg" alt="María Rodríguez">
                <h5>María Rodríguez</h5>
                <p>Especialista en baloncesto</p>
            </div>
            <div class="col-md-4 team-member">
                <img src="assets/images/carlos.jpg" alt="Carlos López">
                <h5>Carlos López</h5>
                <p>Especialista en tenis</p>
            </div>
        </div>
    </div>

    <?php include 'theme/footer.php'; ?>

</body>
</html>
<!-- Página generada en 0.0123 segundos por el Framework WEB ND v1.2 https://github.com/fjramirez1987/Framework-WEB-ND -->