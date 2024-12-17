document.getElementById('raceFilter').addEventListener('change', function () {
    const selectedRace = this.value; // Récupérer la race sélectionnée
    const container = document.getElementById('animalsContainer');

    // Effectuer une requête AJAX
    fetch(`/animaux?race=${selectedRace}`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        },
    })
        .then(response => response.text()) // Récupérer la réponse HTML
        .then(html => {
            container.innerHTML = html; // Mettre à jour le conteneur avec le nouveau contenu
        })
        .catch(error => {
            console.error('Erreur :', error);
            container.innerHTML = '<p class="text-danger text-center">Une erreur est survenue.</p>';
        });
});
