@extends('layouts.app')

@section('head')
    <title>Why Kafou Medical</title>
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
            @case('why_kafou_section_1')
                {{--Welcome Section --}}
                <div class="scrollify main-section fullscreen-section why-kafou-page">
                    <div class="overlay"></div>
                    <video autoplay muted loop playsinline>
                        <source src="{{ asset($section->is_video) ?? asset('assets/videos/medical_3.mp4') }}"
                                type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="row">
                        <div>
                            <h3 class="section-title" style="font-size: 25px;">
                                {{ $section->title ?? "Why Kafou Medical?" }}
                            </h3>
                            <div class="welcome-title">
                                {!! $section->text ?? "Kafou Medical is very committed in fair business
                                practices and we are fully aware of the importance that behaving fairly will
                                reflect on our partners reputation." !!}
                            </div>
                        </div>
                    </div>
                </div>
                @break

            @case('why_kafou_section_2')
                {{--Why Kafou Section --}}
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "Our Expertise in Your Hands" }}
                        </h2>

                        <p class="section-description">
                            {!! $section->text ?? "Innovative products such as yours require the collaboration
                            of an experienced partner who knows how to deal with Technical Specifications and
                            International Standards. Knowing the client's standards and requirements is
                            something you can only learn with direct experience in the field. We can provide
                            you the know-how in the market for the most highly demanding clients of
                            the Kingdom." !!}
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

            @case('why_kafou_section_3')
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "TERRITORIES ACCESS" }}
                        </h2>

                        <p class="section-description">
                            {!! $section->text ?? "Wouldn't it be nice to have immediate access to clients all
                            over Saudi Arabia? You can have direct access to our offices located in the three
                            main regions of Saudi Arabia (East: Al-Khobar, Central: Riyadh, West: Jeddah)" !!}
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

            @case('why_kafou_section_4')
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "MARKET ANALYSIS" }}
                        </h2>

                        <p class="section-description">
                            {!! $section->text ?? "Imagine the benefits of introducing your products in a country
                            with years of  market knowledge in hands? We can support your business by introducing
                            you directly to the correct channels and the decision makers. Furthermore, we can provide
                            you insights of the market strategies for the upcoming years and what to target in the
                            short term as your possible potentials." !!}
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

            @case('why_kafou_section_5')
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "LOCALIZATION" }}
                        </h2>

                        <p class="section-description">
                            {!! $section->text ?? "Sometimes reaching your goals is possible only through localization
                            or enhancing the local content which might require a consistent investment in time and in
                            infrastructure. Kafou Medical can provide you the necessary requirements you need
                            in order to achieve your goals faster." !!}
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

            @case('why_kafou_section_6')
                <div class="scrollify main-section split-section sfda divisions-general">
                    <div class="text-content">
                        <h2 class="section-title" style="margin-bottom:5px;">
                            {{ $section->title ?? "SFDA REGISTRATION" }}
                        </h2>

                        <p class="section-description">
                            {!! $section->text ?? "According to the Saudi FDA regulations, overseas medical
                            manufacturers must appoint a local Authorized Representative. The Authorized
                            Representative will act as a communication channel between the manufacturer and
                            the Saudi FDA." !!}
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

            @case('why_kafou_section_7')
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "REDUCE LEAD TIME" }}
                        </h2>

                        <p class="section-description">
                            {!! $section->text ?? "Delivery time is a deal breaker in GCC, we believe Kafou Medical can build smart inventory to reduce delivery time to the minimum." !!}
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

            @case('why_kafou_section_8')
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "RELIABILITY" }}
                        </h2>

                        <p class="section-description">
                            {!! $section->text ?? "With our multinational business partners of different sizes, we know how important it is to have excellent communication capabilities and the flexibility to adapt rapidly to our partners requirements." !!}
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

            @case('why_kafou_section_9')
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "INTELLECTUAL PROPERTY" }}
                        </h2>

                        <p class="section-description">
                            {!! $section->text ?? "Working hard in R&D to finally innovate a product isn’t a simple operation. It requires perseveration and an uncountable amount of time." !!}
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

            @case('why_kafou_section_10')
                <div class="scrollify main-section split-section divisions-general">
                    <div class="text-content">
                        <h2 class="section-title">
                            {{ $section->title ?? "LAWS & REGULATIONS" }}
                        </h2>

                        <p class="section-description">
                            {!! $section->text ?? "Entering a new country comes with a burden which is the understanding of a new range of Rules and Regulations which you are not used to." !!}
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


    {{--<!-- Full Screen Video Section -->
    <div class="scrollify main-section fullscreen-section why-kafou-page">
        <div class="overlay"></div>
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/medical_3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="row">
            <div>
                <h3 class="section-title" style="font-size: 25px;">Our Expertise in Your Hands</h3>
                <div class="welcome-title">
                    Innovative products such as yours require the collaboration of an experienced partner who knows how to deal with Technical Specifications and International Standards.
                    Knowing the client's standards and requirements is something you can only learn with direct experience in the field.
                    We can provide you the know-how in the market for the most highly demanding clients of the Kingdom.
                </div>
            </div>
            <div>
                <h3 class="section-title" style="font-size: 25px;">TERRITORIES ACCESS</h3>
                <div class="welcome-title">
                    Wouldn't it be nice to have immediate access to clients all over Saudi Arabia? You can have direct access
                    to our offices located in the three main regions of Saudi Arabia (East: Al-Khobar, Central: Riyadh,
                    West: Jeddah)
                </div>
            </div>
        </div>
    </div>

    <!-- Market Analysis & Localization -->
    <div class="scrollify main-section why-split-section split-section logo-white-dark-theme">
        <div class="media-content">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/medical_5.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="text-content">
            <h2 class="section-title" style="color: #17898c">MARKET ANALYSIS</h2>
            <div class="section-description">
                Imagine the benefits of introducing your products in a country with years of market knowledge in hands?
                We can support your business by introducing you directly to the correct channels and the decision makers.
                Furthermore, we can provide you insights of the market strategies for the upcoming years and what to target in the short term as your possible potentials.
            </div>
            <h2 class="section-title" style="color: #17898c">LOCALIZATION</h2>
            <div class="section-description">
                Sometimes reaching your goals is possible only through localization or enhancing the local content which might require a consistent investment in time and in infrastructure.
                Kafou Medical can provide you the necessary requirements you need in order to achieve your goals faster.
            </div>
        </div>
    </div>

    <!-- SFDA Registration -->
    <div class="scrollify main-section why-split-section split-section logo-white-dark-theme">
        <div class="media-content">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/medical_4.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="text-content">
            <h2 class="section-title" style="color: #17898c">SFDA REGISTRATION</h2>
            <div class="section-description">
                According to the Saudi FDA regulations, overseas medical manufacturers must appoint a local Authorized
                Representative. The Authorized Representative will act as a communication channel between the manufacturer
                and the Saudi FDA.
                Kafou Medical deals directly with Regulatory Consultants to overseas medical manufacturers to grant the
                Saudi FDA approvals for their products.
                Medical & Non-Medical Devices/IVDs licenses include but not limited to:
                <ul>
                    <li>Medical Device National Registry “MDNR”.</li>
                    <li>Medical Device Establishment License “MDEL”.</li>
                    <li>Medical Device Marketing Authorization “MDMA”.</li>
                    <li>Medical Device Importing License “MDIL”.</li>
                    <li>National Center for Medical Devices Reporting “NCMDR”.</li>
                    <li>Product Classification System “PCS”.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Reduce Lead Time & Reliability -->
    <div class="scrollify main-section why-split-section split-section logo-white-dark-theme">
        <div class="media-content">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/medical_6.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="text-content">
            <h2 class="section-title" style="color: #17898c">REDUCE LEAD TIME</h2>
            <div class="section-description">
                Delivery time is a deal breaker in GCC, we believe Kafou Medical can build smart inventory to reduce delivery time to the minimum.
            </div>
            <h2 class="section-title" style="color: #17898c">Reliability</h2>
            <div class="section-description">
                With our multinational business partners of different sizes, we know how important it is to have excellent communication capabilities and the flexibility to adapt rapidly to our partners requirements.
                Understanding what business strategy and vision our partner has is a crucial element for being successful in the briefest time possible.
            </div>
        </div>
    </div>

    <!-- Intellectual Property & Laws -->
    <div class="scrollify main-section why-split-section split-section logo-white-dark-theme">
        <div class="media-content">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/medical_6.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="text-content">
            <h2 class="section-title" style="color: #17898c">Intellectual Property</h2>
            <div class="section-description">
                Working hard in R&D to finally innovate a product isn’t a simple operation. It requires perseveration and an uncountable amount of time.
                For this reason, we perfectly understand how important Intellectual Property, Patents and Brands are for you.
                If we are looking for a partner who knows how to deal with NDAs and respect the principal’s rights, then you will not be disappointed with us.
            </div>
            <h2 class="section-title" style="color: #17898c">Laws & Regulations</h2>
            <div class="section-description">
                Entering a new country comes with a burden which is the understanding of a new range of Rules and Regulations which you are not used to.
                Kafou Group has established and operated seven different type of businesses in Saudi Arabia ranging from Food Supply to Medical Equipment and have grown a considerable experience in these matters.
            </div>
        </div>
    </div>--}}
@endsection
