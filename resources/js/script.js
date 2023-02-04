import './bootstrap';
//--------------------------------Sticky navbar effect--------------------------------//

var navbar = document.querySelector("nav");

window.addEventListener("scroll", () => {
  let scrollPos = window.scrollY;

  if (scrollPos > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

//---------------------------------Modal SIGN IN / SIGN UP----------------------------//
const onglets = document.querySelectorAll(".onglets");
const contenu = document.querySelectorAll(".contenu");

const openModalBtn = document.querySelector("#openModalBtn");
const closeModalBtn = document.querySelector(".closeModalBtn");
const modal = document.querySelector("#modal");


openModalBtn.addEventListener("click", function () {
    modal.style.display = "block";
});
closeModalBtn.addEventListener("click", function () {
    modal.style.display = "none";
});
window.addEventListener("click", function (event) {
    if (event.target === modal) {
        console.log('close');
        modal.style.display = "none";
    }
});


let index = 0;
let i = 0;
let j = 0;
onglets.forEach((onglet) => {
    onglet.addEventListener("click", () => {
        if (onglet.classList.contains("start")) {
            return;
        } else {
            onglet.classList.add("start");
        }

        index = onglet.getAttribute("data-anim");

        for (i = 0; i < onglets.length; i++) {
            if (onglets[i].getAttribute("data-anim") != index) {
                onglets[i].classList.remove("start");
            }
        }

        for (j = 0; j < contenu.length; j++) {
            if (contenu[j].getAttribute("data-anim") == index) {
                contenu[j].classList.add("startContenu");
            } else {
                contenu[j].classList.remove("startContenu");
            }
        }
    });
});



//--------------------------------------Hamburger-------------------------------------//
// const hamburgerToggler = document.querySelector(".hamburger");
// const navLinksContainer = document.querySelector(".navlinks-container");

// const toggleNav = () => {
//     hamburgerToggler.classList.toggle("open");
//     navLinksContainer.classList.toggle("open");
// }
// hamburgerToggler.addEventListener("click", toggleNav);

// new ResizeObserver(entries => {
//     if(entries[0].contentRect.width <= 1024)
//     {
//         navLinksContainer.style.transition = "transform 0.3s ease-out";
//     }else
//     {
//         navLinksContainer.style.transition = "none";
//     }
// }).observe(document.body)
const hamburgerToggler = document.querySelector(".hamburger");
const navLinksContainer = document.querySelector(".navlinks-container");
const navLinks = document.querySelectorAll(".nav-link");
const signUpBtn = document.querySelector("#openModalBtn");

const toggleNav = () => {
    hamburgerToggler.classList.toggle("open");
    navLinksContainer.classList.toggle("open");
};

hamburgerToggler.addEventListener("click", toggleNav);

navLinks.forEach((link) => {
    link.addEventListener("click", toggleNav);
});

signUpBtn.addEventListener("click", toggleNav);

new ResizeObserver((entries) => {
    if (entries[0].contentRect.width <= 1024) {
        navLinksContainer.style.transition = "transform 0.3s ease-out";
    } else {
        navLinksContainer.style.transition = "none";
    }
}).observe(document.body);


//--------------------Customers Feedback-------------------------//
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
        // console.log(e.type + " mouse detected");
    };


    __ms.onclick = function (e) {
        clearInterval(__msAutoplay);
        // console.log(e.type + " mouse detected");
    };


    hammer.on("tap", function (e) {
        clearInterval(__msAutoplay);
        // console.log(e.type + " gesture detected");
    });

    hammer.on("swipe", function (e) {
        clearInterval(__msAutoplay);
        __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
        // console.log(e.type + " gesture detected");
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
});

/*--------------------------------*/
const ratio = 0.1;
const option = {
    root: null, //element racine
    rootMargin: "0px", // depasse cette marge pour etre visible
    threshold: ratio // a quel moment l'élément doit etre detecter  ici 10%
};
/*-------------------------------REVEAL RIGHT-------------------------------------*/
const handleIntersectRight = function (entries, observerRight) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add("reveal-visible");
            observerRight.unobserve(entry.target);
        }
    });
};
const observerRight = new IntersectionObserver(handleIntersectRight, option);
document.querySelectorAll('[class*="reveal-right"]').forEach(function (r) {
    observerRight.observe(r);
});

/*-------------------------------REVEAL LEFT------------------------------------*/
const handleIntersectLeft = function (entries, observerLeft) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add("reveal-visible");
            observerLeft.unobserve(entry.target);
        }
    });
};
const observerLeft = new IntersectionObserver(handleIntersectLeft, option);
document.querySelectorAll('[class*="reveal-left"]').forEach(function (r) {
    observerLeft.observe(r);
});
/*-------------------------------REVEAL BOTTOM------------------------------------*/
const handleIntersectBottom = function (entries, observerBottom) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add("reveal-visible-forBottom");
            observerBottom.unobserve(entry.target);
        }
    });
};
const observerBottom = new IntersectionObserver(handleIntersectBottom, option);
document.querySelectorAll('[class*="reveal-bottom"]').forEach(function (r) {
    observerBottom.observe(r);
});

// const pricingBtn = document.querySelector('.switch-pricing');
//     pricingBtn.addEventListener('click', () => {
//         console.log(pricingBtn);
//     })
