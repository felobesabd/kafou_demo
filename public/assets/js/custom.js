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

// Improved Scrollify Implementation
let scrollifyInitialized = false;
let scrollifyRetryCount = 0;
const maxRetries = 3;

function updateHeaderForSection($section) {
    if (!$section || !$section.length) return;

    const $header        = $('header');
    const $categoriesBtn = $('.categories-btn');
    const $menuToggle    = $('.menu-toggle');
    const $headerDriver  = $('.header-divider');
    const $logoImg       = $('#main-logo');

    const hasDarkTheme = $section.hasClass('dribbble-section');
    const hasLightLogoOnly = $section.hasClass('footer-wrapper')
        || $section.hasClass('fullscreen-section') || $section.hasClass('white-logo-theme')
        || $section.hasClass('stats-section');

    const hasDarkThemeAndLogoWhite = $section.hasClass('logo-white-dark-theme');

    if (hasDarkTheme) {
        $categoriesBtn.addClass('dark-color');
        $menuToggle.addClass('dark-color');
        $headerDriver.addClass('dark-color');
        $logoImg.attr('src', 'assets/images/kafou_green_logo.png');
    } else if (hasLightLogoOnly) {
        $logoImg.attr('src', 'assets/images/kafou_white_logo.png');
        $categoriesBtn.removeClass('dark-color');
        $menuToggle.removeClass('dark-color');
        $headerDriver.removeClass('dark-color');
    } else if (hasDarkThemeAndLogoWhite) {
        $categoriesBtn.addClass('dark-color');
        $menuToggle.addClass('dark-color');
        $headerDriver.addClass('dark-color');
        $logoImg.attr('src', 'assets/images/kafou_white_logo.png');
    } else {
        $categoriesBtn.removeClass('dark-color');
        $menuToggle.removeClass('dark-color');
        $headerDriver.removeClass('dark-color');
        $logoImg.attr('src', 'assets/images/kafou_green_logo.png');
    }
}

function initializeScrollify() {
    // Check if scrollify is available
    if (typeof $.scrollify === 'undefined') {
        console.warn('Scrollify plugin not loaded');
        return false;
    }

    // Check if we have sections to scroll
    const sections = document.querySelectorAll('.scrollify');
    if (sections.length === 0) {
        console.warn('No scrollify sections found');
        return false;
    }

    // Check if all critical elements are loaded
    const criticalElements = document.querySelectorAll('header, .scrollify');
    const allElementsLoaded = Array.from(criticalElements).every(el => el.offsetHeight > 0);

    if (!allElementsLoaded) {
        console.log('Critical elements not fully loaded, retrying...');
        return false;
    }

    try {
        // Destroy existing scrollify instance if it exists
        if (scrollifyInitialized) {
            $.scrollify.destroy();
        }

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
                const $section = $(sections[index]);
                updateHeaderForSection($section);
            },
            after: function() {},
            afterResize: function() {
                if (scrollifyInitialized) {
                    $.scrollify.update();
                }
            },
            afterRender: function() {
                // Add active class to first section on load
                const $currentSection = $('.scrollify').first().addClass('active');
                updateHeaderForSection($currentSection);

                // Mark as initialized
                scrollifyInitialized = true;
                console.log('Scrollify initialized successfully');

                // Final update after everything is set
                setTimeout(() => {
                    if (scrollifyInitialized) {
                        $.scrollify.update();
                    }
                }, 100);
            }
        });

        return true;
    } catch (error) {
        console.error('Error initializing scrollify:', error);
        return false;
    }
}

function attemptScrollifyInitialization() {
    if (scrollifyRetryCount >= maxRetries) {
        console.error('Failed to initialize scrollify after', maxRetries, 'attempts');
        // Fallback to normal scrolling
        enableNormalScrolling();
        return;
    }

    const success = initializeScrollify();
    if (!success) {
        scrollifyRetryCount++;
        setTimeout(attemptScrollifyInitialization, 500);
    }
}

function enableNormalScrolling() {
    console.log('Enabling normal scrolling as fallback');
    // Add smooth scrolling to the page
    document.documentElement.style.scrollBehavior = 'smooth';

    // Add active class to sections on scroll
    window.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('.scrollify');
        const scrollPosition = window.scrollY + window.innerHeight / 2;

        sections.forEach((section, index) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                section.classList.add('active');
                sections.forEach(s => s !== section && s.classList.remove('active'));

                // Update header for current section
                updateHeaderForSection($(section));
            }
        });
    });
}

// Wait for DOM to be ready
$(document).ready(function() {
    // Initial attempt
    attemptScrollifyInitialization();
});

// Wait for all resources to load
window.addEventListener('load', function() {
    // Final attempt after everything is loaded
    setTimeout(() => {
        if (!scrollifyInitialized) {
            attemptScrollifyInitialization();
        } else {
            // Update scrollify after all content is loaded
            $.scrollify.update();
        }
    }, 200);
});

// Handle window resize
let resizeTimeout;
window.addEventListener('resize', function() {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
        if (scrollifyInitialized) {
            $.scrollify.update();
        }
    }, 250);
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

const imagesClients = [
    "Uploads/Clients/Picture3.png",
    "Uploads/Clients/123fa7bc-9ceb-4fb3-8a6e-99038e4e8bcb.png",
    "Uploads/Clients/4c63c42d-3f9f-4cf2-bd1e-31220cb743a2.png",
    "Uploads/Clients/17245826-ca02-42da-a5da-b7d74e21f180.png",
    "Uploads/Clients/851ad61b-067c-4050-911e-f745476d0e3c.png"
];

let currentIndexPartners = 0;
let currentIndexClients = 0;
const imageEl = document.getElementById("carousel-image");
const imageElClients = document.getElementById("carousel-image-clients");

// Function to handle partners carousel
function rotatePartners() {
    currentIndexPartners = (currentIndexPartners + 1) % images.length;
    imageEl.style.opacity = 0;

    setTimeout(() => {
        imageEl.src = images[currentIndexPartners];
        imageEl.style.opacity = 1;
    }, 500);
}

// Function to handle clients carousel
function rotateClients() {
    currentIndexClients = (currentIndexClients + 1) % imagesClients.length;
    imageElClients.style.opacity = 0;

    setTimeout(() => {
        imageElClients.src = imagesClients[currentIndexClients];
        imageElClients.style.opacity = 1;
    }, 500);
}

// Start both carousels
setInterval(rotatePartners, 3000);
setInterval(rotateClients, 3000);
