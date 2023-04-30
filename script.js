window.addEventListener('DOMContentLoaded', event => {

    // Navbar color change function
    var navbarColorChange = function() {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-bg')
        } else {
            navbarCollapsible.classList.add('navbar-bg')
        }
    };

    // Change navbar color on page load
    navbarColorChange();

    // Change navbar color when page is scrolled
    document.addEventListener('scroll', navbarColorChange);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function(responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    // Activate SimpleLightbox plugin for portfolio items
    new SimpleLightbox({
        elements: '#portfolio a.portfolio-box'
    });

});



// animations
$(window).scroll(function() {
    $('.card.animated').each(function() {
        var offset = $(this).offset().top;
        var height = $(this).outerHeight();
        var scrollTop = $(window).scrollTop();
        var windowHeight = $(window).height();

        if (scrollTop + windowHeight > offset && scrollTop < offset + height) {
            $(this).addClass('visible');
        }
    });
});


const btn = document.querySelector('.show-modal');
const modal = document.querySelector('.modal');
const modalCollapse = document.querySelector('.modal-collapse');
const overlay = document.querySelector('.overlay');

//function to display modal
function showModal() {
    overlay.classList.remove('modal-hidden');
    modal.classList.remove('modal-hidden');
}

//function to collapse modal
function collapseModal() {
    overlay.classList.add('modal-hidden');
    modal.classList.add('modal-hidden');
}

// Events for modal
btn.addEventListener('click', showModal);
modalCollapse.addEventListener('click', collapseModal)