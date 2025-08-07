@extends('layouts.app')

@section('head')
    <title>Divisions Anesthesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="scrollify main-section contact-us">
        <div class="iframe-contact-us">
            <iframe style="height:100%;width:100%;border:none;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14487.795108506658!2d46.66912698990479!3d24.797207452996744!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc09aaf05318ccdd6!2sKafou%20Group!5e0!3m2!1sen!2ssa!4v1587068864244!5m2!1sen!2ssa"
                    frameborder="0"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0"
                    sandbox="allow-same-origin allow-scripts allow-forms allow-popups allow-popups-to-escape-sandbox allow-presentation">
            </iframe>
        </div>

        <div class="contact-container">
            <div class="contact-cards-wrapper">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fa-solid fa-envelope icon-contact"></i>
                    </div>
                    <div>
                        <div class="contact-title">Have any questions?</div>
                        <div class="contact-info">
                            <a href="mailto:info@kafoumedical.com">info@kafoumedical.com</a>
                        </div>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fa-solid fa-phone icon-contact"></i>
                    </div>
                    <div>
                        <div class="contact-title">Call us</div>
                        <div class="contact-info">+966 11 203 4571</div>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="far fa-folder-open icon-contact"></i>
                    </div>
                    <div>
                        <div class="contact-title">Fax</div>
                        <div class="contact-info">+966 11 203 4571</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
