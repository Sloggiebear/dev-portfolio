require('../../resources/js/bootstrap');

console.log("bitch");

//Change nav style on scroll
window.addEventListener('scroll', event => {
    let nav = document.querySelector('nav');
    (window.scrollY >= 50) ? nav.classList.add('dark') : nav.classList.remove('dark');
})