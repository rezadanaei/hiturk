    @extends('layouts.main')

    <!-- Style section (optional)  -->
    <!-- Uncomment and add custom styles if needed -->
    @push('styles') 
        <link rel="stylesheet" href="{{ asset('styles/global/fonts.css') }}"> 
        <link rel="stylesheet" href="{{ asset('styles/global/fonts2.css') }}"> 
        <link rel="stylesheet" href="{{asset('plugins/swiper/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{ asset('styles/pages/shop.css') }}">
    @endpush  

    <!-- Header section  -->
    @section('header')
         @include('components.header')
    @endsection

    <!-- Main content  -->
    @section('content')
        <div class="content">
                        
            <div class="main-container">
                <div class="product-single">

                    <!-- Path to page -->
                    <div class="product-path">
                    <p><a href="#">خانه</a> / <a href="#">محصولات</a> / <a href="#" class="color">زیبایی و سلامت</a></p>
                    </div>
                    <!-- Path to page end -->
                    
                    <div class="single-product-top">

                    <div class="spt-single-slider">
                        
                        <!-- Side swiper of product -->
                        <div class="swiper-container">
                        <div class="swiper sinlgeProductImgSwiper">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{asset('image/product.png')}}" alt="تصویر اصلی"></div>
                            <div class="swiper-slide"><img src="{{asset('icons/ui/like.svg')}}" alt="تصویر اضافی 2"></div>
                            <div class="swiper-slide"><img src="{{asset('image/product1.png')}}" alt="قرمز" data-color="red"></div>
                            <div class="swiper-slide"><img src="{{asset('image/product2.png')}}" alt="آبی" data-color="blue"></div>
                            <div class="swiper-slide"><img src="{{asset('image/product.png')}}" alt="سبز" data-color="green"></div>
                            <div class="swiper-slide"><img src="{{asset('image/category.png')}}" alt="تصویر اضافی 1"></div>
                            </div>
                        </div>
                        </div>

                        <!-- Main image of product -->
                        <div class="main-image-container">
                        <div class="is-discount">5%</div>
                        <img src="{{asset('image/product.png')}}" alt="تصویر اصلی محصول" class="main-image">
                        </div>

                    </div>

                    <div class="spt-single-info">

                        <!-- Title -->
                        <div class="spt-single-title">
                        <h1>عنوان محصول</h1>
                        <section class="spt-actions">
                            <button id="addToFavorite" class="like"><img src="{{asset('icons/ui/like.svg')}}" alt="افزوندن به مورد علاقه"></button>
                            <button id="share"><img class="share-button" src="{{asset('icons/ui/share.svg')}}" alt="اشتراک گذاری">
                            <div class="share-content hidden" id="shareContent">
                                <!-- Telegram -->
                                <a class="share-btn telegram" target="_blank">
                                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111646.png" alt="Telegram">
                                <p>اشتراک گذاری در تلگرام</p>
                                </a>

                                <!-- WhatsApp -->
                                <a class="share-btn whatsapp" target="_blank">
                                <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp">
                                <p>اشتراک گذاری در واستاپ</p>
                                </a>

                                <!-- Twitter -->
                                <a class="share-btn twitter" target="_blank">
                                <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter">
                                <p>اشتراک گذاری در توییتر</p>
                                </a>

                                <!-- Email -->
                                <a class="share-btn email" target="_blank">
                                <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email">
                                <p>اشتراک گذاری با ایمیل</p>
                                </a>

                                <!-- Copy Link -->
                                <div class="share-btn copy" id="copyLinkBtn">
                                <img src="https://cdn-icons-png.flaticon.com/512/60/60510.png" alt="Copy Link">
                                <p>کپی لینک</p>
                                </div>
                            </div>

                            </button>
                        </section>
                        </div>

                        <!-- Brands -->
                        <div class="spt-single-brands">
                        <p>برند:</p>
                        <a href="#" class="color">اسم برند</a>
                        </div>

                        <!-- Categories -->
                        <div class="spt-single-categories">
                            <p>دسته بندی:</p>
                            <a href="#" class="bold">زیبایی و سلامت</a>
                        </div>


                        <!-- Color -->
                        <div class="color-selector">
                        <p>رنگ:</p>
                        <section>
                            <div class="color-option" data-color="red"><img src="{{asset('image/product1.png')}}" alt="قرمز"><p>قرمز</p></div>
                            <div class="color-option" data-color="blue"><img src="{{asset('image/product2.png')}}" alt="آبی"><p>آبی</p></div>
                            <div class="color-option" data-color="green"><img src="{{asset('image/product.png')}}" alt="سبز"><p>سبز</p></div>
                        </section>
                        </div>

                        <!-- Size -->
                        <div class="stp-single-size">
                        
                        <select id="filter-size">
                            <option value="">سایز</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                        </select>

                        <a href="#" class="spt-wms-btn">سایز من چنده؟</a>

                        </div>
                        
                    </div>

                    <!-- Single Add to card -->
                    <div class="stp-single-add-to-card">
                        <!-- Price with NO Discount -->
                        <section>
                        <div class="price"><p>3,100,000 تومان</p></div>
                        <button id="addToCard"><img src="{{asset('icons/ui/card.svg')}}" alt="افزودن به سبد خرید"> افزودن به سبد خرید </button>
                        </section>

                        <!-- Price with Discount -->
                        <section>
                        <div>
                        <div class="price with-discount"><p>3,100,000 تومان</p> <span class="off">40%</span></div>
                        <span class="discount-price">780,000 تومان</span>
                        </div>
                        <button id="addToCard"><img src="{{asset('icons/ui/card.svg')}}" alt="افزودن به سبد خرید"> افزودن به سبد خرید </button>
                        </section>

                    </div>

                    </div>

                    <!-- Single Tabs -->
                    <div class="spt-tabs">
                    <div class="spt-spt-tab-buttons">
                        <button class="spt-tab-button active" data-tab="tab1">مشخصات محصول</button>
                        <button class="spt-tab-button" data-tab="tab2">نظرات کاربران</button>
                        <button class="spt-tab-button" data-tab="tab3">پرسش و پاسخ</button>
                    </div>

                    <div class="tab-content">
                        <!-- Content of Tab 1 -->
                        <div class="spt-tab-pane active" id="tab1">
                        <div class="spt-tp-content">
                            <!-- Table of info -->
                            <table>
                            <!-- Item for info -->
                            <tr>
                                <td>کد محصول</td>
                                <td>AM-LUS-W5P</td>
                            </tr>
                            <!-- Item for info end -->

                            <tr>
                                <td>یقه</td>
                                <td>انگلیسی</td>
                            </tr>
                            <tr>
                                <td>آستین</td>
                                <td>بلند</td>
                            </tr>
                            <tr>
                                <td>طرح</td>
                                <td>ساده</td>
                            </tr>
                            <tr>
                                <td>ماکزیمم دمای شستشو</td>
                                <td>30 درجه سانتی‌گراد</td>
                            </tr>
                            <tr>
                                <td>ویژگی محصول</td>
                                <td>دارای تکه‌دوزی پارچه ابریشمی در قسمت سرآستین، نوار دوزی براق در قسمت یقه و جلوی لباس</td>
                            </tr>

                            </table>

                            <!-- Content of Product -->
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                        </div>
                        </div>

                        <div class="spt-tab-pane" id="tab2">
                        <div class="spt-tp-content">
                            
                            <div class="single-comment">

                            <!-- Comment list -->
                            <div class="scc-comment-list">
                                <h3>دیدگاه کاربران درباره این محصول <span>(4)</span></h3>

                                <ul class="comment-list">

                                <!-- Single Comment item -->
                                <li>
                                    <div class="comment-item-title">
                                    <h4>اسم کاربر</h4>
                                    <p>5 دقیقه پیش</p>
                                    <button class="comment-replay">پاسخ</button>
                                    </div>
                                    <p class="comment-text">پیام خود را از طریق فرم زیر برای ما ارسال کنید.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، </p>
                                </li>
                                <!-- Single Comment item end -->

                                <!-- Single comment item replay -->
                                <li>
                                    <div class="comment-item-title">
                                    <h4 class="is-replay-comment">اسم کاربر</h4>
                                    <p>5 دقیقه پیش</p>
                                    <button class="comment-replay">پاسخ</button>
                                    </div>
                                    <p class="comment-text is-replay-comment">پیام خود را از طریق فرم زیر برای ما ارسال کنید.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، </p>
                                </li>
                                <!-- Single comment item replay end -->
                                
                                </ul>
                            </div>
                            <!-- Comment list end -->

                            <!-- Comment form -->
                            <div class="single-comment-form">
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

                            </div>

                        </div>
                        </div>
                        <div class="spt-tab-pane" id="tab3">
                        <div class="spt-tp-content">

                            <div class="question-part">
                            <!-- Question list -->
                            <div class="scc-comment-list">
                                <h3>پرسش های کاربران درباره این محصول <span>(2 پرسش)</span></h3>

                                <ul class="comment-list">

                                <!-- Single Question item -->
                                <li>
                                    <div class="comment-item-title">
                                    <section>
                                        <img src="{{asset('icons/ui/question.svg')}}" alt="سوال">
                                        <h4>دوستانی که سفارش دادن میشه بگید کیفیت صدا، بیس و تفکیک صداش چطوریه؟ این مدل بهتره یا مدل سیلیکون دار</h4>
                                    </section>
                                    <button class="comment-replay question-replay">پاسخ</button>
                                    </div>
                                    <div class="comment-text">
                                    <!-- Answer item one -->
                                    <div class="saq-item">
                                        <span class="answer">پاسخ: </span>
                                        <p class="answer-p">پیام خود را از طریق فرم زیر برای ما ارسال کنید.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، </p>
                                        <div class="answer-user">فاطمه اسماعیلی <span class="ruler">خریدار</span></div>
                                    </div>
                                    <!-- Answer item one end -->
                                    
                                    <div class="saq-item">
                                        <span class="answer">پاسخ: </span>
                                        <p class="answer-p">پیام خود را از طریق فرم زیر برای ما ارسال کنید.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، </p>
                                        <div class="answer-user">فاطمه اسماعیلی <span class="ruler">خریدار</span></div>
                                    </div>

                                    </div>
                                </li>
                                <!-- Single Question item end -->

                                <!-- Single Question item replay -->
                                <li>
                                    <div class="comment-item-title">
                                    <section>
                                        <img src="{{asset('icons/ui/question.svg')}}" alt="سوال">
                                        <h4>دوستانی که سفارش دادن میشه بگید کیفیت صدا، بیس و تفکیک صداش چطوریه؟ این مدل بهتره یا مدل سیلیکون دار</h4>
                                    </section>
                                    <button class="comment-replay question-replay">پاسخ</button>
                                    </div>
                                    <div class="comment-text">
                                    <!-- Answer item one -->
                                    <div class="saq-item">
                                        <span class="answer">بدون پاسخ</span>
                                    </div>
                                    <!-- Answer item one end -->
                                    </div>
                                </li>
                                <!-- Single Question item replay end -->
                                
                                </ul>
                            </div>
                            <!-- Comment list end -->
                            </div>

                            <!-- Question form -->
                            <div class="single-comment-form">
                            <form action="#" class="comment-send-form">
                                <textarea name="commented" id="commented" placeholder="ثبت پرسش درباره محصول" rows="4"></textarea>
                                <input type="submit" value="ثبت پرسش">
                            </form>
                            </div>
                            <!-- Question form end -->

                        </div>
                        </div>

                    </div>
                    </div>
                    <!-- Single Tabs end -->

                    <!-- Related product Slider go to HERE!!!! -->
                    <div class="product-s">
                        <span class="product-title">محصولات مرتبط</span>
                        <div class="sections-title">
                            <span>محصولات مرتبط</span>
                            <a href="#">مشاهده همه <img src="{{asset('icons/ui/next-icon-mobile.svg')}}" alt="next"></a>
                        </div>
                        @include('components.sliders.products')
                        <a class="see-all" href="#">مشاهده همه <img src="{{asset('/icons/ui/next-icon-mobile.svg')}}" alt="next"></a>
                    </div>
                    
                    <!-- Random product Slider go to HERE!!!! -->
                    <div class="product-s">
                        <span class="product-title">محصولات مشابه</span>
                        <div class="sections-title">
                            <span>محصولات مشابه</span>
                            <a href="#">مشاهده همه <img src="{{asset('icons/ui/next-icon-mobile.svg')}}" alt="next"></a>
                        </div>
                        @include('components.sliders.products')
                        <a class="see-all" href="#">مشاهده همه <img src="{{asset('/icons/ui/next-icon-mobile.svg')}}" alt="next"></a>
                    </div>

                </div>
            </div>
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
            // Tabs
            const tabButtons = document.querySelectorAll('.spt-tab-button');
            const tabPanes = document.querySelectorAll('.spt-tab-pane');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                // 1. حذف active از دکمه‌ها
                tabButtons.forEach(btn => btn.classList.remove('active'));

                // 2. افزودن active به دکمه کلیک‌شده
                button.classList.add('active');

                // 3. پنهان کردن تمام تب‌ها
                tabPanes.forEach(pane => pane.classList.remove('active'));

                // 4. نمایش تب موردنظر
                const targetTab = button.getAttribute('data-tab');
                document.getElementById(targetTab).classList.add('active');
                });
            });

            // Share
            const shareBtn = document.getElementById("share");
            const shareContent = document.getElementById("shareContent");

            shareBtn.addEventListener("click", function (event) {
                // جلو گیری از بسته شدن به خاطر کلیک روی خود دکمه
                event.stopPropagation();
                shareContent.classList.toggle("hidden");
            });

            // وقتی داخل shareContent کلیک شد بسته نشه
            shareContent.addEventListener("click", function (event) {
                event.stopPropagation();
            });

            // اگر هر جای دیگه کلیک شد، مخفی بشه
            document.addEventListener("click", function () {
                if (!shareContent.classList.contains("hidden")) {
                shareContent.classList.add("hidden");
                }
            });

            const pageUrl = encodeURIComponent(window.location.href);
            const pageTitle = encodeURIComponent(document.title);

                document.querySelector(".telegram").href = `https://t.me/share/url?url=${pageUrl}&text=${pageTitle}`;
                document.querySelector(".whatsapp").href = `https://wa.me/?text=${pageTitle}%20${pageUrl}`;
                document.querySelector(".twitter").href = `https://twitter.com/intent/tweet?url=${pageUrl}&text=${pageTitle}`;
                document.querySelector(".email").href = `mailto:?subject=${pageTitle}&body=${pageUrl}`;

                document.getElementById("copyLinkBtn").addEventListener("click", () => {
                navigator.clipboard.writeText(window.location.href).then(() => {
                    alert("لینک کپی شد");
                });
                });


                // Add to like
                document.addEventListener("DOMContentLoaded", () => {
                const likeButtons = document.querySelectorAll(".spt-actions .like");

                likeButtons.forEach(like => {
                    like.addEventListener("click", (e) => {
                    e.preventDefault(); 
                    e.stopPropagation();

                    const img = like.querySelector("img");
                    const liked = img.dataset.liked === "true";

                    if (liked) {
                        img.src = "{{asset('icons/ui/like.svg')}}";
                        img.dataset.liked = "false";
                    } else {
                        img.src = "{{asset('icons/ui/liked.svg')}}";
                        img.dataset.liked = "true";
                    }
                    });
                });
                });

                // Swiper
                const swiper = new Swiper('.sinlgeProductImgSwiper', {
                direction: 'vertical',
                slidesPerView: 4,
                spaceBetween: 10,
                loop: false,
                watchSlidesProgress: true,
                });

                const mainImage = document.querySelector('.main-image');
                const swiperSlides = document.querySelectorAll('.swiper-slide img');
                const colorOptions = document.querySelectorAll('.color-option');

                // Update main image and active slide
                function updateMainImage(src, color = null) {
                mainImage.src = src;
                swiperSlides.forEach(slide => slide.classList.remove('active'));
                colorOptions.forEach(option => option.classList.remove('active'));
                const selectedSlide = [...swiperSlides].find(slide => slide.src.endsWith(src.split('/').pop()));
                if (selectedSlide) {
                    selectedSlide.classList.add('active');
                    if (color) {
                    const selectedOption = document.querySelector(`.color-option[data-color="${color}"]`);
                    if (selectedOption) selectedOption.classList.add('active');
                    }
                }
                }

                // Swiper slide click
                swiperSlides.forEach(slide => {
                slide.addEventListener('click', () => {
                    const src = slide.src;
                    const color = slide.dataset.color || null;
                    updateMainImage(src, color);
                    swiper.slideTo([...swiperSlides].indexOf(slide));
                });
                });

                // Color option click
                colorOptions.forEach(option => {
                option.addEventListener('click', () => {
                    const color = option.dataset.color;
                    const targetSlide = document.querySelector(`.swiper-slide img[data-color="${color}"]`);
                    const src = targetSlide.src;
                    updateMainImage(src, color);
                    swiper.slideTo([...swiperSlides].indexOf(targetSlide));
                });
                });

                // Initialize with first slide (main image)
                updateMainImage(swiperSlides[0].src, null);
        </script>
    @endpush 