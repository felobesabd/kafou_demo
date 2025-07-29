<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kafou</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        .snap-container {
            height: 100vh;                /* Full viewport height */
            overflow-y: scroll;           /* Enable vertical scrolling */
            scroll-snap-type: y mandatory;/* Snap to sections vertically */
            scroll-behavior: smooth;      /* Smooth scrolling */
        }

        .snap-section {
            height: 100vh;                /* Each section fills the viewport */
            scroll-snap-align: start;     /* Snap to the start of each section */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
        }
    </style>
</head>
<body>
<div class="snap-container">
    <section class="snap-section" style="background: #17898c; color: #fff;">
        <h1>Section 1</h1>
        <p>This is the first section.</p>
    </section>
    <section class="snap-section" style="background: #fff; color: #222;">
        <h1>Section 2</h1>
        <p>This is the second section.</p>
    </section>
    <section class="snap-section" style="background: #f5f5f5; color: #222;">
        <h1>Section 3</h1>
        <p>This is the third section.</p>
    </section>
    <!-- Add more sections as needed -->
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>



