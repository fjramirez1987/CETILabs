    <?php include 'theme/head.php'; ?>

    <?php include 'theme/nav.php'; ?>

    <!-- Sección de contacto -->
    <div class="container contact-section">
        <h2 class="text-center mb-4">Contáctanos</h2>
        <form id="contactForm">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Mensaje</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Modal de agradecimiento -->
    <div class="modal" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="thankYouModalLabel">¡Gracias por tu mensaje!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalContent">
                    Nada que mostrar...
                </div>
            </div>
        </div>
    </div>

    <?php include 'theme/footer.php'; ?>

    <script src="assets/script.js"></script>
</body>
</html>
