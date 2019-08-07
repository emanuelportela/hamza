/* DECLARATION VARIABLE (start) */

let all = document.getElementById('bouton-1');
let web = document.getElementById('bouton-2');
let graphisme = document.getElementById('bouton-3');
let media = document.getElementById('bouton-4');
let arrow = document.getElementById('arrow-legende');

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
   media.classList.remove("bouton-clique")

   arrow.classList.remove("arrow-legende-2")
   arrow.classList.remove("arrow-legende-3")
   arrow.classList.remove("arrow-legende-4")
   arrow.classList.add("arrow-legende-1")

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

         media.classList.remove("bouton-clique")
         graphisme.classList.remove("bouton-clique")

         arrow.classList.remove("arrow-legende-1")
         arrow.classList.remove("arrow-legende-3")
         arrow.classList.remove("arrow-legende-4")
         arrow.classList.add("arrow-legende-2")

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
         media.classList.remove("bouton-clique")

         arrow.classList.remove("arrow-legende-1")
         arrow.classList.remove("arrow-legende-2")
         arrow.classList.remove("arrow-legende-4")
         arrow.classList.add("arrow-legende-3")

      } else {
         document.querySelectorAll(".realisation")[i].style.display = "none";
      }
   }
})

/* BOUTON 3 (end) */


/* BOUTON 4 (start) */

media.addEventListener("click", function () {

   let des = document.querySelectorAll(".realisation");

   for (var i = 0; i < des.length; i++) {

      if (des[i].classList.contains("media")) {
         document.querySelectorAll(".realisation")[i].style.display = "initial";
         media.classList.add("bouton-clique")
         all.classList.add("all-clique")

         web.classList.remove("bouton-clique")
         graphisme.classList.remove("bouton-clique")

         arrow.classList.remove("arrow-legende-1")
         arrow.classList.remove("arrow-legende-2")
         arrow.classList.remove("arrow-legende-3")
         arrow.classList.add("arrow-legende-4")

      } else {
         document.querySelectorAll(".realisation")[i].style.display = "none";
      }
   }
})

/* BOUTON 4 (end) */