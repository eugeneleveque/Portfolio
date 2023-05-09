console.log("hello world");

// Ajouter un gestionnaire d'événements clic à tous les liens qui ont un href qui commence par #
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault(); // Empêcher le comportement de base du lien

    // Faire défiler la page jusqu'à l'ancre correspondante avec une transition CSS de 0,5 seconde
    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});
