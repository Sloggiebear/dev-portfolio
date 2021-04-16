require('../../resources/js/bootstrap');

//Change nav style on scroll
window.addEventListener('scroll', event => {
    let nav = document.querySelector('nav');
    let button = document.getElementById('start');
    (window.scrollY >= 50) ? nav.classList.add('dark') : nav.classList.remove('dark');
    (window.scrollY >= 50) ? button.classList.add('btn-outline-light') : button.classList.remove('btn-outline-light');
    (window.scrollY <= 50) ? button.classList.add('btn-dark') : button.classList.remove('btn-dark');
})


//Show logo text on mouseover
var brandimage = document.getElementById("brand-image");
var brandtext = document.getElementById("brand-text");

brandimage.addEventListener('mouseover', event => {
    brandtext.classList.toggle('invisible');
})
brandimage.addEventListener('mouseout', event => {
    brandtext.classList.toggle('invisible');
})

