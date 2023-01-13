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

//--------------------Reveal Observer--------------------------//
const ratio = 0.1;
const option = {
    root: null, //element racine
    rootMargin: "0px", // depasse cette marge pour etre visible
    threshold: 0.1, // a quel moment l'élément doit etre detecter  ici 10%
};

const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add("reveal-visible");
            observer.unobserve(entry.target);
        } else {
            console.log("invisible");
        }
    });
};
const observer = new IntersectionObserver(handleIntersect, option);
document.querySelectorAll('[class*="reveal-"]').forEach(function (r) {
    observer.observe(r);
});
//--------------------Customers Feeadbacks-------------------------//
let slide = document.getElementById('slide');
let upArrow = document.getElementById('upArrow');
let downArrow = document.getElementById('downArrow');
let x = 0;

upArrow.addEventListener("click", () => {
    if( x > "-900"){
        x = x - 300;
        slide.style.top = x + "px";
    }
});
downArrow.addEventListener("click", () => {
    if( x < 0 ){
        x = x + 300;
        slide.style.top = x + "px";
    }
});
