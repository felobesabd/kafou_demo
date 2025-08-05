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
        $sections = \App\Helpers\PageContentHelper::getSectionByPageName('nursing_icu');
    @endphp

    @foreach($sections as $section)
        <div class="scrollify main-section split-section nursing-icu divisions-general">
            <div class="text-content">
                <h2 class="section-title">
                    {{ $section->title ?? "Nursing & ICU" }}
                </h2>
                <div class="section-description">
                    {!! $section->text ?? '<p>Intensive care units (ICUs) are specially equipped hospital units that provide intensive care to critically ill patients</p>' !!}
                </div>
            </div>
            <div class="media-content"
                 style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/nursing_icu.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
            </div>
        </div>
    @endforeach

    {{--@switch($section->section_key)
        --}}{{--@case('nursing_icu_section_1')
            --}}{{----}}{{-- Welcome Video Section --}}{{----}}{{--
            <div class="scrollify main-section fullscreen-section">
                <div class="overlay"></div>
                <video autoplay muted loop playsinline>
                    <source src="{{ $section->is_video ? asset($section->is_video) : asset('assets/videos/nursing&ICU.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <h2>{!! $section->title !!}</h2>
                <div>
                    {!! $section->text !!}
                </div>
            </div>
            @break--}}{{--

        @case('nursing_icu_section_1')
            --}}{{-- Nursing & ICU Main Section --}}{{--
            <div class="scrollify main-section split-section nursing-icu divisions-general">
                <div class="text-content">
                    <h2 class="section-title">
                        {{ $section->title ?? "Nursing & ICU" }}
                    </h2>
                    <div class="section-description">
                        {!! $section->text ?? '<p>Intensive care units (ICUs) are specially equipped hospital units that provide intensive care to critically ill patients</p>' !!}
                    </div>
                </div>
                <div class="media-content"
                     style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/nursing_icu.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                </div>
            </div>
            @break
    @endswitch--}}

    {{--<div class="scrollify main-section split-section nursing-icu divisions-general">
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
    </div>--}}
@endsection
