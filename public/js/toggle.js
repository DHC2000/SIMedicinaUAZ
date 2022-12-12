const bttnToggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");
const logo = document.querySelector(".logo-container");

bttnToggle.addEventListener("click", () =>{
    menu.classList.toggle('menu-visible');
    logo.classList.toggle('menu-visible');
});
