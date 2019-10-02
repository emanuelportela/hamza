
// Hamburger Menu

let hamburger = document.getElementById('burger');

hamburger.addEventListener("click", function () { 
  
   var burgerDiv = document.querySelector(".burger-1");
   var burger2 = document.querySelector(".responsive i");
   var burger3 = document.querySelector(".header-2");
   var times = document.querySelector(".times");
   var bars = document.querySelector(".bars");

   if (hamburger.classList.contains("afficher")) {
      burger.classList.remove("afficher");
      burgerDiv.style.display="none";
      burger2.classList.remove("responsiva");
      burger2.classList.remove("clicked-2");
      burger3.classList.remove("clicked");
      times.classList.remove("times-add");
      bars.classList.remove("bars-removed");
      bars.style.color = "#282828";
   } 

   else {
      burger.classList.add("afficher")
      burgerDiv.style.display="initial"; 
      burger2.classList.add("responsiva");
      burger2.classList.add("clicked-2");
      burger3.classList.add("clicked");
      times.classList.add("times-add");
      bars.classList.add("bars-removed");
   }
})