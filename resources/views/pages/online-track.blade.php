    @extends('layouts.main')

    <!-- Style section (optional)  -->
    <!-- Uncomment and add custom styles if needed -->
    @push('styles') 
    <link rel="stylesheet" href="{{ asset('styles/global/fonts.css') }}"> 
    <link rel="stylesheet" href="{{ asset('styles/global/fonts2.css') }}"> 
    <link rel="stylesheet" href="{{asset('plugins/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/pages/online-track.css')}}">
    @endpush  

    <!-- Header section  -->
    @section('header')
         @include('components.header')
    @endsection

    <!-- Main content  -->
    @section('content')
        
    <div class="main-container">
        <section class="online-tracking">
        <div class="online-track-title">
            <img src="{{asset('icons/ui/online-track.svg')}}" alt="رهگیری آنلاین">
            <h1>رهگیری آنلاین</h1>
        </div>

        <div class="oto-content" style="background-image: url('{{asset('icons/ui/oto-bg.png')}}');">
            <section>
            <!-- Online tracking info -->
            <p class="oto-info center">برای رهگیری سفارش خود و اطلاع از آخرین وضعیت می‌توانید با وارد کردن شماره سفارش پیامک شده یا کد قرارداد در کادر زیر، از وضعیت بسته خود مطلع شوید.</p>
            <!-- Online tracking info end -->

            <!-- Online tracking search -->
            <div class="oto-search">
                <div class="oto-seach-form">
                <input type="search" name="otoSearch" id="otoSearch" placeholder="شماره سفارش یا موبایل یا ایمیل شما">
                <button id="openPopup">
                    <img src="{{asset('icons/ui/oto-tracking.svg')}}" alt="پیگیری سفارش">
                    پیگیری سفارش
                </button>
                </div>
            </div>
            <!-- Online tracking search end -->

            <iframe class="oto-iframe" title="map-iframe" src="https://neshan.org/maps/iframe/places/_bBFFQOARnul#c39.213-44.770-18z-0p/39.213396245797846/44.76914413279109" allowFullScreen loading="lazy" ></iframe>
            </section>
        </div>

        <!-- Popup -->
        <div class="popup-overlay" id="popup">
            <div class="popup-content">

            <div class="oto-popup-title">
                <img src="{{asset('icons/ui/oto-popup.svg')}}" alt="پیگیری سفارش">
                <h3>پیگیری سفارش</h3>
            </div>

            <div class="oto-order-number">
                <p>پیگیری سفارش شماره: 1111551557</p>
            </div>
            
            <!-- Order Date -->
            <div class="oto-popup-content">
                <p class="otopc-time">پنج شنبه 14 فروردین ماه 1404</p>
                <ol class="otopc-levels">
                <li>مرحله اول تحویل گرفتن مرسوله از ترکیه - 12:27</li>
                <li>مرحله اول تحویل گرفتن مرسوله از ترکیه - 12:27</li>
                <li>مرحله اول تحویل گرفتن مرسوله از ترکیه - 12:27</li>
                </ol>
            </div>
            <!-- Order Date end -->

            <button class="close-btn" id="closePopup">بستن</button>
            </div>
        </div>
        <!-- Popup end -->

        </section>
    </div>

    @endsection

    <!-- Footer section  -->
    @section('footer')
        @include('layouts.commitments')

    @endsection

    <!-- Script section (optional)  -->
    <!-- Uncomment and add custom scripts if needed -->
    @push('scripts') 
        <script src="{{asset('plugins/swiper/swiper-bundle.min.js')}}" ></script>
        <script src="{{ asset('scripts/components/sliders/custom-swipers.js') }}"></script> 
        <script>
            const openBtn = document.getElementById('openPopup');
            const closeBtn = document.getElementById('closePopup');
            const popup = document.getElementById('popup');

            openBtn.addEventListener('click', () => {
                popup.style.display = 'block';
            });

            closeBtn.addEventListener('click', () => {
                popup.style.display = 'none';
            });

            window.addEventListener('click', (e) => {
                if (e.target === popup) {
                popup.style.display = 'none';
                }
            });
        </script>
    @endpush 