//Change nav style on scroll
window.addEventListener('scroll', event => {
    let nav = document.querySelector('nav');
    let button = document.getElementById('start-button'); 
    let clipper = document.querySelector('.section-header');

    (window.scrollY >= 50) ? nav.classList.add('dark') : nav.classList.remove('dark');
    (window.scrollY >= 50) ? button.classList.add('btn-outline-light') : button.classList.remove('btn-outline-light');
    (window.scrollY <= 50) ? button.classList.add('btn-dark') : button.classList.remove('btn-dark');
    (window.scrollY >= 50) ? clipper.classList.add('straight-clip') : clipper.classList.remove('straight-clip');
})

//Show logo text on mouseover
let brandimage = document.getElementById('brand-image');
let brandtext = document.getElementById("brand-text"); 

brandimage.addEventListener('mouseover', event => {
    brandtext.classList.toggle('invisible');
    
})
brandimage.addEventListener('mouseout', event => {
    brandtext.classList.toggle('invisible');
})

// Draw the wordpress logo when the section intersects
const el = document.getElementById("wordpress-drawing");


const options = {
    root: null,
    threshold: 0,
    rootMargin: "100px"
};

const observer = new IntersectionObserver(function(entries, 
    observer) {
        entries.forEach (entry => {
            console.log("el", el);
            entry.target.classList.toggle('draw-in');
        });
}, options);

observer.observe(el);



