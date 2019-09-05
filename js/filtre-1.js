// MOUSEOVER - AFFICHAGE (start)

var x = document.querySelectorAll('.test');
x[0].addEventListener('mouseover', refresh4);

var x = document.querySelectorAll('.test');
x[1].addEventListener('mouseover', refresh1);

var x = document.querySelectorAll('.test');
x[2].addEventListener('mouseover', refresh2);

var x = document.querySelectorAll('.test');
x[3].addEventListener('mouseover', refresh3);


// MOUSEOVER - AFFICHAGE (end)


// ONCLICK - AFFICHAGE (start)

var y = document.querySelectorAll('.test');
y[0].addEventListener('click', refresh4);

var y = document.querySelectorAll('.test');
y[1].addEventListener('click', refresh1);

var y = document.querySelectorAll('.test');
y[2].addEventListener('click', refresh2);

var y = document.querySelectorAll('.test');
y[3].addEventListener('click', refresh3);

// ONCLICK - AFFICHAGE (end)


// FONCTIONS (start)

function refresh4() {
   event.preventDefault();
   document.querySelector('.new-test-21').style.display="flex";
   document.querySelector('.new-test-22').style.display="none";
   document.querySelector('.new-test-23').style.display="none";
   document.querySelector('.new-test-24').style.display="none";
   document.querySelectorAll('.test')[0].classList.add('filtre-1');
   document.querySelectorAll('.test')[0].classList.remove('filtre-2');
   document.querySelectorAll('.test')[1].classList.remove('filtre-active');
   document.querySelectorAll('.test')[2].classList.remove('filtre-active');
   document.querySelectorAll('.test')[3].classList.remove('filtre-active');
}

function refresh1() {
   event.preventDefault();
   document.querySelector('.new-test-21').style.display="none";
   document.querySelector('.new-test-22').style.display="flex";
   document.querySelector('.new-test-23').style.display="none";
   document.querySelector('.new-test-24').style.display="none";
   document.querySelectorAll('.test')[1].classList.add('filtre-active');
   document.querySelectorAll('.test')[0].classList.remove('filtre-1');
   document.querySelectorAll('.test')[0].classList.add('filtre-2');
   document.querySelectorAll('.test')[2].classList.remove('filtre-active');
   document.querySelectorAll('.test')[3].classList.remove('filtre-active');
}

function refresh2() {
   event.preventDefault();
   document.querySelector('.new-test-21').style.display="none";
   document.querySelector('.new-test-22').style.display="none";
   document.querySelector('.new-test-23').style.display="flex";
   document.querySelector('.new-test-24').style.display="none";
   document.querySelectorAll('.test')[0].classList.remove('filtre-1');
   document.querySelectorAll('.test')[0].classList.add('filtre-2');
   document.querySelectorAll('.test')[1].classList.remove('filtre-active');
   document.querySelectorAll('.test')[2].classList.add('filtre-active');
   document.querySelectorAll('.test')[3].classList.remove('filtre-active');
}

function refresh3() {
   event.preventDefault();
   document.querySelector('.new-test-21').style.display="none";
   document.querySelector('.new-test-22').style.display="none";
   document.querySelector('.new-test-23').style.display="none";
   document.querySelector('.new-test-24').style.display="flex";
   document.querySelectorAll('.test')[3].classList.add('filtre-active');
   document.querySelectorAll('.test')[1].classList.remove('filtre-active');
   document.querySelectorAll('.test')[2].classList.remove('filtre-active');
   document.querySelectorAll('.test')[0].classList.remove('filtre-1');
   document.querySelectorAll('.test')[0].classList.add('filtre-2');
}


// FONCTIONS (end)
