    @extends('layouts.main')

    <!-- Style section (optional)  -->
    <!-- Uncomment and add custom styles if needed -->
    @push('styles') 
        <link rel="stylesheet" href="{{ asset('styles/global/fonts.css') }}"> 
        <link rel="stylesheet" href="{{ asset('styles/global/fonts2.css') }}"> 
        <link rel="stylesheet" href="{{asset('plugins/swiper/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('styles/pages/blog.css')}}">
    @endpush  

    <!-- Header section  -->
    @section('header')
        @include('components.header')
    @endsection

    <!-- Main content  -->
    @section('content')
        <div class="content">
            <div class="main-container">
                <div class="blog-container">
                    <!-- Main Blog item -->
                    <article class="main-blog-item" style="background-image: url('{{asset('image/img.png')}}');">
                    <div class="mbi-content">
                        <div class="mbi-path"><a href="#">خانه</a> / <p>مقالات</p></div>
                        <a href="#"><h1>معرفی بهترین رژلب های خشک</h1></a>
                        <div class="mbi-extra">
                        <p class="mbi-time">1404/03/25</p>
                        <span>-</span>
                        <p class="mbi-expert">توضیحات کوتاه درباره این نوشته</p>
                        </div>
                    </div>
                    </article>
                    <!-- Main Blog item end -->

                    <div class="blog-main">

                    <div class="bm-side">
                        <!-- Category -->
                        <div class="bms-category bms-style">
                        <h3>دسته بندی</h3>

                        <form>

                            <!-- Category item -->
                            <div class="bmsc-cat-item">
                            <input type="radio" name="zibaei" id="zibaei" value="ziba">
                            <div><label for="zibaei">زیبایی</label><span>(12)</span></div>
                            </div>
                            <!-- Category item end -->

                        </form>
                        </div>
                        <!-- Category end -->

                        <!-- Last news -->
                        <div class="bms-last bms-style">
                        <h3>آخرین مقالات</h3>

                        <ul>

                            <!-- Last news item -->
                            <li class="bmsl-item">
                            <a href="#">
                                <img src="{{asset('image/img.png')}}" alt="عنوان نوشته">
                                <div>
                                <h4>عنوان نوشته</h4>
                                <p>1404/01/18</p>
                                </div>
                            </a>
                            </li>
                            <!-- Last news item end -->

                        </ul>
                        </div>
                        <!-- Last news end -->
                    </div>

                    <div class="bm-main">

                        <!-- Main posts -->
                        <article class="bmm-items">
                        <a href="#">
                            <img src="{{asset('image/img.png')}}" alt="عنوان نوشته">
                        </a>
                        <div>
                            <div class="bmm-category"><a href="#">دسته بندی</a></div>
                            <a class="bmm-title" href="#"><h2>عنوان نوشته</h2></a>
                            <p class="bmm-date">1404/02/26</p>
                            <p class="bmm-info">
                            انتخاب لباس مناسب برای آقایان قدکوتاه همیشه یک چالش بوده است، به‌ویژه در فصل‌های گرم سال که لایه‌لایه پوشیدن لباس‌ها گزینه‌ی مناسبی نیست. اگر شما هم جزو آقایانی هستید که به دنبال بهترین استایل برای آقایون قد کوتاه در بهار و تابستان ۱۴۰۴ هستید، این راهنمای کامل به شما کمک می‌کند.
                            </p>              
                        </div>
                        </article>
                        <!-- Main posts end -->

                    </div>

                    </div>

                </div>

            </div>
        </div>
        <!-- Recommend posts -->
        <section class="blog-recommend-container">
            <div class="blog-recommend">
                <h3>مطالب پیشنهادی</h3>

                @include('components.sliders.blog-recommend-swiper')
            </div>
        </section>
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
    
    
    @endpush 