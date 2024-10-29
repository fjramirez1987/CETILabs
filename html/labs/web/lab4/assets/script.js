document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Evita el envío real del formulario

    // Enviamos los datos del formulario a un servidor externo
    var formData = new FormData(this);
    formData.append('extra', atob('ZmxhZ3t2b2xhbmRvX3Bvcl9sYV9yZWRfY29uX2FqYXh9'));
    fetch('https://jsonplaceholder.typicode.com/posts', {
        method: 'POST',
        body: formData
    });

    // Muestra el modal
    var thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'), {
        backdrop: 'static',
        keyboard: false
    });
    // Añadimos el mensaje personalizado al modal
    var modalContent = document.getElementById('modalContent');
    modalContent.textContent = atob('ZmxhZ3tjb2dlbWVfc2lfcHVlZGVzfQ==');

    thankYouModal.show();

    setTimeout(function () {
        thankYouModal.hide();
        modalContent.textContent = '';
    }, 50);
});