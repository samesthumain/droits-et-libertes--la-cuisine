let hotdog = document.querySelector(".hotdog");
let hotdogRetour = document.querySelector(".hotdog-retour")
let menu = document.querySelector(".nav-menu");

hotdog.addEventListener("click", function(){
    menu.setAttribute("style", "display: grid");
    hotdog.setAttribute("style", "display: none");
    hotdogRetour.setAttribute("style", "display: block");
    console.log("hot");
})

hotdogRetour.addEventListener("click", function(){
    menu.setAttribute("style", "display: none");
    hotdog.setAttribute("style", "display: block");
    hotdogRetour.setAttribute("style", "display: none");
    console.log("hot");
})