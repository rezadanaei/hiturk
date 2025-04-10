    @extends('layouts.main')

    <!-- Style section (optional)  -->
    <!-- Uncomment and add custom styles if needed -->
    @push('styles')
    <link rel="stylesheet" href="{{ asset('styles/global/fonts.css') }}"> 
    <link rel="stylesheet" href="{{ asset('styles/pages/home.css') }}"> 
    <link rel="stylesheet" href="{{asset('plugins/swiper/swiper-bundle.min.css')}}">
    
    
    @endpush 
    <script src="{{asset('plugins/swiper/swiper-bundle.min.js')}}" ></script>

    <!-- Header section  -->
    @section('header')
         @include('components.header')
         
    @endsection

    <!-- Main content  -->
    @section('content')
        <div class="content" >
            <div class="top-slider">
                @include('components.sliders.defult')
            </div>
            <div class="order-process">
                <div class="items product-selection">
                    <div class="img-icon">
                        <span>
                        </span>
                        <img src="{{asset('icons/ui/select.svg')}}" alt="">
                    </div>
                    <span class="title">اتخاب کالا و تسویه حساب</span>
                    <p class="description">محصول را با خیال راحت و اطمینان خاطر از اصالت کالا انتخاب نموده و نسبت به پرداخت آن اقدام نمایید.</p>
                    
                </div>
                <div class="items order-submit">
                    <div class="img-icon">
                        <span>
                        </span>
                        <img src="{{asset('icons/ui/order-submit.svg')}}" alt="">
                    </div>
                    <span class="title">ثبت سفارش محصول منتخب شما</span>
                    <p class="description">کالای منتخب شما توسط همکاران ما از ترکیه ثبت سفارش می گردد.</p>
                    
                </div>
                <div class="items order-clearance">
                    <div class="img-icon">
                        <span>
                        </span>
                        <img src="{{asset('icons/ui/order-clearance.svg')}}" alt="">
                    </div>
                    <span class="title">ترخیص قانونی های ترُک</span>
                    <p class="description">ما با اخذ مجوزهای قانونی از سازمان منطقه آزاد ماکو کالای شما از گمرک ترخیص می نمایم.</p>
                    
                </div>
                <div class="items packaging-box">
                    <div class="img-icon">
                        <span>
                        </span>
                        <img src="{{asset('icons/ui/packaging-box.svg')}}" alt="">
                    </div>
                    <span class="title">بسته بندی و ارسال کالا</span>
                    <p class="description">با اتمام مراحل ترخیص ، کالا مجددا بازبینی ، بسته بندی و آماده اسال به شما مشتری گرامی می شود.
                    </p>
                    
                </div>
                

            </div>
            <div  class="categories-slider">
                <div class="categories-slider-title">
                    <span>دسته بندی ها</span>
                    <a href="#">مشاهده همه <img src="{{asset('icons/ui/next-icon-mobile.svg')}}" alt="next"></a>
                </div>
                @include('components.sliders.categories')
            </div>
            <div  class="amazing-discount-slider">
                <div class="amazing-discount-slider-title">
                    <img src="{{asset('icons/ui/takhfif-icon.svg')}}" alt="amazing discount">
                    <span>تخفیف های شگفت انگیز</span>
                </div>
                @include('components.sliders.discounts')
            </div>
            <div class="brands">
                @include('components.sliders.brands')
            </div>
             
            @include('layouts.commitments')
        
        </div>
        @include('layouts.auth-modal')
    @endsection
    
    @push('scripts') 
    
    
    @endpush

    <!-- Footer section  -->
    @section('footer')
         <!-- Add your footer content here or leave it empty  -->
    @endsection

    <!-- Script section (optional)  -->
    <!-- Uncomment and add custom scripts if needed -->

    <script>

    </script>