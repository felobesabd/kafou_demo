@extends('layouts.app')

@section('head')
    <title>Kafou</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Full Screen Video Section -->
    <div class="scrollify main-section fullscreen-section">
        <div class="overlay"></div>
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/kafou-medical-video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h3 class="section-title">Welcome to Kafou Medical</h3>
        <div class="welcome-main-title">
            Empowering Global Healthcare in the GCC
            We connect leading medical brands with the region’s most trusted providers.
        </div>
        <a href="{{ url('/welcome-kafou') }}" class="cta-button">Mission & Vision</a>
    </div>
    <!-- Strategy Section (Second Section) -->
    <div class="scrollify main-section fullscreen-section">
        <div class="overlay"></div>
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/kafou-medical-video-2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h3 class="section-title">Why Kafou Medical?</h3>
        <a href="{{ url('/why-kafou') }}" class="cta-button">Read More</a>
    </div>
    <!-- Dribbble Section (forth Section) -->
    <div class="scrollify main-section dribbble-section">
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
    </div>
    <!-- Partners and Clients Sections (show-images-section) -->
    <div class="scrollify main-section show-images-section white-logo-theme">
        <div class="container carousel-content">
            <div class="row align-items-center">
                <div class="carousel-text">
                    <h2 class="carousel-title">Our Partners</h2>
                    <a href="#" class="cta-button">View More</a>
                </div>
                <div class="carousel-container">
                    <div class="single-carousel">
                        <img id="carousel-image" src="{{ asset('Uploads/Partners/b7c561f3-4f54-42f6-8197-edd960312bce.png') }}" alt="Partner">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scrollify main-section show-images-section white-logo-theme">
        <div class="container carousel-content">
            <div class="row align-items-center">
                <div class="carousel-text">
                    <h2 class="carousel-title">Our Clients</h2>
                    <a href="#" class="cta-button">View More</a>
                </div>
                <div class="carousel-container">
                    <div class="single-carousel">
                        <img id="carousel-image-clients" src="{{ asset('Uploads/Clients/d224d5dd-b1d9-44e1-bdce-e8d46299090a.png') }}" alt="Clients">
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
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/medical_6.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-scrollify@1.0.21/jquery.scrollify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection 