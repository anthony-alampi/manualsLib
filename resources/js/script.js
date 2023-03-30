import axios from "axios";

/*---------------------------------REVEAL----------------------------------*/
const ratio = 0.1;
const option = {
    root: null,
    rootMargin: "0px",
    threshold: ratio
};
/*-------------------------------REVEAL RIGHT------------*/
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

/*----------------------------REVEAL LEFT--------------*/
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
/*---------------------------REVEAL BOTTOM--------------*/
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
// document.addEventListener("DOMContentLoaded", () => {
//     const ms = document.querySelector(".micro-slider");
//     const msSlider = new MicroSlider(ms, {
//         // indicators: true,
//         // indicatorText: "",
//     });
//     const msTimer = 4000;
//     let msAutoplay = setInterval(() => msSlider.next(), msTimer);
// });
document.addEventListener("DOMContentLoaded", () => {
    const ms = document.querySelector(".micro-slider");

    if (ms) {
        const msSlider = new MicroSlider(ms, {
            // indicators: true,
            // indicatorText: "",
        });
        const msTimer = 4000;
        let msAutoplay = setInterval(() => msSlider.next(), msTimer);
    } 
});
/*--------------------------------------SUBSCRIBE MODAL STRIPE----------------------------------*/

var stripeModalBtns = document.querySelectorAll("#stripe-modal-btn");
var modalStripe = document.getElementById("modal-payment");


stripeModalBtns.forEach(function(btn) {
  btn.onclick = function() {
    modalStripe.style.display = "block";
  }
});


window.onclick = function(event) {
  if (event.target == modalStripe) {
    modalStripe.style.display = "none";
  }
}

//------------------------ DOWNLOAD BUTTON----------------------------------*/
document.addEventListener("DOMContentLoaded", function () {
    var downloadBtn = document.getElementById("download-btn");
   if (downloadBtn) {
       downloadBtn.addEventListener("click", function (e) {
           e.preventDefault();

           var pageId = document
               .querySelector("[data-id]")
               .getAttribute("data-id");
           var nameNotice = document
               .querySelector("[data-name]")
               .getAttribute("data-name");

           function getCookie(name) {
               const cookieValue = document.cookie.match(
                   "(^|[^;]+)\\s*" + name + "\\s*=\\s*([^;]+)"
               );
               return cookieValue ? cookieValue.pop() : "";
           }
           // console.log(pageId);

           var downloadsToday = parseInt(getCookie("downloads_today")) || 0;
           if (downloadsToday >= 3) {
               alert("You have reached your daily download limit.");
               return;
           }
           axios
               .get("https://dev3.vanilla.digital/manuals.php")
               .then(function (response) {
                   var data = response.data;
                   var file = null;

                   for (var i = 0; i < data.length; i++) {
                       if (data[i].id == pageId) {
                           file = data[i].file;
                           break;
                       }
                   }

                   if (file == null) {
                       alert(
                           "The file corresponding to the ID " +
                               pageId +
                               " was not found."
                       );
                       return;
                   }

                   axios
                       .get(file, { responseType: "blob" })
                       .then(function (response) {

                           var cookieName = "downloads_today";
                           var cookieValue = downloadsToday + 1;
                           document.cookie =
                               cookieName +
                               "=" +
                               cookieValue +
                               "; max-age=86400; path=/";

                           var url = window.URL.createObjectURL(
                               new Blob([response.data], {
                                   type: "application/pdf",
                               })
                           );

                           const idUserElement =
                               document.querySelector("[data-id_user]");
                           let idUser = null;
                           if (idUserElement) {
                               idUser =
                                   idUserElement.getAttribute("data-id_user");
                           }
                           // Ajout de la requête POST à la route downloads.update avec l'ID du document et le jeton CSRF
                           const csrfToken = document
                               .querySelector('meta[name="csrf-token"]')
                               .getAttribute("content");
                           axios
                               .post("/manual/" + (idUser || "null"), {
                                   downloaded_manuals: [pageId],
                                   _token: csrfToken,
                               })
                               .then((response) => {
                                //    console.log(response.data);
                               })
                               .catch((error) => {
                                   // console.error(error);
                               });


                           var link = document.createElement("a");
                           link.href = url;
                           link.download = nameNotice;
                           document.body.appendChild(link);

                           link.click();
                           document.body.removeChild(link);
                       })
                       .catch(function (error) {
                        //    console.log(error);
                       });
               });
       });
   }
});

//------------------------------- LIVE SEARCH -------------------------------------//

// let searchInput = document.querySelector("#search_dynamic");
// const searchList = document.querySelector("#searchList");
// const goToManualButton = document.querySelector("#search_button");

// let nameManuals;
// let selectedManualId;

// function searchManuals() {
//     axios
//         .get(`https://dev3.vanilla.digital/manuals.php`)
//         .then((response) => {
//             nameManuals = response.data;
//             let searchList = document.querySelector("#searchList");

//             searchInput.addEventListener("input", () => {
//                 let valeur = searchInput.value;

//                 if (valeur === "") {
//                     searchList.style.display = "none";
//                     return;
//                 }

//                 let nameSuggest = nameManuals.filter(function (manuel) {
//                     return manuel.name
//                         .toLowerCase()
//                         .includes(valeur.toLowerCase());
//                 });
//                 searchList.innerHTML = "";

//                 nameSuggest.slice(0, 25).forEach(function (manual) {
//                     let item = document.createElement("li");
//                     item.textContent = manual.name;
//                     searchList.appendChild(item);

//                     item.addEventListener("click", () => {
//                         selectedManualId = manual.id;
//                         searchInput.value = manual.name;
//                         searchList.style.display = "none";
//                     });
//                 });

//                 if (nameSuggest.length === 0) {
//                     searchList.style.display = "none";
//                 } else {
//                     searchList.style.display = "block";
//                 }
//             });

//             goToManualButton.addEventListener("click", () => {
//                 if (selectedManualId) {
//                     window.location.href = `/manual/${selectedManualId}`;
//                 }
//             });
//         })
//         // .catch((error) => console.log(error));
// }
// searchManuals();
let searchInput = document.querySelector("#search_dynamic");
const searchList = document.querySelector("#searchList");
const goToManualButton = document.querySelector("#search_button");

let nameManuals;
let selectedManualId;

function searchManuals() {
    axios
        .get(`https://dev3.vanilla.digital/manuals.php`)
        .then((response) => {
            nameManuals = response.data;

            if (searchInput) {
                searchInput.addEventListener("input", () => {
                    let valeur = searchInput.value;

                    if (valeur === "") {
                        searchList.style.display = "none";
                        return;
                    }

                    let nameSuggest = nameManuals.filter(function (manuel) {
                        return manuel.name
                            .toLowerCase()
                            .includes(valeur.toLowerCase());
                    });
                    searchList.innerHTML = "";

                    nameSuggest.slice(0, 25).forEach(function (manual) {
                        let item = document.createElement("li");
                        item.textContent = manual.name;
                        searchList.appendChild(item);

                        item.addEventListener("click", () => {
                            selectedManualId = manual.id;
                            searchInput.value = manual.name;
                            searchList.style.display = "none";
                        });
                    });

                    if (nameSuggest.length === 0) {
                        searchList.style.display = "none";
                    } else {
                        searchList.style.display = "block";
                    }
                });
            }

            if (goToManualButton) {
                goToManualButton.addEventListener("click", () => {
                    if (selectedManualId) {
                        window.location.href = `/manual/${selectedManualId}`;
                    }
                });
            }
        })
        .catch((error) => console.log(error));
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

if (btnDrop) {
    btnDrop.addEventListener("click", () => {
        list.classList.toggle("newlist");
    });
} 

//------------------------------- AFFILIATE LINK COPY---------------------------------//
const affiliateInput = document.getElementById("affiliateInput");
const linkCopyBtn = document.getElementById("linkCopy");

if (linkCopyBtn && affiliateInput) {
    linkCopyBtn.addEventListener("click", () => {
        navigator.clipboard.writeText(affiliateInput.value);
    });
}
/*--------------------------------------------------*/
// let nbrDownload = document.querySelector("[data-nbr]").getAttribute("data-nbr");
// let maxDownloadPerPlan = 3;

// function updateProgressBar(percentage) {
//     const circle = document.querySelector(".circle-front");
//     const progressText = document.querySelector(".progress-text");
//     const circumference = 2 * Math.PI * circle.getAttribute("r");
//     const dasharray = ( percentage / 100 ) * circumference;

//     circle.style.strokeDasharray = `${dasharray} ${circumference}`;
//     progressText.textContent = `${percentage}%`;
// }

// function getUserUpdateProgressBar() {
//     const produitEnCroix = (nbrDownload * 100) / maxDownloadPerPlan;
//     const userInput = produitEnCroix;

//     if (userInput !== null) {
//         const inputValue = parseInt(userInput, 10);

//         if (inputValue >= 1 && inputValue <= 100) {
//             updateProgressBar(inputValue);
//         }
//     }
// }

// getUserUpdateProgressBar();
const element = document.querySelector("[data-nbr]");
let nbrDownload;
if (element) {
    nbrDownload = element.getAttribute("data-nbr");
}
let maxDownloadPerPlan = 3;

function updateProgressBar(percentage) {
    const circle = document.querySelector(".circle-front");
    const progressText = document.querySelector(".progress-text");
    const circumference = 2 * Math.PI * circle.getAttribute("r");
    const dasharray = (percentage / 100) * circumference;

    circle.style.strokeDasharray = `${dasharray} ${circumference}`;
    progressText.textContent = `${percentage}%`;
}

function getUserUpdateProgressBar() {
    const produitEnCroix = (nbrDownload * 100) / maxDownloadPerPlan;
    const userInput = produitEnCroix;

    if (userInput !== null) {
        const inputValue = parseInt(userInput, 10);

        if (inputValue >= 1 && inputValue <= 100) {
            updateProgressBar(inputValue);
        }
    }
}

getUserUpdateProgressBar();

//---------- Modal preview doc ----------//

// var modalPreview = document.getElementById("myModal");
// var btn = document.getElementById("preview-button");
// var body = document.getElementsByTagName("body")[0];


// btn.onclick = function() {
//   modalPreview.style.display = "block";
//   modalPreview.style.zIndex = "999";
//   body.style.overflow = "hidden";
  
// }

// window.onclick = function(event) {
//   if (event.target == modalPreview) {
//     modalPreview.style.display = "none";
//     body.style.overflow = "auto";
//   }
// }
var modalPreview = document.getElementById("myModal");
var btn = document.getElementById("preview-button");
var body = document.getElementsByTagName("body")[0];

if (btn) {
    btn.onclick = function () {
        modalPreview.style.display = "block";
        modalPreview.style.zIndex = "999";
        body.style.overflow = "hidden";
    };
}

window.onclick = function (event) {
    if (event.target == modalPreview) {
        modalPreview.style.display = "none";
        body.style.overflow = "auto";
    }
};

/*------------------------------STRIPE ELEMENTS-----------------------------------------*/
// var stripe = Stripe(
//     "pk_test_51MGkYNFqehIyiqCAswBA4bcAvfS1Jj2En7v6MAEWVCB6AaMKrSALxpAuRjWOEnRd6ECnVYvQBw9BNEXjNDFRHKQT003lnndXaj"
// );
// var elements = stripe.elements();
// (function () {
//     "use strict";

//     var elements = stripe.elements({
//         fonts: [
//             {
//                 cssSrc: "https://fonts.googleapis.com/css?family=Roboto",
//             },
//         ],
//         // Stripe's examples are localized to specific languages, but if
//         // you wish to have Elements automatically detect your user's locale,
//         // use `locale: 'auto'` instead.
//         locale: window.__exampleLocale,
//     });

//     var card = elements.create("card", {
//         iconStyle: "solid",
//         style: {
//             base: {
//                 iconColor: "#c4f0ff",
//                 color: "#333",
//                 fontWeight: 500,
//                 fontFamily: "Roboto, Open Sans, Segoe UI, sans-serif",
//                 fontSize: "16px",
//                 fontSmoothing: "antialiased",

//                 ":-webkit-autofill": {
//                     color: "#333",
//                 },
//                 "::placeholder": {
//                     color: "#333",
//                 },
//             },
//             invalid: {
//                 iconColor: "#FFC7EE",
//                 color: "#FFC7EE",
//             },
//         },
//     });
//     card.mount("#example1-card");
//     registerElements([card], "example1");
// })
// ();
var stripe = Stripe(
    "pk_test_51MGkYNFqehIyiqCAswBA4bcAvfS1Jj2En7v6MAEWVCB6AaMKrSALxpAuRjWOEnRd6ECnVYvQBw9BNEXjNDFRHKQT003lnndXaj"
);
function registerElements(elements, exampleName) {
    // Ici, vous pouvez ajouter votre code pour gérer l'enregistrement des éléments.
    console.log(`Enregistrement des éléments ${exampleName}`);
}
var elements = stripe.elements();

(function () {
    "use strict";

    var elements = stripe.elements({
        fonts: [
            {
                cssSrc: "https://fonts.googleapis.com/css?family=Roboto",
            },
        ],
        locale: window.__exampleLocale,
    });

    var card = elements.create("card", {
        iconStyle: "solid",
        style: {
            base: {
                iconColor: "#c4f0ff",
                color: "#333",
                fontWeight: 500,
                fontFamily: "Roboto, Open Sans, Segoe UI, sans-serif",
                fontSize: "16px",
                fontSmoothing: "antialiased",

                ":-webkit-autofill": {
                    color: "#333",
                },
                "::placeholder": {
                    color: "#333",
                },
            },
            invalid: {
                iconColor: "#FFC7EE",
                color: "#FFC7EE",
            },
        },
    });

    var example1Card = document.getElementById("example1-card");

    if (example1Card) {
        card.mount("#example1-card");
        registerElements([card], "example1");
    }

    // Fermer la fenêtre du formulaire en cliquant en dehors de celle-ci
    var modalStripe = document.querySelector(".modal-payment"); // Assurez-vous d'avoir la classe 'modal' sur le conteneur du formulaire dans votre HTML
    if (modalStripe) {
        document.addEventListener("click", function (event) {
            if (event.target === modalStripe) {
                modalStripe.style.display = "none";
            }
        });
    }
})();
