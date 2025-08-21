<!DOCTYPE html>
<html lang="fa" dir="{{ app()->getLocale() == 'fa' ? 'ltr' : 'rtl' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- Meta tag settings --}}
    <meta name="description" content="{{ $description ?? $settings->meta_description ?? 'Default meta description' }}">
    <meta name="keywords" content="{{ $keywords ?? $settings->meta_keywords ?? 'default, keywords' }}">
    
    {{-- Page title --}}
    <title>{{ $title ?? $settings->title ?? 'Default Title' }}</title>

    {{-- Meta tags for page indexing --}}
    <meta name="robots" content="{{ $robots_index ?? $settings->robots_index ?? 'index, follow' }}">



    {{-- Link to styles --}}
    <link rel="stylesheet" href="@yield('style', asset('css/app.css'))">
    <link rel="stylesheet" href="{{ asset('styles/global/fonts.css') }}"> 
    <link rel="stylesheet" href="{{ asset('styles/global/fonts2.css') }}"> 
    <link rel="stylesheet" href="{{ asset('styles/global/reset.css') }}"> 

    <style>
        .no-scroll{
            overflow: hidden;
        }
    </style>
    @stack('styles')

    {{-- Additional meta tags and resources --}}
    @if(isset($additional_meta))
        {!! $additional_meta !!}
    @endif
    <style>
    
    </style>
</head>
<body>
    @include('layouts.loader')
    {{-- Header content --}}
    @hasSection('header')
        @yield('header')
    @endif
    {{-- Main content --}}
    <div class="container">
        @yield('content')
    </div>
    {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}"></script>
        
        
    @stack('scripts')
    {{-- Footer --}}
    @hasSection('footer')
        @yield('footer')
        @if (!request()->is('login') && !request()->is('profile*'))
            @include('layouts.auth-modal')
        @endif
        @include("layouts.footer-mobile")
    @endif
  
    
</body>
</html>
