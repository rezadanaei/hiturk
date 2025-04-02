    @extends('layouts.main')

    <!-- Style section (optional)  -->
    <!-- Uncomment and add custom styles if needed -->
    @push('styles')

    <link rel="stylesheet" href="{{ asset('styles/global/fonts.css') }}"> 
    @endpush 

    <!-- Header section  -->
    @section('header')
         @include('components.header')
         
    @endsection

    <!-- Main content  -->
    @section('content')
        <div class="content" >
            <h1>Welcome to the new page!</h1>
            <p>This is the main content area. Customize as needed.</p>
        </div>
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