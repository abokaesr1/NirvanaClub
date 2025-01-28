// smooth scrool animcation
gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

//get the navigation bar ids dynamically
const navbarIds = Array.from(document.querySelectorAll('.navbar-nav li a')).map(a => a.getAttribute('href').substring(1));

console.log(navbarIds);
let clickedButton = document.querySelector('.navbar-nav li a');

// smooth scroll to the section when a navigation bar item is clicked
navbarIds.forEach(id => {
    clickedButton.addEventListener('click', (e) => {
        smother.scrollTo(id,false,'center center')
    });
})
