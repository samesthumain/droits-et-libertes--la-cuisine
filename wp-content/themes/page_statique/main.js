swiper.update();
import Swiper from 'swiper';
import { Swiper, Parallax, Navigation} from 'swiper'
Swiper.use([ Parallax, Navigation ])

//navbar code
let hotdog = document.querySelector(".hotdog");
let hotdogRetour = document.querySelector(".hotdog-retour")
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
const swiper = ('.swiper', {
    // Optional parameters
    
   
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  });
  