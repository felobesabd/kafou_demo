@extends('layouts.app')

@section('head')
    <title>Divisions Anesthesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="scrollify main-section split-section respiratory divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                Respiratory
            </h2>

            <p class="section-description">
                Respiratory therapy is a healthcare field specializing in the diagnosis, treatment, and management
                of conditions affecting the lungs and breathing. Respiratory therapists (RTs) work collaboratively with
                doctors and other healthcare professionals to help patients of all ages, from premature infants to
                elderly individuals with chronic lung diseases.
            </p>
        </div>

        <div class="media-content"></div>
    </div>
@endsection
