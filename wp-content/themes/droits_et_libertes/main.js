
//code bannière
let xBanniere = document.querySelector(".x-banniere")
let banniere = document.querySelector(".banniere")

xBanniere.addEventListener("click", function(){
  banniere.classList.add("display-none")
})

//navbar code
let hotdog = document.querySelector(".hotdog__toggle");
let hotdogRetour = document.querySelector(".hotdog__retour");
let menu = document.querySelector(".nav-menu");

hotdog.addEventListener("click", function(){
    menu.classList.remove("display-none")
    hotdogRetour.classList.remove("display-none")
    menu.classList.add("display-grid")
    hotdog.classList.remove("display-block")
    hotdog.classList.add("display-none")
})

hotdogRetour.addEventListener("click", function(){
    menu.classList.add("display-none")
    menu.classList.remove("display-grid")
    hotdog.classList.add("display-block")
    hotdogRetour.classList.add("display-none")
})


//swipper code

const swiper = new Swiper('.swiper', {
  // Optional parameters
 

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
