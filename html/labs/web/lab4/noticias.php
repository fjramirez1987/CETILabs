    <?php include 'theme/head.php'; ?>

    <?php include 'theme/nav.php'; ?>

    <!-- Sección de noticias -->
    <div class="container news-section">
        <h2 class="text-center mb-4">Últimas Noticias</h2>
        <div class="row">
            <!-- Noticia 1 -->
            <div class="col-md-4 news-item">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Victoria épica en la final de fútbol</h3>
                        <img src="assets/images/soccer-488700_640.jpg" alt="Victoria épica en la final de fútbol" class="img-fluid mb-3">
                        <p>El equipo local logró una victoria espectacular en los minutos finales, llevándose el campeonato.</p>
                    </div>
                </div>
            </div>
            <!-- Noticia 2 -->
            <div class="col-md-4 news-item">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Récord mundial de natación</h3>
                        <img src="assets/images/swimming-924895_640.jpg" alt="Récord mundial de natación" class="img-fluid mb-3">
                        <p>Un nadador rompe el récord mundial en una competencia internacional, sorprendiendo a todos.</p>
                        <p>flag{mala_forma_de_ocultar_contenido}
                    </div>
                </div>
            </div>
            <!-- Noticia 3 -->
            <div class="col-md-4 news-item">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Nueva temporada de baloncesto</h3>
                        <img src="assets/images/sports-7039904_640.jpg" alt="Nueva temporada de baloncesto" class="img-fluid mb-3">
                        <p>La liga de baloncesto se prepara para una temporada emocionante con nuevos fichajes y cambios en los equipos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newsModalLabel">Bienvenido a Noticias Deportivas</h5>
                </div>
                <div class="modal-body">
                    <img src="assets/images/premium.png" alt="Contenido Premium" width="250">
                    <p class="mt-3">Este contenido solo está disponible para usuarios premium. <strong>¡Suscríbete ahora para acceder a todas las noticias y actualizaciones exclusivas!</strong></p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'theme/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var newsModal = new bootstrap.Modal(document.getElementById('newsModal'), {
                backdrop: 'static',  // Evita cerrar el modal al hacer clic fuera
                keyboard: false      // Evita cerrar el modal con la tecla Esc
            });
            newsModal.show();
        });
    </script>
</body>
</html>
