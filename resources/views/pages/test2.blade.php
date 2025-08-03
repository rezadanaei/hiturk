    @extends('layouts.main')

    <!-- Style section (optional)  -->
    <!-- Uncomment and add custom styles if needed -->
    <!-- @push('styles') 
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}"> 
    @endpush  -->

    <!-- Header section  -->
    @section('header')
         <!-- Add your header content here or leave it empty  -->
    @endsection

    <!-- Main content  -->
    @section('content')
        @include('components.sliders.nested-swiper')
    @endsection

    <!-- Footer section  -->
    @section('footer')
         <!-- Add your footer content here or leave it empty  -->
    @endsection

    <!-- Script section (optional)  -->
    <!-- Uncomment and add custom scripts if needed 
    @push('scripts') 
    <script src="{{ asset('js/custom.js') }}"></script> 
    @endpush -->