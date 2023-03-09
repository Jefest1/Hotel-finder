const navbarToggler = document.querySelector('.navbar-toggler');
const navbarCollapse = document.querySelector('.navbar-collapse');

navbarToggler.addEventListener('click', () => {
    navbarCollapse.classList.toggle('show');
});

// Activate the carousel
$('#hotelsCarousel').carousel();

// Enable carousel controls
$('.carousel-control-prev').click(function() {
    $('#hotelsCarousel').carousel('prev');
});

$('.carousel-control-next').click(function() {
    $('#hotelsCarousel').carousel('next');
});


// Add active class to the navigation button on slide change
$('#heroCarousel').on('slide.bs.carousel', function(e) {
    var active = e.relatedTarget.getAttribute('data-slide-to');
    $('.hero-navigation a').removeClass('active');
    $('.hero-navigation a[data-slide-to="' + active + '"]').addClass('active');
});