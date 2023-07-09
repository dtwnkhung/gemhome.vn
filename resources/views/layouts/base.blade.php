<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($SEO) ? $SEO->title : config('app.name', 'ToeicMax') }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.0-2/css/bootstrap.min.css"
        integrity="sha512-hugT+JEQi0vXZbvspjv4x2M7ONBvsLR9IFTEQAYoUsmk7s1rRc2u7I6b4xa14af/wZ+Nw7Aspf3CtAfUOGyflA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    @yield('styles')
    <link href="{{ asset('css/toeic_page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vocabularies.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toeic-max.css') }}" rel="stylesheet">
    @isset($SEO)
        @isset($SEO->canonical)            
            <link rel="canonical" href="{{ $SEO->canonical }}">
        @else   
            <link rel="canonical" href="{{ url()->current() }}">
        @endisset
        @isset($SEO->title)            
            <meta property="og:title" content="{{ $SEO->title }}">
        @endisset
        @isset($SEO->description)            
            <meta property="og:description" content="{{ $SEO->description }}">
        @endisset        
        @isset($SEO->image)
            <meta property="og:image" content="{{ asset('storage/' . $SEO->image)  }}">
        @else
            <meta property="og:image" content="/backend/assets/img/brand/logo.svg">
        @endisset
    @else   
        <link rel="canonical" href="{{ url()->current() }}">
        <meta property="og:title" content="Học TOEIC">
        <meta property="og:description" content="Toeic Max - Vươn xa cùng TOEIC MAX">
        <meta property="og:image" content="/backend/assets/img/brand/logo.svg">
    @endisset
    <style>
        @media (min-width: 768px) {
            .navigation > ul > li a,
            .navigation > ul > li span {
                color: {{ isset($header_text_color) ? $header_text_color : '#333' }} !important;
            }
        }

        @media (max-width: 768px) {
            .navigation > ul::before {
                content: " ";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 100px;
                background: transparent url({{  isset($logo_url) ? asset('storage/' .$logo_url) : '/images/logo.png' }}) no-repeat center center/180px auto;
            }
        }
        
    </style>
</head>
<body>
    <div id="app">
        <nav class="top fix-top navbar navbar-expand-md navbar-light shadow-sm"  style="background: {{ isset($header_bg) ? $header_bg : '#fff' }}">
            <div class="container-fluid">
                @include('frontend.commons.header') 
            </div>
        </nav>

        <main class="container-fluid">
            <div class="row main-page">
                @if (session('status') || session('success') || session('error') || $errors->any())
                    <div class="col-12 error-panel">
                        @include('commons.sessionMessages')
                        @include('commons.errors')
                    </div>
                @endif
                @yield('content')
            </div>
        </main>

        <footer>
            @isset($footer_content)
                {!! $footer_content !!}
            @endisset   
        </footer>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript" defer></script>
    @yield('script')
</body>
</html>
