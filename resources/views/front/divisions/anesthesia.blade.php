@extends('layouts.app')

@section('head')
    <title>Divisions Anesthesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    <style>
        p {
            margin: 0;
        }
    </style>

    @php
        $sections = \App\Helpers\PageContentHelper::getAllSections();
    @endphp

    @foreach($sections as $section)
        @switch($section->section_key)
            {{--@case('anesthesia_section_1')
                --}}{{--Welcome Section --}}{{--
                <div class="scrollify main-section fullscreen-section">
                    <div class="overlay"></div>
                    <video autoplay muted loop playsinline>
                        <source src="{{ asset($section->is_video) ?? asset('assets/videos/anesthsia.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h4>{!! $section->title !!}</h4>
                    <h3 class="section-title highlight-underline">
                        {!! $section->text !!}
                    </h3>
                </div>
                @break--}}

            @case('anesthesia_section_1')
                {{--Why Kafou Section --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "General Anesthesia" }}
                        </h2>

                        <p class="section-description">
                            {!! $section->text ?? "Laryngoscope Airway Management Endotracheal tubes (ETT) Laryngeal Mask Airways (LMA) Nasal cannulas Syringe IV catheters Intravenous (IV) administration sets Pulse oximeters Electrocardiogram (ECG) electrodes Blood pressure cuffs Surgical drapes Yankeur suction catheters Sterile gloves" !!}
                        </p>
                    </div>

                    <div class="media-content"
                         style="
                            background-image: url('{{ asset($section->is_image ?? 'assets/images/placeholder.jpg') }}');
                            background-repeat: no-repeat;
                            background-size: cover;
                            background-position: center;">
                    </div>
                </div>
                @break

            @case('anesthesia_section_2')
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "Pain Therapy" }}
                        </h2>

                        <p class="section-description">
                            {!! $section->text ?? "Pain therapy is a branch of medicine that focuses on the diagnosis, treatment, and management of pain.
                            Pain can be acute (short-term) or chronic (long-lasting), and it can be caused by a variety of factors, including injury, illness, and disease.
                            Pain therapy can help to improve a person's quality of life by reducing pain intensity, improving function, and promoting emotional well-being." !!}
                        </p>
                    </div>

                    <div class="media-content"
                         style="
                            background-image: url('{{ asset($section->is_image ?? 'assets/images/placeholder.jpg') }}');
                            background-repeat: no-repeat;
                            background-size: cover;
                            background-position: center;">
                    </div>
                </div>
                @break

            @case('anesthesia_section_3')
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "Regional Anesthesia" }}
                        </h2>

                        <p class="section-description">
                            {!! $section->text ?? "Regional anesthesia is a type of pain management technique used during surgery or other procedures that numbs a specific part of your body.
                            Unlike general anesthesia, which renders you unconscious, regional anesthesia allows you to stay awake or lightly sedated during the procedure." !!}
                        </p>
                    </div>

                    <div class="media-content"
                         style="
                            background-image: url('{{ asset($section->is_image ?? 'assets/images/placeholder.jpg') }}');
                            background-repeat: no-repeat;
                            background-size: cover;
                            background-position: center;">
                    </div>
                </div>
                @break
        @endswitch
    @endforeach

    {{--<div class="scrollify main-section split-section anesthesia divisions-general">
        <div class="text-content">
            <h2>General Anesthesia</h2>
            <ul>
                <li>Laryngoscope</li>
                <li>Airway Management</li>
                <li>Endotracheal tubes (ETT)</li>
                <li>Laryngeal Mask Airways (LMA)</li>
                <li>Nasal cannulas</li>
                <li>Syringe</li>
                <li>IV catheters</li>
                <li>Intravenous (IV) administration sets</li>
                <li>Pulse oximeters</li>
                <li>Electrocardiogram (ECG) electrodes</li>
                <li>Blood pressure cuffs</li>
                <li>Surgical drapes</li>
                <li>Yankeur suction catheters</li>
                <li>Sterile gloves</li>
            </ul>
        </div>

        <div class="media-content"></div>
    </div>

    <div class="scrollify main-section split-section pain-therapy divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                Pain Therapy
            </h2>

            <p class="section-description">
                Pain therapy is a branch of medicine that focuses on the diagnosis, treatment, and management of pain.
                Pain can be acute (short-term) or chronic (long-lasting), and it can be caused by a variety of factors, including injury, illness, and disease.
                Pain therapy can help to improve a person's quality of life by reducing pain intensity, improving function, and promoting emotional well-being.
            </p>
        </div>

        <div class="media-content"></div>
    </div>

    <div class="scrollify main-section split-section regional divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                Regional Anesthesia
            </h2>

            <p class="section-description">
                Regional anesthesia is a type of pain management technique used during surgery or other procedures that numbs a specific part of your body.
                Unlike general anesthesia, which renders you unconscious, regional anesthesia allows you to stay awake or lightly sedated during the procedure.
            </p>
        </div>

        <div class="media-content"></div>
    </div>--}}
@endsection
