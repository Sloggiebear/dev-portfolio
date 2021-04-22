require('../../resources/js/bootstrap');

//Change nav style on scroll
window.addEventListener('scroll', event => {
    let nav = document.querySelector('nav');
    let button = document.getElementById('start-button');
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

// Draw the wordpress logo when the section intersects
const el = document.querySelector('#wordpress-drawing');
// console.log(el);

const options = {
    root: null,
    threshold: 0,
    rootMargin: "-100px"
};

const observer = new IntersectionObserver(function(entries, 
    observer) {
        entries.forEach (entry => {
            entry.target.classList.toggle('draw-in');
        });
}, options);

observer.observe(el);
// function draw(id) {
//     let el = document.querySelector(id);
//     el.classList.toggle('draw-in');
// }


