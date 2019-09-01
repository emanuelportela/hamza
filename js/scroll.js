/* BARRE NAV AU SCROLL (start) */

window.onscroll = () => {
   
   const nav = document.querySelector('.header-2');
   const box = document.querySelector('.box');
   const burger = document.querySelector('.responsive i');
   const burger2 = document.querySelector('.burger-1');
   var nonactive1 = document.querySelector('.nonactive1');
   var nonactive2 = document.querySelector('.nonactive2');
   var nonactive3 = document.querySelector('.nonactive3');
   var nonactive4 = document.querySelector('.nonactive4');
   var nonactive5 = document.querySelector('.nonactive5');
   var nonactive6 = document.querySelector('.nonactive6');
   
   
   if (this.scrollY > 0) {
      nav.classList.add("scroll");
      box.classList.add("scroll-box");
      burger.classList.add("responsiva");
      burger2.classList.add("scroll2");
      nonactive1.classList.add("nonactiveblack");
      nonactive2.classList.add("nonactiveblack");
      nonactive3.classList.add("nonactiveblack");
      nonactive4.classList.add("nonactiveblack");
      nonactive5.classList.add("nonactiveblack");
      nonactive6.classList.add("nonactiveblack");

   } else {
      nav.classList.remove("scroll");
      box.classList.remove("scroll-box");
      burger.classList.remove("responsiva");
      burger2.classList.remove("scroll2");
      nonactive1.classList.remove("nonactiveblack");
      nonactive2.classList.remove("nonactiveblack");
      nonactive3.classList.remove("nonactiveblack");
      nonactive4.classList.remove("nonactiveblack");
      nonactive5.classList.remove("nonactiveblack");
      nonactive6.classList.remove("nonactiveblack");
   }
};

/* BARRE NAV AU SCROLL (end) */



/* TITRE REFRESH TEST (start) */

// window.addEventListener("load", function () {
//    let bar = document.querySelector('.accueil-ligne');

//    bar.classList.add("accueil-ligne-2");

// })

/* TITRE REFRESH TEST (start) */



ScrollReveal().reveal('.headline', { delay: 500 });
ScrollReveal().reveal('.punchline', { delay: 1000 });

ScrollReveal().reveal('.oneline', { delay: 500, duration: 1500 });
ScrollReveal().reveal('.twoline', { delay: 1500, duration: 1500 });
ScrollReveal().reveal('.threeline', { delay: 1500, duration: 2000 });
ScrollReveal().reveal('.fourline', { delay: 2000, duration: 2000 });
ScrollReveal().reveal('.fiveline', { delay: 3000, duration: 3000 });
ScrollReveal().reveal('.sixline', { delay: 3500, duration: 3000 });


ScrollReveal().reveal('.uneidee', { duration: 2500 } );
ScrollReveal().reveal('.deuxidee', { delay: 1000, duration: 1500 } );
ScrollReveal().reveal('.troisidee', { delay: 2000, duration: 2000 } );
ScrollReveal().reveal('.quatreidee', { delay: 3000, duration: 2000 } );