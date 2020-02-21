// SIDEBAR 
const sideNav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sideNav);

// CAROUSEL
const slider = document.querySelectorAll('.slider');
M.Slider.init(slider, {
    indicators: false,
    fullWidth: true,
    // height: 500,
    duration: 400,
    interval: 3000
});

$('.carousel').carousel()
