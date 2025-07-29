@extends('layouts.app')

@section('head')
    <title>Divisions Anesthesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="scrollify main-section split-section nursing-icu divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                Nursing & ICU
            </h2>

            <p class="section-description">
                Intensive care units (ICUs) are specially equipped hospital units that provide
                intensive care to critically ill patients
            </p>
        </div>

        <div class="media-content"></div>
    </div>
@endsection
