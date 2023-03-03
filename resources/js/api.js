import axios from "axios";
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
