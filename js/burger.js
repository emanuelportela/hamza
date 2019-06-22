
/* HAMBURGER MENU (start) */

let hamburger = document.getElementById('burger');

hamburger.addEventListener("click", function () { 
  
   var burgerDiv = document.querySelector(".burger-1");
   var burger2 = document.querySelector(".responsive i");
   var burger3 = document.querySelector(".header-2");
   var bars = document.querySelector(".bars");
   var times = document.querySelector(".times");

   if (hamburger.classList.contains("afficher")) {
      burger.classList.remove("afficher");
      burgerDiv.style.display="none";
      burger2.classList.remove("responsiva");
      burger2.classList.remove("clicked-2");
      burger3.classList.remove("clicked");
      times.style.display="none";
      bars.style.display="initial";
      bars.style.color="black";
   } 

   else {
      burger.classList.add("afficher")
      burgerDiv.style.display="initial"; 
      burger2.classList.add("responsiva");
      burger2.classList.add("clicked-2");
      burger3.classList.add("clicked");
      bars.style.display="none";
      times.style.display="initial";
   }
})

/* HAMBURGER MENU (end) */