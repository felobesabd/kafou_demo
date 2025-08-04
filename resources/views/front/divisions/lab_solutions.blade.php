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
            @case('lab_solutions_section_1')
                {{-- Welcome Video Section --}}
                <div class="scrollify main-section fullscreen-section">
                    <div class="overlay"></div>
                    <video autoplay muted loop playsinline>
                        <source src="{{ $section->is_video ? asset($section->is_video) : asset('assets/videos/ivf&genetics.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h2>{!! $section->title !!}</h2>
                    <div>
                        {!! $section->text !!}
                    </div>
                </div>
                @break

            @case('lab_solutions_section_2')
                {{-- IVF Lab Equipment and Disposables --}}
                <div class="scrollify main-section split-section equipment divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "IVF Lab Equipment and Disposables" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<p>Kafou Medical is a top player in the Fertility and IVF market in the Kingdom of Saudi Arabia, providing a wide array of IVF products and solutions. The range of our services covers everything from IVF project planning and design to providing equipment and training for turnkey projects.</p>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/lab_solutions_equipment.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('lab_solutions_section_3')
                {{-- IVF Turnkey Projects --}}
                <div class="scrollify main-section split-section turnkey divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "IVF Turnkey Projects" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<p>Kafou Medical team has a remarkable experience in setting up systems in the facilities of prestigious hospitals and clinics of both the governmental and private sector taking up the complete setting up of the department as a turnkey project.</p>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/lab_solutions_turnkey.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('lab_solutions_section_4')
                {{-- After Sales Services --}}
                <div class="scrollify main-section split-section consumables divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "After Sales Services" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<p>Kafou Medical has a team of trained Engineers to provide quality installation, maintenance, service and training locally in the Kingdom of Saudi Arabia. We address all customer requirements with utmost care and resolve them as quickly as possible.</p>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/anesthesia_regional.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('lab_solutions_section_5')
                {{-- LAB Solutions Consumables --}}
                <div class="scrollify main-section split-section consumables divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "LAB Solutions Consumables" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<p>With its variety of IVF trusted brands consumables and wide range of available stock, Kafou Medical has been one of the healthcare facilities preferred partners providing adequate and timely healthcare support.</p>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/lab_solutions_consumables.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('lab_solutions_section_6')
                {{-- LAB Solutions Genetics --}}
                <div class="scrollify main-section split-section genetics divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "LAB Solutions Genetics" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<p>Kafou Medical is a major player in the Genetics Laboratories market in the Kingdom of Saudi Arabia providing a wide range of top brands Labs products and solutions.</p>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/lab_solutions_genetics.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break
        @endswitch
    @endforeach

    {{-- IVF Lab Equipment and Disposables --}}{{--
    <div class="scrollify main-section split-section equipment divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                IVF Lab Equipment and Disposables
            </h2>

            <p class="section-description">
                Kafou Medical is a top player in the Fertility and IVF market in the Kingdom of Saudi Arabia, providing a wide array of IVF products and solutions.
                The range of our services covers everything from IVF project planning and design to providing equipment and training for turnkey projects.
            </p>
        </div>

        <div class="media-content"></div>
    </div>

    --}}{{-- IVF Turnkey Projects --}}{{--
    <div class="scrollify main-section split-section turnkey divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                IVF Turnkey Projects
            </h2>

            <p class="section-description">
                Kafou Medical team has a remarkable experience in setting up systems in the facilities of
                prestigious hospitals and clinics of both the governmantal and private sector taking up
                the complete setting up of the department as a turnkey project.
            </p>
        </div>

        <div class="media-content"></div>
    </div>

    --}}{{--  After Sales Services  --}}{{--
    <div class="scrollify main-section split-section consumables divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                After Sales Services
            </h2>

            <p class="section-description">
                Kafou Medical has a team of trained Engineers to provide quality installation, maintenance,
                service and training locally in the Kingdom of Saudi Arabia. We address all customer requirements
                with utmost care and resolve them as quickly as possible.
            </p>
        </div>

        <div class="media-content"></div>
    </div>

    <div class="scrollify main-section split-section consumables divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                LAB Solutions Consumables
            </h2>

            <p class="section-description">
                With its variety of IVF trusted brands consumables and wide range of available stock,
                Kafou Medical has been one of the helthcare facilities preferred partners
                providing adequate and timely healthcare support.
            </p>
        </div>

        <div class="media-content"></div>
    </div>

    <div class="scrollify main-section split-section genetics divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                LAB Solutions Genetics
            </h2>

            <p class="section-description">
                Kafou Medical is a major player in the Genetics Laboratories market
                in the Kingdom of Saudi Arabia providing a wide range of top brands Labs products and solutions.
            </p>
        </div>

        <div class="media-content"></div>
    </div>--}}
@endsection
