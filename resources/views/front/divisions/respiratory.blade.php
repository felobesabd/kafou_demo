@extends('layouts.app')

@section('head')
    <title>Divisions Anesthesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    @php
        $sections = \App\Helpers\PageContentHelper::getAllSections();
    @endphp

    @foreach($sections as $section)
        @switch($section->section_key)
            @case('respiratory_section_1')
                {{-- Welcome Video Section --}}{{--
                <div class="scrollify main-section fullscreen-section">
                    <div class="overlay"></div>
                    <video autoplay muted loop playsinline>
                        <source src="{{ $section->is_video ? asset($section->is_video) : asset('assets/videos/respiratory.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h2>{!! $section->title !!}</h2>
                    <div>
                        {!! $section->text !!}
                    </div>
                </div>
                @break--}}

            @case('respiratory_section_1')
                {{-- Respiratory Main Section --}}
                <div class="scrollify main-section split-section respiratory divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "Respiratory" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<p>Respiratory therapy is a healthcare field specializing in the diagnosis, treatment, and management of conditions affecting the lungs and breathing. Respiratory therapists (RTs) work collaboratively with doctors and other healthcare professionals to help patients of all ages, from premature infants to elderly individuals with chronic lung diseases.</p>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/respiratory.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

        @endswitch
    @endforeach

    {{--<div class="scrollify main-section split-section respiratory divisions-general">
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
    </div>--}}
@endsection
