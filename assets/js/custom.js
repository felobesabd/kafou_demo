const hamburger = document.getElementById('hamburger');
const sidebarClose = document.getElementById('sidebarClose');
const navigation = document.getElementById('navigation');
const overlay = document.querySelector('.navigation-overlay');

function toggleMenu() {
    navigation.classList.toggle('active');
    document.body.classList.toggle('menu-open');
}

function closeMenu() {
    navigation.classList.remove('active');
    document.body.classList.remove('menu-open');
}

// Toggle navigation menu when hamburger is clicked
hamburger.addEventListener('click', toggleMenu);

// Close menu when clicking overlay
overlay.addEventListener('click', closeMenu);

sidebarClose.addEventListener('click', closeMenu);

// Close menu when clicking navigation links
const navLinks = document.querySelectorAll('.nav-item-primary, .nav-item-secondary');
navLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
});

// Close menu on escape key
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        closeMenu();
    }
});

// Prevent body scroll when scrolling inside menu
const navigationNav = document.querySelector('.navigation-nav');
navigationNav.addEventListener('wheel', function(e) {
    e.stopPropagation();
}, { passive: true });

$(document).ready(function() {
    $.scrollify({
        section: ".scrollify",
        sectionName: "section-name",
        easing: "easeOutExpo",
        scrollSpeed: 1100,
        offset: 0,
        scrollbars: true,
        standardScrollElements: "",
        setHeights: true,
        overflowScroll: true,
        updateHash: false,
        touchScroll: true,
        before: function(index, sections) {
            // Add active class to current section
            $(sections[index]).addClass('active').siblings().removeClass('active');

            // Handle header background and button colors
            const $header        = $('header');
            const $categoriesBtn = $('.categories-btn');
            const $menuToggle    = $('.menu-toggle');
            const $headerDriver  = $('.header-divider');
            const $logoImg       = $('#main-logo');

            if ($(sections[index]).hasClass('dribbble-section') || $(sections[index]).hasClass('why-split-section')) {
                $categoriesBtn.addClass('dark-color');
                $menuToggle.addClass('dark-color');
                $headerDriver.addClass('dark-color');
                $logoImg.attr('src', 'assets/images/kafou-logo.png');
            } else if ($(sections[index]).hasClass('red-split-section') || $(sections[index]).hasClass('footer-wrapper') || $(sections[index]).hasClass('fullscreen-section') || $(sections[index]).hasClass('showcase-section')) {
                $logoImg.attr('src', 'assets/images/kafou.png');
                $categoriesBtn.removeClass('dark-color');
                $menuToggle.removeClass('dark-color');
                $headerDriver.removeClass('dark-color');
            } else {
                $categoriesBtn.removeClass('dark-color');
                $menuToggle.removeClass('dark-color');
                $headerDriver.removeClass('dark-color');
                $logoImg.attr('src', 'assets/images/kafou-logo.png');
            }
        },
        after: function() {},
        afterResize: function() {
            $.scrollify.update();
        },
        afterRender: function() {
            // Add active class to first section on load
            $('.scrollify').first().addClass('active');

            // Check initial section for header styling
            const $currentSection = $('.scrollify.active');
            const $header = $('header');
            const $categoriesBtn = $('.categories-btn');
            const $menuToggle = $('.menu-toggle');
            const $logoImg = $('#main-logo');

            if ($currentSection.hasClass('dribbble-section')) {
                $header.addClass('dark-bg');
                $categoriesBtn.addClass('dark-color');
                $menuToggle.addClass('dark-color');
                $logoImg.attr('src', 'assets/images/kafou-logo.png');
            } else if ($currentSection.hasClass('footer-wrapper') || $currentSection.hasClass('fullscreen-section')) {
                $logoImg.attr('src', 'assets/images/kafou.png');
            } else {
                $header.removeClass('dark-bg');
                $categoriesBtn.removeClass('dark-color');
                $menuToggle.removeClass('dark-color');
                $logoImg.attr('src', 'assets/images/kafou-logo.png');
            }

            $.scrollify.update();
        }
    });

    // Force an update after all content is loaded
    window.addEventListener('load', function() {
        $.scrollify.update();
    });
});

// auto-play carousel
function createCarousel(carouselId, interval = 3000) {
    let currentPosition = 3;
    const totalPositions = 5;
    const carousel = document.getElementById(carouselId);

    function updateCarouselPosition() {
        if (carousel) {
            carousel.style.setProperty('--position', currentPosition);
        }
    }

    function moveToNextPosition() {
        currentPosition = currentPosition >= totalPositions ? 1 : currentPosition + 1;
        updateCarouselPosition();
    }

    // Initialize carousel position
    updateCarouselPosition();

    // Start automatic movement
    let autoPlayTimer = setInterval(moveToNextPosition, interval);

    // Pause on hover
    const carouselContainer = carousel?.closest('.carousel-container');
    if (carouselContainer) {
        carouselContainer.addEventListener('mouseenter', () => {
            clearInterval(autoPlayTimer);
        });

        carouselContainer.addEventListener('mouseleave', () => {
            autoPlayTimer = setInterval(moveToNextPosition, interval);
        });
    }

    return {
        pause: () => clearInterval(autoPlayTimer),
        resume: () => {
            clearInterval(autoPlayTimer);
            autoPlayTimer = setInterval(moveToNextPosition, interval);
        }
    };
}

// Initialize both carousels with different intervals
const partnerCarouselVertically = createCarousel('main-carousel-vertically', 2000); // 3 seconds
const partnersCarousel = createCarousel('main-carousel-partners', 2000); // 3.5 seconds
const clientsCarousel = createCarousel('main-carousel', 2000); // 3 seconds
/*-----------------------------------Section Show Images-----------------------------------------------*/
const images = [
    "Uploads/Partners/b7c561f3-4f54-42f6-8197-edd960312bce.png",
    "Uploads/Partners/e0b97ea9-8016-4f58-87fa-9ca21541be26.png",
    "Uploads/Partners/d64a3c62-d5ca-421c-9fe2-b50b0c78fd07.png",
    "Uploads/Partners/c5688d94-1442-49fd-aa76-61c2893dfe1f.png",
    "Uploads/Partners/94d89293-92a3-4e69-bf4b-bcfae1e52865.png"
];

let currentIndex = 0;
const imageEl = document.getElementById("carousel-image");

setInterval(() => {
    currentIndex = (currentIndex + 1) % images.length;
    imageEl.style.opacity = 0;

    setTimeout(() => {
        imageEl.src = images[currentIndex];
        imageEl.style.opacity = 1;
    }, 500);
}, 3000);