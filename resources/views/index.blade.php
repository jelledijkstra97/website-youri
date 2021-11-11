<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" translate="no">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google" content="notranslate">

        <title>Youri van der Starre</title>

        <!-- Styles -->
        <link href="{{ mix('css/main.css') }}" rel="stylesheet" />

        <!-- Scripts -->
        <script src="{{ mix('js/main.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
        <link rel="manifest" href="favicons/site.webmanifest">
        <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body class="antialiased">
        <div class="root">
            @include('partials.header')

            @include('templates.full-screen-video', [
                'video' => 'assets/videos/intro-video.mp4', 
                'poster' => 'assets/logos/main.png',
                'fullHeight' => true
            ])

            @include('partials.services.index')
            
            @include('partials.audio')

            @include('partials.photo')

            @include('partials.about')

            @include('partials.footer')
        </div>
    </body>
</html>
