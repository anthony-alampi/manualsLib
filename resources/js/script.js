import './bootstrap';
//--------------------------------Sticky navbar effect--------------------------------//
// Récupération de la barre de navigation
var navbar = document.querySelector("nav");
// Ajout de l'écouteur d'événement de défilement
window.addEventListener("scroll", () => {
  // Récupération de la position de défilement
  var scrollPos = window.scrollY;
  // Ajout ou suppression de la classe "scrolled" en fonction de la position de défilement
  if (scrollPos > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});


//--------------------------------------Hamburger-------------------------------------//
const hamburgerToggler = document.querySelector(".hamburger");
const navLinksContainer = document.querySelector(".navlinks-container");

const toggleNav = () => {
    hamburgerToggler.classList.toggle("open");
    navLinksContainer.classList.toggle("open");
}
hamburgerToggler.addEventListener("click", toggleNav);

new ResizeObserver(entries => {
    if(entries[0].contentRect.width <= 1024)
    {
        navLinksContainer.style.transition = "transform 0.3s ease-out";
    }else
    {
        navLinksContainer.style.transition = "none";
    }
}).observe(document.body)
//--------------------------------------End Hamburger-------------------------------------//



