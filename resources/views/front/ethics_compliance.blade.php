@extends('layouts.app')

@section('head')
    <title>Divisions Anesthesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="scrollify main-section split-section ethics-compliance divisions-general">
        <div class="text-content">
            <h2 class="section-title">
                Ethics & Compliance
            </h2>

            <p class="section-description">
                Kafou Medical is very committed in fair business practices and we are fully aware of the importance
                that behaving fairly will reflect on our partners’ reputation. Kafou Medical is strongly committed in
                monitoring all activities in the market in order to secure that no bribery or similar misconduct could
                be part of the business. Besides that pure compliance, Kafou Medical is also following best practices
                in order to not infringe any anti-trust international laws. For that reason, full transparency in
                commercial activities and not disclosure of any confidential info, it is part of our commitment with
                all international companies we are working with.
            </p>
        </div>

        <div class="media-content">
            <div class="logo-wrapper">
                <img class="" src="assets/images/kafou_white2.png" alt="Kafou Medical Logo" />
            </div>
        </div>
    </div>
@endsection
