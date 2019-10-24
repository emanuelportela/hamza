// MOUSEOVER - AFFICHAGE (start)

var x = document.querySelectorAll('.test');
x[0].addEventListener('mouseover', filtre1);

var x = document.querySelectorAll('.test');
x[1].addEventListener('mouseover', filtre2);

var x = document.querySelectorAll('.test');
x[2].addEventListener('mouseover', filtre3);


// MOUSEOVER - AFFICHAGE (end)


// ONCLICK - AFFICHAGE (start)

var y = document.querySelectorAll('.test');
y[0].addEventListener('click', filtre1);

var y = document.querySelectorAll('.test');
y[1].addEventListener('click', filtre2);

var y = document.querySelectorAll('.test');
y[2].addEventListener('click', filtre3);

// ONCLICK - AFFICHAGE (end)


// FONCTIONS (start)

function filtre1() {
   event.preventDefault();
   document.querySelector('.bug-un').style.display="flex";
   document.querySelector('.bug-deux').style.display="none";
   document.querySelector('.bug-trois').style.display="none";
   document.querySelectorAll('.test')[0].classList.add('filtre-1');
   document.querySelectorAll('.test')[0].classList.remove('filtre-2');
   document.querySelectorAll('.test')[1].classList.remove('filtre-active');
   document.querySelectorAll('.test')[2].classList.remove('filtre-active');
   console.log('Hello 1');
}

function filtre2() {
   event.preventDefault();
   document.querySelector('.bug-un').style.display="none";
   document.querySelector('.bug-deux').style.display="flex";
   document.querySelector('.bug-trois').style.display="none";
   document.querySelectorAll('.test')[1].classList.add('filtre-active');
   document.querySelectorAll('.test')[0].classList.remove('filtre-1');
   document.querySelectorAll('.test')[0].classList.add('filtre-2');
   document.querySelectorAll('.test')[2].classList.remove('filtre-active');
   console.log('Hello 2');
}

function filtre3() {
   event.preventDefault();
   document.querySelector('.bug-un').style.display="none";
   document.querySelector('.bug-deux').style.display="none";
   document.querySelector('.bug-trois').style.display="flex";
   document.querySelectorAll('.test')[2].classList.add('filtre-active');
   document.querySelectorAll('.test')[1].classList.remove('filtre-active');
   document.querySelectorAll('.test')[0].classList.remove('filtre-1');
   document.querySelectorAll('.test')[0].classList.add('filtre-2');
   console.log('Hello 3');
}

// FONCTIONS (end)