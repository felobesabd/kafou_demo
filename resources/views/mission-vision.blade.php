@extends('layouts.app')

@section('head')
    <title>Mission & Vision - Kafou</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="mission-vision-container">
        <!-- Left side - Fixed Video -->
        <div class="mission-vision-video">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/kafou-medical-video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-content">
                Mission & Vision
            </div>
            <div class="overlay"></div>
        </div>
        <!-- Right side - Scrollable Content -->
        <div class="mission-vision-content">
            <div class="content-section">
                <h2>Our Mission</h2>
                <p>At Kafou Medical, our mission is to revolutionize healthcare delivery through innovative medical solutions and exceptional service. We strive to improve patient outcomes by providing healthcare professionals with the highest quality medical products and comprehensive support services.</p>
                <p>We are committed to:</p>
                <ul>
                    <li>Delivering cutting-edge medical technologies</li>
                    <li>Ensuring patient safety and comfort</li>
                    <li>Supporting healthcare professionals with expert knowledge</li>
                    <li>Maintaining the highest standards of quality and compliance</li>
                </ul>
            </div>
            <div class="content-section" style="background-color: #c4c4c4">
                <h2>Our Vision</h2>
                <p>To be the leading healthcare solutions provider in the Middle East, recognized for our commitment to excellence, innovation, and positive patient outcomes. We envision a future where:</p>
                <ul>
                    <li>Healthcare is more accessible and efficient</li>
                    <li>Medical professionals have access to the best tools and support</li>
                    <li>Patient care is enhanced through innovative solutions</li>
                    <li>We set the standard for medical device distribution and service</li>
                </ul>
            </div>
        </div>
    </div>
@endsection 