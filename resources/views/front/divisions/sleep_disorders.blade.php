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
            @case('sleep_disorders_section_1')
                {{-- Welcome Video Section --}}
                <div class="scrollify main-section fullscreen-section">
                    <div class="overlay" style="background-color: rgb(75 75 75 / 31%);"></div>
                    <video autoplay muted loop playsinline>
                        <source src="{{ $section->is_video ? asset($section->is_video) : asset('assets/videos/sleep&disorders.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h2>{!! $section->title !!}</h2>
                    <div>
                        {!! $section->text !!}
                    </div>
                </div>
                @break

            @case('sleep_disorders_section_2')
                {{-- Sleep Disorders Main Section --}}
                <div class="scrollify main-section split-section sleep-disorders divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "Sleep Disorders" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<p>Sleep disorders are conditions that disrupt your normal sleep patterns in a way that interferes with your daytime functioning. There are over 80 different types of sleep disorders.</p>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/sleep_disorders.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break
        @endswitch
    @endforeach

    {{--<div class="scrollify main-section split-section sleep-disorders divisions-general">
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
    </div>--}}
@endsection
