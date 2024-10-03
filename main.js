

//navbar code
let hotdog = document.querySelector(".hotdog");
let hotdogRetour = document.querySelector(".hotdog-retour")
let menu = document.querySelector(".nav-menu");

hotdog.addEventListener("click", function(){
    //menu.classList.remove("display-none")
    //menu.classList.add("display-grid")
    menu.setAttribute("style", "display: grid");
    hotdog.setAttribute("style", "display: none");
    hotdogRetour.setAttribute("style", "display: block");
})

hotdogRetour.addEventListener("click", function(){
    menu.setAttribute("style", "display: none");
    hotdog.setAttribute("style", "display: block");
    hotdogRetour.setAttribute("style", "display: none");
    console.log("hot");
})


//swipper code
const swiper = ('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
  
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
  