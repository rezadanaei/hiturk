    @extends('layouts.main')

    <!-- Style section (optional)  -->
    <!-- Uncomment and add custom styles if needed -->
     @push('styles') 
        <link rel="stylesheet" href="{{ asset('styles/global/fonts.css') }}"> 
        <link rel="stylesheet" href="{{ asset('styles/global/fonts2.css') }}"> 
        <link rel="stylesheet" href="{{asset('plugins/swiper/swiper-bundle.min.css')}}">
        <style>
            /* Global */
            :root {
            --main: #E3B000;
            --second: #606060;
            --black: black;
            }

            .color {
            color: var(--main);
            }
            .bold {
            color: black;
            font-weight: bold;
            }
            .active-border {
            border: 2px solid var(--main) !important;
            }
            .center {
            text-align: center;
            }
            .hidden {
            display: none;
            }

            /* Main */
            .main-container {
            margin: 0 auto;
            padding: 30px 60px !important;
            font-family: 'VazirFD';
            color: var(--second);
            direction: rtl;
            line-height: 1.8;
            max-width: 1440px;
            }
            .main-container p {
            text-align: justify, right;
            }
            .main-container strong {
            color: var(--black);
            }

            .product-single {
            margin-bottom: 24px;
            }

            /* Page Not Found */
            .page-not-found {
            max-width: 500px;
            text-align: center;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 2px;
            min-height: 500px;
            font-size: 16px;
            color: black;
            }
            .page-not-found img{
            width: 50%;
            }
            .page-not-found a {
            color: white;
            background-color: var(--main);
            border-radius: 24px;
            padding: 12px 48px;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            transition: all 0.2s ease;
            }
            .page-not-found a:hover {
            opacity: 0.7;
            }
            .page-not-found h2 {
            font-size: 24px;
            }

            @media screen and (max-width: 767px) { 
            .main-container {
                padding: 30px 40px !important;
            }
            .page-not-found img {
                width: 60%;
            }
            .page-not-found a {
                font-size: 14px;
                border-radius: 12px;
            }
            .page-not-found h2 {
                font-size: 20px;
            }
            }
        </style>
     @endpush  

    <!-- Header section  -->
    @section('header')
        @include('components.header')
    @endsection

    <!-- Main content  -->
    @section('content')
        <div class="content">
            <div class="main-container">
                <div class="page-not-found">
                    <img src="{{asset('icons/ui/404.png')}}" alt="صفحه یافت نشد">
                    <!-- <h1>404</h1> -->
                    <h2>صفحه مورد نظر شما پیدا نشد</h2>
                    <a href="{{route('home')}}">صفحه اصلی</a>
                </div>
            </div>
        </div>
    @endsection

    <!-- Footer section  -->
    @section('footer')
         @include('layouts.commitments')
         @include('layouts.footer-mobile')
    @endsection

    <!-- Script section (optional)  -->
    <!-- Uncomment and add custom scripts if needed -->
    @push('scripts') 
        <script src="{{asset('plugins/swiper/swiper-bundle.min.js')}}" ></script>
        <script src="{{ asset('scripts/components/sliders/custom-swipers.js') }}"></script>
    @endpush