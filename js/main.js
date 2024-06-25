document.addEventListener('DOMContentLoaded', () => {
    const navButtons = document.querySelectorAll('.nav-button');

    navButtons.forEach(button => {
        button.addEventListener('click', () => {
            navButtons.forEach(btn => btn.classList.remove('selected'));
            button.classList.add('selected');
            loadContent(button.getAttribute('data-page'));
        });
    });

    // Cargar el perfil por defecto al cargar la página
    loadContent('profile.html');

    function loadContent(page) {
        fetch(page)
            .then(response => response.text())
            .then(html => {
                document.getElementById('content').innerHTML = html;
            })
            .catch(error => console.error('Error loading content:', error));
    }
});
