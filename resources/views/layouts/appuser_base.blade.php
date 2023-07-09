<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <style>
        @media (min-width: 768px) {
            .navigation > ul > li a,
            .navigation > ul > li span {
                color: {{ $header_text_color }} !important;
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
                background: transparent url({{  asset('storage/' .$logo_url) }}) no-repeat center center/180px auto;
            }
        }
        
    </style>
    <link rel="stylesheet" href="/assets/css/socialite.css">
</head>
<body>
    <div id="app">
        <nav class="top fix-top navbar navbar-expand-md navbar-light shadow-sm"  style="background: {{ $header_bg }}">
            <div class="container-fluid">
                @include('frontend.commons.header') 
            </div>
        </nav>

        <main class="container-fluid">
            <div class="row main-page-login">
                <div class="col-12 error-panel">
                    @include('commons.sessionMessages')
                    @include('commons.errors')
                </div>
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
