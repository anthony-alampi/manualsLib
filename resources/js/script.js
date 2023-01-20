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

document.addEventListener("DOMContentLoaded", () => {

    const __ms = document.querySelector(".micro-slider");
    const __msSlider = new MicroSlider(__ms, {
        indicators: true,
        indicatorText: "",
    });
    const hammer = new Hammer(__ms);
    const __msTimer = 4000;
    let __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);

    __ms.onmouseenter = function (e) {
        clearInterval(__msAutoplay);
        console.log(e.type + " mouse detected");
    };


    __ms.onmouseleave = function (e) {
        clearInterval(__msAutoplay);
        __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
        console.log(e.type + " mouse detected");
    };


    __ms.onclick = function (e) {
        clearInterval(__msAutoplay);
        console.log(e.type + " mouse detected");
    };


    hammer.on("tap", function (e) {
        clearInterval(__msAutoplay);
        console.log(e.type + " gesture detected");
    });

    hammer.on("swipe", function (e) {
        clearInterval(__msAutoplay);
        __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
        console.log(e.type + " gesture detected");
    });

    let slideLink = document.querySelectorAll(".slider-item");
    if (slideLink && slideLink !== null && slideLink.length > 0) {
        slideLink.forEach((el) =>
            el.addEventListener("click", (e) => {
                e.preventDefault();
                let href = el.dataset.href;
                let target = el.dataset.target;
                if (href !== "#") window.open(href, target);
            })
        );
    }

    //===== MICRO-SLIDER end
});