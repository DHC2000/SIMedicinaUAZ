
window.onload = function(){
    alert("Bienvenido");
    var loader =  document.querySelector(".loader-container");
    loader.classList.add('hidde-loader');

}
 /*
const btnFondo = document.getElementById("btnFondo");
const luna = document.getElementById("luna");
const sol = document.getElementById("sol");
const fondo = document.querySelector(".grid-container");
const fondoNAV = document.querySelector(".main-menu");
const logo = document.querySelector(".logo-container");

btnFondo.addEventListener("click", () =>{
    fondo.classList.toggle('fondo');
    fondoNAV.classList.toggle('fondo');
    logo.classList.toggle('logo-m');
    luna.classList.toggle('visible');
    sol.classList.toggle('visible');
});
*/



const slider = document.querySelector(".slider");
    const nextBtn = document.querySelector(".next-btn");
    const prevBtn = document.querySelector(".prev-btn");
    const slides = document.querySelectorAll(".slide");
    const slideIcons = document.querySelectorAll(".slide-icon");
    const numberOfSlides = slides.length;
    var slideNumber = 0;

    //image slider next button
    nextBtn.addEventListener("click", () => {
      slides.forEach((slide) => {
        slide.classList.remove("active");
      });
      slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
      });

      slideNumber++;

      if(slideNumber > (numberOfSlides - 1)){
        slideNumber = 0;
      }

      slides[slideNumber].classList.add("active");
      slideIcons[slideNumber].classList.add("active");
    });

    //image slider previous button
    prevBtn.addEventListener("click", () => {
      slides.forEach((slide) => {
        slide.classList.remove("active");
      });
      slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
      });

      slideNumber--;

      if(slideNumber < 0){
        slideNumber = numberOfSlides - 1;
      }

      slides[slideNumber].classList.add("active");
      slideIcons[slideNumber].classList.add("active");
    });

    //image slider autoplay
    var playSlider;

    var repeater = () => {
      playSlider = setInterval(function(){
        slides.forEach((slide) => {
          slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
          slideIcon.classList.remove("active");
        });

        slideNumber++;

        if(slideNumber > (numberOfSlides - 1)){
          slideNumber = 0;
        }

        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
      }, 4000);
    }
    repeater();

    //stop the image slider autoplay on mouseover
    slider.addEventListener("mouseover", () => {
      clearInterval(playSlider);
    });

    //start the image slider autoplay again on mouseout
    slider.addEventListener("mouseout", () => {
      repeater();
    });

const bttnToggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");

const bttnArrows = document.querySelector(".arrows");
const secmenu = document.querySelector(".sec-menu");
const arrowUP = document.querySelector(".fa-arrow-up");
const arrowDOWN = document.querySelector(".fa-arrow-down");

bttnToggle.addEventListener("click", () =>{
    menu.classList.toggle('menu-visible');

});

bttnArrows.addEventListener("click", () =>{
  secmenu.classList.toggle('menu-visible');
  arrowUP.classList.toggle('menu-visible');
  arrowDOWN.classList.toggle('menu-visible');

});
