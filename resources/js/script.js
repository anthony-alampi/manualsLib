import './bootstrap';

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



