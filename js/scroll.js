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
   var reponsepositive = document.querySelector('.reponse-positive');
   
   
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
      reponsepositive.style.display="initial";

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
      reponsepositive.style.display="none";
   }
};

/* BARRE NAV AU SCROLL (end) */

 

// ScrollReveal().reveal('.oneline', { delay: 100, duration: 1500 });
// ScrollReveal().reveal('.twoline', { delay: 600, duration: 1500 });
// ScrollReveal().reveal('.threeline', { delay: 1100, duration: 1500 });
// ScrollReveal().reveal('.fourline', { delay: 300, duration: 1500 });
// ScrollReveal().reveal('.fiveline', { delay: 800, duration: 1500 });
// ScrollReveal().reveal('.sixline', { delay: 1300, duration: 1500 });

// ScrollReveal().reveal('.oneweb', { delay: 100, duration: 1500 });
// ScrollReveal().reveal('.twoweb', { delay: 600, duration: 1500 });
// ScrollReveal().reveal('.threeweb', { delay: 300, duration: 1500 });
// ScrollReveal().reveal('.fourweb', { delay: 800, duration: 1500 });

/* SCROLL REVEAL (start) */

// ScrollReveal().reveal('.uneidee', { duration: 2000 } );
ScrollReveal().reveal('.deuxidee', { delay: 1000, duration: 1500 } );
ScrollReveal().reveal('.troisidee', { delay: 2000, duration: 2000 } );
ScrollReveal().reveal('.quatreidee', { delay: 3000, duration: 2000 } );


if (screen.width < 960) {
   // alert('Less than 960');
   ScrollReveal().reveal('.oneline', { delay: 100 });
   ScrollReveal().reveal('.twoline', { delay: 130 });
   ScrollReveal().reveal('.threeline', { delay: 300 });
   ScrollReveal().reveal('.fourline', { delay: 330 });
   ScrollReveal().reveal('.fiveline', { delay: 500 });
   ScrollReveal().reveal('.sixline', { delay: 530 });

   ScrollReveal().reveal('.oneweb', { delay: 100, duration: 1400 });
   ScrollReveal().reveal('.twoweb', { delay: 200, duration: 1400 });
   ScrollReveal().reveal('.threeweb', { delay: 300, duration: 1400 });
   ScrollReveal().reveal('.fourweb', { delay: 500, duration: 1400 });
}

else {
   // alert('More than 960');
   ScrollReveal().reveal('.oneline', { delay: 700, duration: 1500 });
   ScrollReveal().reveal('.twoline', { delay: 1700, duration: 1500 });
   ScrollReveal().reveal('.threeline', { delay: 2700, duration: 1500 });
   ScrollReveal().reveal('.fourline', { delay: 1200, duration: 1500 });
   ScrollReveal().reveal('.fiveline', { delay: 2200, duration: 1500 });
   ScrollReveal().reveal('.sixline', { delay: 3200, duration: 1500 });

   ScrollReveal().reveal('.oneweb', { delay: 1000, duration: 1500 });
   ScrollReveal().reveal('.twoweb', { delay: 2000, duration: 1500 });
   ScrollReveal().reveal('.threeweb', { delay: 1500, duration: 1500 });
   ScrollReveal().reveal('.fourweb', { delay: 2500, duration: 1500 });
}

/* SCROLL REVEAL (end) */