/* DECLARATION VARIABLE (start) */

let all = document.getElementById('bouton-1');
let web = document.getElementById('bouton-2');
let graphisme = document.getElementById('bouton-3');
let image = document.getElementById('bouton-4');

/* DECLARATION VARIABLE (end) */



/* BOUTON 1 (start) */

all.addEventListener("click", function () {
   var tout = document.querySelectorAll(".realisation");

   for (var i = 0; i < tout.length; i++) {
      document.querySelectorAll(".realisation")[i].style.display = "initial";
   }
   
   all.classList.remove("all-clique")

   web.classList.remove("bouton-clique")
   graphisme.classList.remove("bouton-clique")
   image.classList.remove("bouton-clique")

})

/* BOUTON 1 (end) */


/* BOUTON 2 (start) */

web.addEventListener("click", function () {

   let des = document.querySelectorAll(".realisation");

   for (var i = 0; i < des.length; i++) {

      if (des[i].classList.contains("web")) {
         document.querySelectorAll(".realisation")[i].style.display = "initial";
         web.classList.add("bouton-clique")
         all.classList.add("all-clique")

         image.classList.remove("bouton-clique")
         graphisme.classList.remove("bouton-clique")

      } else {
         document.querySelectorAll(".realisation")[i].style.display = "none";
      }
   }
})

/* BOUTON 2 (end) */


/* BOUTON 3 (start) */

graphisme.addEventListener("click", function () {

   let des = document.querySelectorAll(".realisation");

   for (var i = 0; i < des.length; i++) {

      if (des[i].classList.contains("graphisme")) {
         document.querySelectorAll(".realisation")[i].style.display = "initial";
         graphisme.classList.add("bouton-clique")
         all.classList.add("all-clique")

         web.classList.remove("bouton-clique")
         image.classList.remove("bouton-clique")

      } else {
         document.querySelectorAll(".realisation")[i].style.display = "none";
      }
   }
})

/* BOUTON 3 (end) */


/* BOUTON 4 (start) */

image.addEventListener("click", function () {

   let des = document.querySelectorAll(".realisation");

   for (var i = 0; i < des.length; i++) {

      if (des[i].classList.contains("meedia")) {
         document.querySelectorAll(".realisation")[i].style.display = "initial";
         image.classList.add("bouton-clique")
         all.classList.add("all-clique")

         web.classList.remove("bouton-clique")
         graphisme.classList.remove("bouton-clique")

      } else {
         document.querySelectorAll(".realisation")[i].style.display = "none";
      }
   }
})

/* BOUTON 4 (end) */