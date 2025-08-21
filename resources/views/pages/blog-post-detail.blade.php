    @extends('layouts.main')

    <!-- Style section (optional)  -->
    <!-- Uncomment and add custom styles if needed -->
    @push('styles') 
        <link rel="stylesheet" href="{{ asset('styles/global/fonts.css') }}"> 
        <link rel="stylesheet" href="{{ asset('styles/global/fonts2.css') }}"> 
        <link rel="stylesheet" href="{{asset('plugins/swiper/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('styles/pages/blog-post-detail.css')}}">
    @endpush  

    <!-- Header section  -->
    @section('header')
         @include('components.header')
    @endsection

    <!-- Main content  -->
    @section('content')
        <div class="content">
            
            <div class="main-container">
            
            <div class="single-blog-container">

                <div class="sbc-main">
                <!-- Post Path -->
                <div class="sbc-path">
                    <a href="#">خانه</a> / <a href="#">مقالات</a> / <p>عنوان مقاله</p>
                </div>
                <!-- Post Path end -->

                <!-- Single img -->
                <img class="sbc-thumbnail" src="{{asset('image/img.png')}}" alt="عنوان نوشته">
                <!-- Single img end -->

                <!-- Single title -->
                <h1 class="sbc-title">عنوان نوشته</h1>

                <!-- Single extra info -->
                <div class="sbc-extra-info">
                    <div class="sbcei-time"><img src="{{asset('icons/ui/calendar.svg')}}" alt="تاریخ"> <p>1403/02/16</p></div>
                    <div> | </div>
                    <div class="sbcei-read"><img src="{{asset('icons/ui/clock.svg')}}" alt="زمان مطالعه"> <p>زمان مطالعه: <span>15 دقیقه</span></p></div>
                </div>
                <!-- Single extra info end -->

                <!-- Single Content -->
                <div class="sbc-content">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                    <div class="grid-two">
                    <img src="{{asset('image/img.png')}}" alt="عنوان نوشته">
                    <img src="{{asset('image/img.png')}}" alt="عنوان نوشته">
                    </div>
                    <h2>چرا از این رژ استفاده کنیم؟</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                </div>
                <!-- Single Content end -->

                <!-- Single Tags -->
                <div class="sbc-tags">
                    <a href="#">زیبایی</a>
                    <a href="#">زیبایی</a>
                    <a href="#">زیبایی</a>
                    <a href="#">زیبایی</a>
                    <a href="#">زیبایی</a>
                    <a href="#">زیبایی</a>
                    <a href="#">زیبایی</a>
                </div>
                <!-- Single Tags end -->

                <!-- Single Social -->
                    <div class="sbc-social">
                    <p>اشتراک گذاری مطلب:</p>
                    <div class="sbcs-share">
                        <a class="telegram" href="#" target="_blank"><img src="{{asset('icons/ui/telegram.svg')}}" alt="تلگرام"></a>
                        <a class="instagram" href="#" target="_blank"><img src="{{asset('icons/ui/instagram2.svg')}}" alt="اینستاگرام"></a>
                        <a class="whatsapp" href="#" target="_blank"><img src="{{asset('icons/ui/whatsapp.svg')}}" alt="واتساپ"></a>
                    </div>
                    </div>
                <!-- Single Social end -->

                </div>

                <div class="sbc-side">

                <div class="bm-side">

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

                    <!-- Ads 1 -->
                    <div class="sbc-ads1" style="background-image: url('{{asset('image/img.png')}}');">
                    <div class="sbc-overlay"></div>
                    <a href="#" class="sbc-ads-content">
                        <h4>بنر تبلیغاتی </h4>
                        <p>عنوان تبلیغات اول همراه با توضیح</p>
                    </a>
                    </div>
                    <!-- Ads 1 end -->

                    <!-- Ads 2 -->
                    <div class="sbc-ads2">
                    <a href="#"><img src="{{asset('image/img.png')}}" alt="عنوان تبلیغ"></a>
                    <a href="#"><h3>بنر تبلیغاتی </h3></a>
                    <h4>عنوان تبلیغات شماره دو همراه با توضیح</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد </p>
                    </div>
                    <!-- Ads 2 end -->

                </div>

                </div>

            </div>

            <div class="single-comment">

                <!-- Comment form -->
                <div class="single-comment-form">
                <div class="scc-comment-right">
                    <img src="{{asset('icons/ui/comment-form.svg')}}" alt="کامنت">
                    <h3 class="color">دیدگاه خود را درباره این مطلب برای ما ارسال کنید</h3>
                    <p>نشانی ایمیل شما منتشر نخواهد شد.</p>
                </div>

                <form action="#" class="comment-send-form">
                    <div class="csf-top-part">
                    <input type="text" name="username" id="username" placeholder="نام">
                    <input type="email" name="usermail" id="usermail" placeholder="ایمیل">
                    </div>
                    <textarea name="commented" id="commented" placeholder="پیام" rows="4"></textarea>
                    <input type="submit" value="ارسال دیدگاه">
                </form>
                </div>
                <!-- Comment form end -->

                <!-- Comment list -->
                <div class="scc-comment-list">
                <h3>دیدگاه کاربران درباره این مطلب <span>(4)</span></h3>

                <ul class="comment-list">

                    <!-- Single Comment item -->
                    <li>
                    <div class="comment-item-title">
                        <h4>اسم کاربر</h4>
                        <p>5 دقیقه پیش</p>
                    </div>
                    <p class="comment-text">پیام خود را از طریق فرم زیر برای ما ارسال کنید.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، </p>
                    </li>
                    <!-- Single Comment item end -->
                    
                </ul>
                </div>
                <!-- Comment list end -->

            </div>

            </div>


            <!-- Recommend posts -->
            <section class="blog-recommend-container">
            <div class="blog-recommend">
                <h3>مطالب مرتبط</h3>

                @include('components.sliders.blog-recommend-swiper')
            </div>
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
    @endpush 