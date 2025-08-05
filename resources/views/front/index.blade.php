@extends('layouts.app')

@section('head')
    <title>Kafou</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
@endsection

@section('content')
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

    @php
        $sections = \App\Helpers\PageContentHelper::getAllSections();
    @endphp

    @foreach($sections as $section)
        @switch($section->section_key)
            @case('section_1')
                 {{--Welcome Section --}}
                <div class="scrollify main-section fullscreen-section">
                    <div class="overlay"></div>
                    <video autoplay muted loop playsinline>
                        <source src="{{ asset('assets/videos/kafou-medical-video.mp4') }}" type="video/mp4">
                    </video>
                    <h3 class="section-title">
                        {!! strip_tags($section->title, '<b><i><span><strong><em><br><hr>') !!}
                    </h3>
                    <div class="welcome-main-title">
                        {!! strip_tags($section->text, '<b><i><span><strong><em><br><hr>') !!}
                    </div>
                    @if($section->button)
                        <a href="{{ url('/welcome-kafou') }}" class="cta-button">
                            {!! strip_tags($section->button, '<b><i><span><strong><em><br><hr>') !!}
                        </a>
                    @endif
                </div>
                @break

            @case('section_2')
                 {{--Why Kafou Section --}}
                <div class="scrollify main-section red-split-section main-section-green">
                    <div class="logo-mobile-center d-md-none text-center pt-4">
                        <img class="img-fluid" src="assets/images/kafou_white2.png" alt="Kafou Medical Logo" style="max-width: 90px;">
                    </div>
                    <div class="mobile-bottom-content d-md-none">
                        <h2 class="section-title text-start">
                            {!! strip_tags($section->title, '<b><i><span><strong><em><br><hr>') !!}
                        </h2>
                        <a href="{{ url('/why-kafou') }}" class="cta-button text-dark">
                            {!! strip_tags($section->button, '<b><i><span><strong><em><br><hr>') !!}
                        </a>
                    </div>

                    <div class="text-content d-none d-md-flex">
                        <h2 class="section-title">
                            {!! strip_tags($section->title, '<b><i><span><strong><em><br><hr>') !!}
                        </h2>
                        <a href="{{ url('/why-kafou') }}" class="cta-button text-dark">
                            {!! strip_tags($section->button, '<b><i><span><strong><em><br><hr>') !!}
                        </a>
                    </div>
                    <div class="media-content-red d-none d-md-block">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="assets/images/kafou_white2.png" alt="Kafou Medical Logo" />
                        </div>
                    </div>
                </div>
                 @break

            @case('section_3')
                <div class="scrollify main-section fullscreen-section">
                    <div class="overlay"></div>
                    <video autoplay muted loop playsinline>
                        <source src="{{ asset('assets/videos/anesthsia.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h4>{!! strip_tags($section->text, '<b><i><span><strong><em><br><hr>') !!}</h4>
                    <h3 class="section-title highlight-underline">
                        {!! strip_tags($section->title, '<b><i><span><strong><em><br><hr>') !!}
                    </h3>
                    <a href="{{ route('division.anesthesia') }}" class="cta-button">
                        {!! strip_tags($section->button, '<b><i><span><strong><em><br><hr>') !!}
                    </a>
                </div>
                @break

            @case('section_4')
                <div class="scrollify main-section fullscreen-section">
                    <div class="overlay"></div>
                    <video autoplay muted loop playsinline>
                        <source src="{{ asset('assets/videos/surgry.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h4>{!! strip_tags($section->text, '<b><i><span><strong><em><br><hr>') !!}</h4>
                    <h3 class="section-title highlight-underline">
                        {!! strip_tags($section->title, '<b><i><span><strong><em><br><hr>') !!}
                    </h3>
                    <a href="{{ route('division.surgery') }}" class="cta-button">
                        {!! strip_tags($section->button, '<b><i><span><strong><em><br><hr>') !!}
                    </a>
                </div>
                @break

            @case('section_5')
                <div class="scrollify main-section fullscreen-section">
                    <div class="overlay"></div>
                    <video autoplay muted loop playsinline>
                        <source src="{{ asset('assets/videos/ivf&genetics.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h4>{!! strip_tags($section->text, '<b><i><span><strong><em><br><hr>') !!}</h4>
                    <h3 class="section-title highlight-underline">
                        {!! strip_tags($section->title, '<b><i><span><strong><em><br><hr>') !!}
                    </h3>
                    <a href="{{ route('division.lab_solutions') }}" class="cta-button">
                        {!! strip_tags($section->button, '<b><i><span><strong><em><br><hr>') !!}
                    </a>
                </div>
                @break

            @case('section_6')
                <div class="scrollify main-section fullscreen-section">
                    <div class="overlay"></div>
                    <video autoplay muted loop playsinline>
                        <source src="{{ asset('assets/videos/respiratory.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h4>{!! strip_tags($section->text, '<b><i><span><strong><em><br><hr>') !!}</h4>
                    <h3 class="section-title highlight-underline">
                        {!! strip_tags($section->title, '<b><i><span><strong><em><br><hr>') !!}
                    </h3>
                    <a href="{{ route('division.respiratory') }}" class="cta-button">
                        {!! strip_tags($section->button, '<b><i><span><strong><em><br><hr>') !!}
                    </a>
                </div>
                @break

            @case('section_7')
                <div class="scrollify main-section fullscreen-section">
                    <div class="overlay" style="background-color: rgb(75 75 75 / 31%);"></div>
                    <video autoplay muted loop playsinline>
                        <source src="{{ asset('assets/videos/sleep&disorders.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h4>{!! strip_tags($section->text, '<b><i><span><strong><em><br><hr>') !!}</h4>
                    <h3 class="section-title highlight-underline">
                        {!! strip_tags($section->title, '<b><i><span><strong><em><br><hr>') !!}
                    </h3>
                    <a href="{{ route('division.sleep_disorders') }}" class="cta-button">
                        {!! strip_tags($section->button, '<b><i><span><strong><em><br><hr>') !!}
                    </a>
                </div>
                @break

            @case('section_8')
                <div class="scrollify main-section fullscreen-section">
                    <div class="overlay"></div>
                    <video autoplay muted loop playsinline>
                        <source src="{{ asset('assets/videos/nursing&ICU.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h4>{!! strip_tags($section->text, '<b><i><span><strong><em><br><hr>') !!}</h4>
                    <h3 class="section-title highlight-underline">
                        {!! strip_tags($section->title, '<b><i><span><strong><em><br><hr>') !!}
                    </h3>
                    <a href="{{ route('division.nursing_icu') }}" class="cta-button">
                        {!! strip_tags($section->button, '<b><i><span><strong><em><br><hr>') !!}
                    </a>
                </div>
                @break

            @case('section_9')
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
                @break

            @case('section_10')
                <!-- Partners and Clients Sections (show-images-section) -->
                <div class="scrollify main-section show-images-section white-logo-theme">
                    <div class="container carousel-content">
                        <div class="row align-items-center">
                            <div class="carousel-text">
                                <h2 class="carousel-title">{!! strip_tags($keys['our_partners_title'] ?? 'Our Partners', '<b><i><span><strong><em>') !!}</h2>
                                <a href="{{ route('front.our_partners') }}" class="cta-button">
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
                @break

            @case('section_11')
                <div class="scrollify main-section show-images-section white-logo-theme">
                    <div class="container carousel-content">
                        <div class="row align-items-center">
                            <div class="carousel-text">
                                <h2 class="carousel-title">{!! strip_tags($keys['our_clients_title'] ?? 'Our Clients', '<b><i><span><strong><em>') !!}</h2>
                                <a href="{{ route('front.our_clients') }}" class="cta-button">
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
                @break

            @case('section_12')
                <!-- Showcase Section (Section Seven) -->
                <div class="scrollify main-section split-section">
                    <div class="text-content">
                        <h2 class="section-title">
                            {!! strip_tags($section->title, '<b><i><span><strong><em><br><hr>') !!}
                        </h2>
                        <p class="section-description">
                            {!! strip_tags($section->text, '<b><i><span><strong><em><br><hr>') !!}
                        </p>
                        <a href="{{ route('ethics_compliance') }}" class="cta-button text-dark">
                            {!! strip_tags($section->button, '<b><i><span><strong><em><br><hr>') !!}
                        </a>
                    </div>
                    <div class="media-content">
                        <div class="logo-wrapper">
                            <img class="" src="assets/images/kafou_white2.png" alt="Kafou Medical Logo" />
                        </div>
                    </div>
                </div>
                @break

            @case('section_13')
                <div class="scrollify main-section red-split-section main-section-green">
                    <!-- Mobile layout -->
                    <div class="logo-mobile-center d-md-none text-center pt-4">
                        <img class="img-fluid" src="assets/images/career_6.jpg" alt="Careers Image" style="max-width: 90px;">
                    </div>

                    <div class="mobile-bottom-content careers-buttons d-md-none">
                        <a href="{{ url('/') }}" class="cta-button text-dark">Job Openings</a>
                        <a href="{{ url('/') }}" class="cta-button text-dark">Direct Apply</a>
                    </div>

                    <!-- Desktop layout -->
                    <div class="text-content d-none d-md-flex">
                        <h2 class="section-title">Careers</h2>

                        <div class="careers-buttons">
                            <a href="{{ url('/') }}" class="cta-button text-dark">Job Openings</a>
                            <a href="{{ url('/') }}" class="cta-button text-dark">Direct Apply</a>
                        </div>
                    </div>

                    <div class="media-content-red d-none d-md-block">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="assets/images/career_6.jpg" alt="Careers Image" />
                        </div>
                    </div>
                </div>
                @break
        @endswitch
    @endforeach

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
