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
            {{--@case('surgery_section_1')
                --}}{{-- Welcome Section --}}{{--
                <div class="scrollify main-section fullscreen-section">
                    <div class="overlay"></div>
                    <video autoplay muted loop playsinline>
                        <source src="{{ $section->is_video ? asset($section->is_video) : asset('assets/videos/surgry.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h2>{!! $section->title !!}</h2>
                    <div>
                        {!! $section->text !!}
                    </div>
                </div>
                @break--}}

            @case('surgery_section_1')
                {{-- Bariatric --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "Bariatric" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<ul><li>Dissectors, clamps, graspers, & hooks.</li><li>Retractor arms.</li><li>Nathanson liver retractors.</li><li>Laparoscopic trocar incision closure devices.</li></ul>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_1.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_2')
                {{-- Cardiovascular & Thoracic --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "Cardiovascular & Thoracic" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<ul><li>Occlusion Clips and clamps.</li><li>vascular, bulldog, aorta, and anastomosis.</li></ul>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_2.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_3')
                {{-- ENT --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "ENT" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<ul><li>Endoscopes reusable instruments.</li><li>Otology reusable instruments.</li><li>Rhinology reusable instruments.</li><li>Tonsillectomy reusable instruments.</li><li>Tracheotomy reusable instruments.</li><li>Bronchoscopy reusable instruments.</li><li>FESS reusable instruments.</li></ul>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_3.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_4')
                {{-- Gastric Sleeve --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "Gastric Sleeve" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<ul><li>Disposable Laparoscopic Trocars.</li><li>Hand disposable laparoscopic instruments.</li><li>Surgical Staplers.</li></ul>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_4.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_5')
                {{-- General surgical instruments --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "General surgical instruments" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<ul><li>Scalpels.</li><li>Knives.</li><li>Scissors (TC / SC / CC / Micro Scissors).</li><li>Forceps (TC / mono- & bipolar / Micro Forceps / Haemostatic Forceps) Vessel Clips; Approximators.</li><li>Clamps (Towel Clamps / Tubing Clamps).</li><li>Needle Holders (TC / Micro Needle Holders).</li></ul>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_5.jpg') }}');">
                    </div>
                </div>
                @break

            @case('surgery_section_6')
                {{-- Laparoscopic Surgical Instruments --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "Laparoscopic Surgical Instruments" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<ul><li>Cannulas and Trocars.</li><li>Trocar Incision Closure Devices.</li><li>Electrodes and Electrosurgical.</li><li>Laparoscopic Bipolar Scissors and Graspers.</li><li>Hooks and Probes.</li><li>Knot Pushers.</li><li>Needles and Needle Holders</li></ul>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_6.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_7')
                {{-- Neuro --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "Neuro" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<ul><li>Brain Retractors.</li><li>Laminectomy Distractors.</li><li>Cranial Rongeurs.</li><li>Scalp Clips and Applying Forceps.</li><li>Galea Hooks.</li><li>Dura Dissectors.</li></ul>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_7.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_8')
                {{-- OB/GYNE - Gynaecology --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "OB/GYNE - Gynaecology" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<ul><li>Forceps & Clamps - For uterine and caesarean, hysterectomy and other obstetrics and gynae surgery.</li><li>Cervical Dilators - For stretching the cervical wall and dilating the cervical muscles.</li><li>Diagnostic Vaginal Speculums.</li></ul>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_8.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_9')
                {{-- Ophthalmic --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "Ophthalmic" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<ul><li>Micro needle holder.</li><li>Phaco choppers.</li><li>Needle holders.</li><li>Glaucoma set.</li><li>Enucleation and cataracts.</li></ul>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_9.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_10')
                {{-- Orthopaedic --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "Orthopaedic" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<ul><li>Implants and Instruments.</li></ul>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_10.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_11')
                {{-- Plastic Surgery --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "Plastic Surgery" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<ul><li>Awls, chisels, mallets.</li><li>Gouges, pliers.</li><li>Osteotomes, rasps.</li><li>Rongeurs, and cutting wire.</li></ul>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_11.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_12')
                {{-- Rigid Telescopes --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "Rigid Telescopes" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<ul><li>Laparoscopic.</li><li>Urology.</li><li>Sinuscopy.</li><li>Gynaecology.</li><li>Arthroscopy.</li><li>Bronchoscopy.</li></ul>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_12.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_13')
                {{-- Urology --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "Urology" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<ul><li>Cystoscopy instruments set.</li><li>Resectoscope instruments set.</li><li>Urethrotomy instruments set.</li><li>Nephoscopy instruments set.</li><li>Uretero - Reno scope instruments set.</li></ul>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_13.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_14')
                {{-- Surgical Consumable --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "Surgical Consumable" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<p>Surgical consumables are items that are used during surgery or in the postoperative period. These items can include surgical gloves, gowns, masks, and other medical supplies. There are a variety of reasons why surgical consumables may be necessary. In some cases, they may help to prevent a transfer of infectious.</p>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_14.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_15')
                {{-- Operating Rooms Consumables --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "Operating Rooms Consumables" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<p>Our range includes Surgical Gowns, Isolation gown, Surgical mask, Cesarean Section Pack, General Surgery Pack, Ophthalmic Drape Pack, Cardiovascular Surgical Pack, Orthopedic Pack, ENT Surgical Pack and Urology Surgical Pack.</p>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_15.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_16')
                {{-- Nursing Consumables --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "Nursing Consumables" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<p>Our range includes essentials from PPE such as face masks, gloves and wound management, surgical gowns, surgical drapes alongside patient care basics.</p>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_16.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_17')
                {{-- CSSD Consumables --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "CSSD Consumables" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<p>Our range includes Sterilization Wraps, Pouches, Sterilization Container Accessories, Container filters, Transportation Boxes. rigid plastic boxes manufactured and tested to meet requirements for packages used to contain pathogen infected medical instruments and clinical waste being transported on public roads.</p>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/anesthesia_general_1.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break

            @case('surgery_section_18')
                {{-- CSSD Equipment --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:0;">
                            {{ $section->title ?? "CSSD Equipment" }}
                        </h2>
                        <div class="section-description">
                            {!! $section->text ?? '<p>Sterile Containers – for safe storage and cleaning of all types for the reusable Surgical Instruments and the telescope as well. During surgery, precision and sterility are paramount. Designed to maintain a disinfected environment containers help medical professionals organize surgical instruments and protect them from contamination or damage.</p>' !!}
                        </div>
                    </div>
                    <div class="media-content"
                         style="background-image: url('{{ asset($section->is_image ?? 'Uploads/Divisions/surgery_17.jpg') }}');
                         background-repeat: no-repeat;
                         background-size: cover;
                         background-position: center;">
                    </div>
                </div>
                @break
        @endswitch
    @endforeach

    {{-- Bariatric --}}{{--
    <div class="scrollify main-section split-section surgery divisions-general">
        <div class="text-content">
            <h2>Bariatric</h2>
            <ul>
                <li>Dissectors, clamps, graspers, & hooks.</li>
                <li>Retractor arms.</li>
                <li>Nathanson liver retractors.</li>
                <li>Laparoscopic trocar incision closure devices.</li>
            </ul>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_1.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- Cardiovascular & Thoracic --}}{{--
    <div class="scrollify main-section split-section surgery divisions-general">
        <div class="text-content">
            <h2>Cardiovascular & Thoracic</h2>
            <ul>
                <li>Occlusion Clips and clamps.</li>
                <li>vascular, bulldog, aorta, and anastomosis.</li>
            </ul>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_2.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- ENT --}}{{--
    <div class="scrollify main-section split-section surgery divisions-general">
        <div class="text-content">
            <h2>ENT</h2>
            <ul>
                <li>Endoscopes reusable instruments.</li>
                <li>Otology reusable instruments.</li>
                <li>Rhinology reusable instruments.</li>
                <li>Tonsillectomy reusable instruments.</li>
                <li>Tracheotomy reusable instruments.</li>
                <li>Bronchoscopy reusable instruments.</li>
                <li>FESS reusable instruments.</li>
            </ul>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_3.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- Gastric Sleeve --}}{{--
    <div class="scrollify main-section split-section surgery divisions-general">
        <div class="text-content">
            <h2>Gastric Sleeve</h2>
            <ul>
                <li>Disposable Laparoscopic Trocars.</li>
                <li>Hand disposable laparoscopic instruments.</li>
                <li>Surgical Staplers.</li>
            </ul>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_4.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- General surgical instruments --}}{{--
    <div class="scrollify main-section split-section surgery divisions-general">
        <div class="text-content">
            <h2>General surgical instruments</h2>
            <ul>
                <li>Scalpels.</li>
                <li>Knives.</li>
                <li>Scissors (TC / SC / CC / Micro Scissors).</li>
                <li>Forceps (TC / mono- & bipolar / Micro Forceps / Haemostatic Forceps) Vessel Clips; Approximators.</li>
                <li>Clamps (Towel Clamps / Tubing Clamps).</li>
                <li>Needle Holders (TC / Micro Needle Holders).</li>
            </ul>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_5.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- Laparoscopic Surgical Instruments --}}{{--
    <div class="scrollify main-section split-section surgery divisions-general">
        <div class="text-content">
            <h2>Laparoscopic Surgical Instruments</h2>
            <ul>
                <li>Cannulas and Trocars.</li>
                <li>Trocar Incision Closure Devices.</li>
                <li>Electrodes and Electrosurgical.</li>
                <li>Laparoscopic Bipolar Scissors and Graspers.</li>
                <li>Hooks and Probes.</li>
                <li>Knot Pushers.</li>
                <li>Needles and Needle Holders</li>
            </ul>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_6.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- Neuro --}}{{--
    <div class="scrollify main-section split-section surgery divisions-general">
        <div class="text-content">
            <h2>Neuro</h2>
            <ul>
                <li>Brain Retractors.</li>
                <li>Laminectomy Distractors.</li>
                <li>Cranial Rongeurs.</li>
                <li>Scalp Clips and Applying Forceps.</li>
                <li>Galea Hooks.</li>
                <li>Dura Dissectors.</li>
            </ul>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_7.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- OB / GYNE- Gynaecology --}}{{--
    <div class="scrollify main-section split-section surgery divisions-general">
        <div class="text-content">
            <h2>OB / GYNE- Gynaecology</h2>
            <ul>
                <li>
                    Forceps & Clamps - For uterine and caesarean, hysterectomy and other obstetrics and
                    gynae surgery.
                </li>
                <li>Cervical Dilators - For stretching the cervical wall and dilating the cervical muscles.</li>
                <li>Diagnostic Vaginal Speculums.</li>
            </ul>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_8.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- Ophthalmic --}}{{--
    <div class="scrollify main-section split-section surgery divisions-general">
        <div class="text-content">
            <h2>Ophthalmic</h2>
            <ul>
                <li>Micro needle holder.</li>
                <li>Phaco choppers.</li>
                <li>Needle holders.</li>
                <li>Glaucoma set.</li>
                <li>Enucleation and cataracts.</li>
            </ul>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_9.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- Orthopaedic --}}{{--
    <div class="scrollify main-section split-section surgery divisions-general">
        <div class="text-content">
            <h2>Orthopaedic</h2>
            <ul>
                <li>Implants and Instruments.</li>
            </ul>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_10.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- Plastic Surgery --}}{{--
    <div class="scrollify main-section split-section surgery divisions-general">
        <div class="text-content">
            <h2>Plastic Surgery</h2>
            <ul>
                <li>Awls, chisels, mallets.</li>
                <li>Gouges, pliers.</li>
                <li>Osteotomes, rasps.</li>
                <li>Rongeurs, and cutting wire.</li>
            </ul>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_11.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- Rigid Telescopes --}}{{--
    <div class="scrollify main-section split-section surgery divisions-general">
        <div class="text-content">
            <h2>Rigid Telescopes</h2>
            <ul>
                <li>Laparoscopic.</li>
                <li>Urology.</li>
                <li>Sinuscopy.</li>
                <li>Gynaecology.</li>
                <li>Arthroscopy.</li>
                <li>Bronchoscopy.</li>
            </ul>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_12.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- Urology --}}{{--
    <div class="scrollify main-section split-section surgery divisions-general">
        <div class="text-content">
            <h2>Urology</h2>
            <ul>
                <li>Cystoscopy instruments set.</li>
                <li>Resectoscope instruments set.</li>
                <li>Urethrotomy instruments set.</li>
                <li>Nephoscopy instruments set.</li>
                <li>Uretero - Reno scope instruments set.</li>
            </ul>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_13.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- Surgical Consumable --}}{{--
    <div class="scrollify main-section split-section divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                Surgical Consumable
            </h2>

            <p class="section-description">
                Surgical consumables are items that are used during surgery or in the postoperative period.
                These items can include surgical gloves, gowns, masks, and other medical supplies.
                There are a variety of reasons why surgical consumables may be necessary.
                In some cases, they may help to prevent a transfer of infectious.
            </p>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_14.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- Operating Rooms Consumables --}}{{--
    <div class="scrollify main-section split-section divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                Operating Rooms Consumables
            </h2>

            <p class="section-description">
                Our range includes Surgical Gowns, Isolation gown, Surgical mask, Cesarean Section Pack,
                General Surgery Pack, Ophthalmic Drape Pack, Cardiovascular Surgical Pack, Orthopedic Pack, ENT
                Surgical Pack and Urology Surgical Pack.
            </p>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_15.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- Nursing Consumables --}}{{--
    <div class="scrollify main-section split-section divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                Nursing Consumables
            </h2>

            <p class="section-description">
                Our range includes essentials from PPE such as face masks, gloves and wound management,
                surgical gowns, surgical drapes alongside patient care basics.
            </p>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_16.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- CSSD Consumables --}}{{--
    <div class="scrollify main-section split-section divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                CSSD Consumables
            </h2>

            <p class="section-description">
                Our range includes Sterilization Wraps , Pouches, Sterilization Container Accessories, Container
                filters ,Transportation Boxes. rigid plastic boxes manufactured and tested to meet requirements for
                packages used to contain pathogen infected medical instruments and clinical waste being transported on
                public roads.
            </p>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/anesthesia_general_1.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>

    --}}{{-- CSSD Equipment --}}{{--
    <div class="scrollify main-section split-section divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                CSSD Equipment
            </h2>

            <p class="section-description">
                Sterile Containers – for safe storage and cleaning of all types for the reusable Surgical
                Instruments and the telescope as well. During surgery, precision and sterility are paramount.
                Designed to maintain a disinfected environment containers help medical professionals organize
                surgical instruments and protect them from contamination or damage.
            </p>
        </div>

        <div class="media-content"
             style="
             background-image: url('{{ 'Uploads/Divisions/surgery_17.jpg' }}');
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;"
        ></div>
    </div>--}}
@endsection
