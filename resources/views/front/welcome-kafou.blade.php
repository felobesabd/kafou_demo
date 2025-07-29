@extends('layouts.app')

@section('head')
    <title>Kafou</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Full Screen Video Section -->
    <div class="scrollify main-section fullscreen-section">
        <div class="overlay"></div>
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/medical_2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h3 class="section-title" style="font-size: 25px;margin-bottom: 20px">Welcome to Kafou Medical</h3>
        <div class="welcome-title">
            Are you a medical products manufacturer who plans to expand in the GCC market? Are you a medical products
            consumer who needs quality brands? You came to the right place! We are a medical sales & marketing company,
            part of Kafou Group based in Riyadh, Saudi Arabia. Kafou Medical is presenting and providing excellent medical
            products for health care and governmental organizations in the kingdom of Saudi Arabia and GCC countries. With
            our specialized team, we believe in quality of service as a differentiating factor and this value is assumed by
            all the employees in our company.
        </div>
    </div>
    <!-- Showcase Section (Section Seven) -->
    <div class="scrollify main-section split-section">
        <div class="text-content">
            <h2 class="section-title" style="color: #17898c">MISSION</h2>
            <p class="section-description">
                To provide the most up to date technologies in products and consumables combined with outstanding after sales services.
            </p>
            <h2 class="section-title" style="color: #17898c">VISION</h2>
            <p class="section-description">
                To become the preferred GCC company for clients and partners in providing newly patented medical products and consumables.
            </p>
        </div>
        <div class="media-content">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/medical_1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
@endsection 