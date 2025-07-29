@extends('layouts.app')

@section('head')
    <title>Divisions Anesthesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="scrollify main-section split-section sleep-disorders divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                Sleep Disorders
            </h2>

            <p class="section-description">
                Sleep disorders are conditions that disrupt your normal sleep patterns in a way that interferes with
                your daytime functioning. There are over 80 different types of sleep disorders.
            </p>
        </div>

        <div class="media-content"></div>
    </div>
@endsection
