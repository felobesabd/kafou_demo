@extends('layouts.app')

@section('head')
    <title>Kafou</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
@endsection

@section('content')
    {{--<div class="scrollify main-section division-section">
        <div class="text-content careers-text-content">
            <h2 class="careers-title">Careers</h2>
            <ul>
                <li class="careers-links">
                    <a>Job Openings</a>
                </li>

                <li class="careers-links">
                    <a>Direct Apply</a>
                </li>
            </ul>
        </div>
        <div class="media-content">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/medical_6.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>--}}

    @php
        $keys = \App\Helpers\PageContentHelper::getPageContent('home');
        $partnersImages = [];
        foreach ($keys as $key => $value) {
            if (strpos($key, 'our_partners_images') !== false) {
                $decoded = json_decode($value, true);
                if (is_array($decoded)) {
                    foreach ($decoded as $img) {
                        $partnersImages[] = $img;
                    }
                } else {
                    $partnersImages[] = $value;
                }
            }
        }

        $clientsImages = [];
        foreach ($keys as $key => $value) {
            if (strpos($key, 'our_clients_images') !== false) {
                $decoded = json_decode($value, true);
                if (is_array($decoded)) {
                    foreach ($decoded as $img) {
                        $clientsImages[] = $img;
                    }
                } else {
                    $clientsImages[] = $value;
                }
            }
        }
    @endphp
    <!-- Full Screen Video Section -->
    <div class="scrollify main-section fullscreen-section">
        <div class="overlay"></div>
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/kafou-medical-video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h3 class="section-title">
            {!! strip_tags($keys['section_welcome_title'] ?? 'Welcome to Kafou Medical', '<b><i><span><strong><em>') !!}
        </h3>
        <div class="welcome-main-title">
            {!! strip_tags($keys['section_welcome_paragraph'] ?? 'Empowering Global Healthcare in the GCC
            We connect leading medical brands with the region’s most trusted providers.', '<b><i><span><strong><em>') !!}
        </div>
        <a href="{{ url('/welcome-kafou') }}" class="cta-button">
            {!! strip_tags($keys['section_welcome_button'] ?? 'Mission & Vision', '<b><i><span><strong><em>') !!}
        </a>
    </div>

    <div class="scrollify main-section red-split-section main-section-green">
        <!-- Mobile layout -->
        <div class="logo-mobile-center d-md-none text-center pt-4">
            <img class="img-fluid" src="assets/images/kafou_white_logo.png" alt="Kafou Medical Logo" style="max-width: 90px;">
        </div>
        <div class="mobile-bottom-content d-md-none">
            <h2 class="section-title text-start">Why Kafou Medical?</h2>
            <a href="{{ url('/why-kafou') }}" class="cta-button text-dark">Read More</a>
        </div>

        <!-- Desktop layout -->
        <div class="text-content d-none d-md-flex">
            <h2 class="section-title">Why Kafou Medical</h2>
            <a href="{{ url('/why-kafou') }}" class="cta-button text-dark">Read More</a>
        </div>
        <div class="media-content-red d-none d-md-block">
            <div class="logo-wrapper">
                <img class="img-fluid" src="assets/images/kafou_white_logo.png" alt="Kafou Medical Logo" />
            </div>
        </div>
    </div>

    <!-- Strategy Section (Second Section) -->
    {{--<div class="scrollify main-section fullscreen-section">
        <div class="overlay"></div>
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/kafou-medical-video-2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h3 class="section-title">Why Kafou Medical?</h3>
        <a href="{{ url('/why-kafou') }}" class="cta-button">Read More</a>
    </div>--}}

    <!-- Dribbble Section (forth Section) Division -->
    {{--<div class="scrollify main-section dribbble-section">
        <div class="text-content">
            <h4 class="section-title">Divisions</h4>
            <a href="#" class="cta-button text-dark">More</a>
        </div>
        <div class="media-content">
            <div class="icon_box">
                <a href="#">
                    <img src="{{ asset('assets/images/Anethesia.png') }}" alt="Anethesia Image">
                </a>
            </div>
            <div class="icon_box">
                <a href="#">
                    <img src="{{ asset('assets/images/Surgery.png') }}" alt="Surgery Image">
                </a>
            </div>
            <div class="icon_box">
                <a href="#">
                    <img src="{{ asset('assets/images/IVF & Genetics.png') }}" alt="IVF & Genetics Image">
                </a>
            </div>
            <div class="icon_box">
                <a href="#">
                    <img src="{{ asset('assets/images/Respiratory.png') }}" alt="Respiratory Image">
                </a>
            </div>
            <div class="icon_box">
                <a href="#">
                    <img src="{{ asset('assets/images/sleep disoprders.png') }}" alt="Sleep Disorders Image">
                </a>
            </div>
            <div class="icon_box">
                <a href="#">
                    <img src="{{ asset('assets/images/Nursing & ICU.png') }}" alt="Nursing and ICU Image">
                </a>
            </div>
        </div>
    </div>--}}

    <div class="scrollify main-section fullscreen-section">
        <div class="overlay"></div>
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/anesthsia.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h4>Divisions</h4>
        <h3 class="section-title highlight-underline">Anesthesia</h3>
        <a href="{{ url('/') }}" class="cta-button">Read More</a>
    </div>

    <div class="scrollify main-section fullscreen-section">
        <div class="overlay"></div>
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/surgry.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h4>Divisions</h4>
        <h3 class="section-title highlight-underline">Surgery</h3>
        <a href="{{ url('/') }}" class="cta-button">Read More</a>
    </div>

    <div class="scrollify main-section fullscreen-section">
        <div class="overlay"></div>
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/ivf&genetics.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h4>Divisions</h4>
        <h3 class="section-title highlight-underline">LAB Solutions</h3>
        <a href="{{ url('/') }}" class="cta-button">Read More</a>
    </div>

    <div class="scrollify main-section fullscreen-section">
        <div class="overlay"></div>
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/respiratory.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h4>Divisions</h4>
        <h3 class="section-title highlight-underline">Respiratory</h3>
        <a href="{{ url('/') }}" class="cta-button">Read More</a>
    </div>

    <div class="scrollify main-section fullscreen-section">
        <div class="overlay" style="background-color: rgb(75 75 75 / 31%);"></div>
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/sleep&disorders.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h4>Divisions</h4>
        <h3 class="section-title highlight-underline">Sleep Disoprders</h3>
        <a href="{{ url('/') }}" class="cta-button">Read More</a>
    </div>

    <div class="scrollify main-section fullscreen-section">
        <div class="overlay"></div>
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/nursing&ICU.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h4>Divisions</h4>
        <h3 class="section-title highlight-underline">Nursing & ICU</h3>
        <a href="{{ url('/') }}" class="cta-button">Read More</a>
    </div>

    {{--<div class="scrollify main-section division-section">
        <div class="text-content">
            <img class="img-division" src="{{ asset('assets/images/Surgery.png') }}" alt="Surgery Image">
            <h4 class="section-title">Divisions</h4>
            <a href="#" class="cta-button text-dark">More</a>
        </div>
        <div class="media-content">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/surgry.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="scrollify main-section division-section">
        <div class="text-content">
            <img class="img-division" src="{{ asset('assets/images/IVF & Genetics.png') }}" alt="IVF & Genetics Image">
            <h4 class="section-title">Divisions</h4>
            <a href="#" class="cta-button text-dark">More</a>
        </div>
        <div class="media-content">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/ivf&genetics.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="scrollify main-section division-section">
        <div class="text-content">
            <img class="img-division" src="{{ asset('assets/images/Respiratory.png') }}" alt="Respiratory Image">
            <h4 class="section-title">Divisions</h4>
            <a href="#" class="cta-button text-dark">More</a>
        </div>
        <div class="media-content">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/respiratory.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="scrollify main-section division-section">
        <div class="text-content">
            <img class="img-division" src="{{ asset('assets/images/sleep disoprders.png') }}" alt="Sleep Disorders Image">
            <h4 class="section-title">Divisions</h4>
            <a href="#" class="cta-button text-dark">More</a>
        </div>
        <div class="media-content">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/sleep&disorders.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="scrollify main-section division-section">
        <div class="text-content">
            <img class="img-division" src="{{ asset('assets/images/Nursing & ICU.png') }}" alt="Nursing and ICU Image">
            <h4 class="section-title">Divisions</h4>
            <a href="#" class="cta-button text-dark">More</a>
        </div>
        <div class="media-content">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/nursing&ICU.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>--}}

    <!-- Stats Section -->
    <div class="scrollify main-section stats-section">
        <video class="stats-bg-video" autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/medical_6.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="stats-overlay"></div>
        <div class="stats-content">
            <div class="row justify-content-center text-center">
                <div class="col-6 col-md-3 col-lg-3 mb-4 mb-md-0">
                    <div class="stats-number countup" data-count="512">0</div>
                    <div class="stats-label">HAPPY CLIENTS</div>
                </div>
                <div class="col-6 col-md-3 col-lg-3 mb-4 mb-md-0">
                    <div class="stats-number countup" data-count="13493">0</div>
                    <div class="stats-label">SUCCESSFULLY<br>FULFILLED ORDERS</div>
                </div>
                <div class="col-6 col-md-3 col-lg-3">
                    <div class="stats-number countup" data-count="3">0</div>
                    <div class="stats-label">OFFICES IN KSA</div>
                </div>
                <div class="col-6 col-md-3 col-lg-3">
                    <div class="stats-number countup" data-count="3">0</div>
                    <div class="stats-label">WAREHOUSES</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Partners and Clients Sections (show-images-section) -->
    <div class="scrollify main-section show-images-section white-logo-theme">
        <div class="container carousel-content">
            <div class="row align-items-center">
                <div class="carousel-text">
                    <h2 class="carousel-title">{!! strip_tags($keys['our_partners_title'] ?? 'Our Partners', '<b><i><span><strong><em>') !!}</h2>
                    <a href="#" class="cta-button">
                        {!! strip_tags($keys['our_partners_button'] ?? 'View More', '<b><i><span><strong><em>') !!}
                    </a>
                </div>
                <div class="carousel-container">
                    <div class="single-carousel">
                        <img id="carousel-image" src="{{ isset($partnersImages[0]) ? asset('storage/' . $partnersImages[0]) : '' }}" alt="Partner">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="scrollify main-section show-images-section white-logo-theme">
        <div class="container carousel-content">
            <div class="row align-items-center">
                <div class="carousel-text">
                    <h2 class="carousel-title">{!! strip_tags($keys['our_clients_title'] ?? 'Our Clients', '<b><i><span><strong><em>') !!}</h2>
                    <a href="#" class="cta-button">
                        {!! strip_tags($keys['our_clients_button'] ?? 'View More', '<b><i><span><strong><em>') !!}
                    </a>
                </div>
                <div class="carousel-container">
                    <div class="single-carousel">
                        <img id="carousel-image-clients" src="{{ isset($clientsImages[0]) ? asset('storage/' . $clientsImages[0]) : '' }}" alt="Client">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Showcase Section (Section Seven) -->
    <div class="scrollify main-section split-section">
        <div class="text-content">
            <h2 class="section-title">Ethics & Compliance</h2>
            <p class="section-description">
                Kafou Medical is very committed in fair business practices and we are fully aware of
                the importance that behaving fairly will reflect on our partners’ reputation.
            </p>
            <a href="#" class="cta-button text-dark">Read More</a>
        </div>
        <div class="media-content">
            <div class="logo-wrapper">
                <img class="" src="assets/images/kafou_white_logo.png" alt="Kafou Medical Logo" />
            </div>
        </div>
    </div>

    <div class="scrollify main-section red-split-section main-section-green">
        <!-- Mobile layout -->
        <div class="logo-mobile-center d-md-none text-center pt-4">
            <h2 class="careers-header">Careers</h2>
        </div>
        <div class="mobile-bottom-content careers-buttons d-md-none">
            <a href="{{ url('/') }}" class="cta-button text-dark">Job Openings</a>
            <a href="{{ url('/') }}" class="cta-button text-dark">Direct Apply</a>
        </div>

        <!-- Desktop layout -->
        <div class="text-content d-none d-md-flex">
            <h2 class="section-title">Careers</h2>
            <ul>
                <li class="careers-links">
                    <a href="{{ url('/') }}" style="color: #757272;">Job Openings</a>
                </li>

                <li class="careers-links">
                    <a href="{{ url('/') }}" style="color: #757272;">Direct Apply</a>
                </li>
            </ul>
        </div>
        <div class="media-content-red d-none d-md-block">
            <div class="logo-wrapper">
                <h2 class="careers-header">Careers</h2>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-scrollify@1.0.21/jquery.scrollify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        function animateCountUp(el, target, duration = 2000) {
            let start = 0;
            let startTime = null;

            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                let progress = Math.min((timestamp - startTime) / duration, 1);
                el.textContent = Math.floor(progress * (target - start) + start);
                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    el.textContent = target;
                }
            }

            requestAnimationFrame(step);
        }

        document.addEventListener('DOMContentLoaded', function () {
            const counters = document.querySelectorAll('.countup');
            let animated = false;

            function runAnimation() {
                if (animated) return;
                counters.forEach(counter => {
                    animateCountUp(counter, parseInt(counter.getAttribute('data-count')));
                });
                animated = true;
            }

            const statsSection = document.querySelector('.stats-section');
            if ('IntersectionObserver' in window && statsSection) {
                const observer = new IntersectionObserver((entries) => {
                    if (entries[0].isIntersecting) {
                        runAnimation();
                        observer.disconnect();
                    }
                }, {threshold: 0.3});
                observer.observe(statsSection);
            } else {
                runAnimation();
            }
        });

        // Dynamically generated images array from backend
        const images = [
            @foreach($partnersImages as $img)
                "{{ asset('storage/' . $img) }}",
            @endforeach
        ];

        let currentIndexPartners = 0;
        const imageEl = document.getElementById("carousel-image");

        function rotatePartners() {
            if (!images.length) return;
            currentIndexPartners = (currentIndexPartners + 1) % images.length;
            imageEl.style.opacity = 0;
            setTimeout(() => {
                imageEl.src = images[currentIndexPartners];
                imageEl.style.opacity = 1;
            }, 300); // fade out/in effect
        }

        setInterval(rotatePartners, 3000); // Change every 3 seconds


        const imagesClients = [
            @foreach($clientsImages as $img)
                "{{ asset('storage/' . $img) }}",
            @endforeach
        ];

        let currentIndexClients = 0;
        const imageElClients = document.getElementById("carousel-image-clients");

        function rotateClients() {
            if (!imagesClients.length) return;
            currentIndexClients = (currentIndexClients + 1) % imagesClients.length;
            imageElClients.style.opacity = 0;
            setTimeout(() => {
                imageElClients.src = imagesClients[currentIndexClients];
                imageElClients.style.opacity = 1;
            }, 500);
        }

        setInterval(rotateClients, 3000);
    </script>
@endsection
