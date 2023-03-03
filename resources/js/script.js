// import './bootstrap';
import axios from "axios";


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
const onglets = document.querySelectorAll([".onglets", ".forgotPassword"]);
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
    };

    __ms.onclick = function (e) {
        clearInterval(__msAutoplay);
    };

    hammer.on("tap", function (e) {
        clearInterval(__msAutoplay);
    });

    hammer.on("swipe", function (e) {
        clearInterval(__msAutoplay);
        __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
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
    root: null,
    rootMargin: "0px",
    threshold: ratio
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
//------------------------------- LIVE SEARCH -------------------------------------//

let searchInput = document.querySelector("#search_dynamic");
const searchList = document.querySelector("#searchList");
const searchButton = document.querySelector("#search_button");
let nameManuals;

function searchManuals() {
    axios
        .get(`https://dev3.vanilla.digital/manuals.php?q=${searchInput}`)
        .then((response) => {
            nameManuals = response.data.map((elem) => elem.name);
            let searchList = document.querySelector("#searchList");

            searchInput.addEventListener("input", () => {
                let valeur = searchInput.value;

                if (valeur === "") {
                    // Si l'input est vide, masquer la liste
                    searchList.style.display = "none";
                    return;
                }

                let nameSuggest = nameManuals.filter(function (manuel) {
                    return manuel.toLowerCase().includes(valeur.toLowerCase());
                });

                // Effacez la liste précédente de suggestions
                searchList.innerHTML = "";

                // Ajouter des éléments li pour chaque suggestion trouvée
                nameSuggest.slice(0, 25).forEach(function (name) {
                    let item = document.createElement("li");
                    item.textContent = name;
                    // const link = document.createElement("a");
                    // link.href = `/manuel/${name.id}`;
                    // link.textContent = name;
                    // item.appendChild(link);
                    searchList.appendChild(item);

                    // Ajouter un gestionnaire d'événements click pour mettre à jour la valeur de l'input
                    item.addEventListener("click", () => {
                        searchInput.value = name;
                        searchList.style.display = "none";
                    });
                });
                if (nameSuggest.length === 0) {
                    searchList.style.display = "none";
                } else {
                    searchList.style.display = "block";
                }
            });
        })
        .catch((error) => console.log(error));

    // Ajouter un gestionnaire d'événements click pour déclencher la recherche lors de la soumission du formulaire
    searchButton.addEventListener("click", () => {
        let searchValue = searchInput.value;
        axios
            .get(`https://dev3.vanilla.digital/manuals.php?q=${searchValue}`)
            .then((response) => {
                // Récupérer l'id du manuel correspondant à la recherche
                let manualId = response.data[0].id;
                // Rediriger l'utilisateur vers la page du manuel correspondant
                window.location.href = `/manual/${manualId}`;
            })
            .catch((error) => console.log(error));
    });
}

searchManuals();
//-----------------------FAQ MODULE------------------------------------*/
const faqs = document.querySelectorAll(".faq");

faqs.forEach( faq => {
    faq.addEventListener('click', () => {
        faq.classList.toggle("active");
    })
})
//---------------------------------USER LIST MENU NAVBAR-------------------------------//
let btnDrop = document.querySelector(".btn-top");
let list = document.querySelector(".list");

btnDrop.addEventListener("click", () => {
    list.classList.toggle("newlist");
});
//------------------------------- AFFILIATE LINK COPY---------------------------------//
const affiliateInput = document.getElementById("affiliateInput");
document.getElementById("linkCopy").addEventListener("click", () => {
    navigator.clipboard.writeText(affiliateInput.value);
});

