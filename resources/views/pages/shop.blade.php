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

                <div class="product-archive">

                    <!-- Top Category Swiper -->
                    <section class="product-archive-categories">
                    <div class="swiper ArchiveCatSwiper">
                        <div class="swiper-wrapper">
                        <!-- Category item -->
                        @foreach (range(0,10) as $number )
                            <a href="#" class="swiper-slide">
                                <img src="{{ asset('image/category.png') }}" alt="عنوان دسته بندی">
                                <p>عنوان دسته بندی</p>
                            </a>
                        @endforeach
                        
                        <!-- Category item end -->

                        </div>
                    </div>
                    </section>
                    <!-- Top Category Swiper end -->


                    <section class="archive-product-list">
                        
                    <!-- Filters -->
                    <div class="filters">
                        
                        <div class="filters-selection">
                        <select id="filter-sort">
                        <option value="">مرتب سازی</option>
                        <option value="newest">جدیدترین</option>
                        <option value="oldest">قدیمی‌ترین</option>
                        <option value="price-asc">ارزان‌ترین</option>
                        <option value="price-desc">گران‌ترین</option>
                        </select>

                        <select id="filter-brand">
                        <option value="">برند</option>
                        <option value="nike">Nike</option>
                        <option value="samsung">Samsung</option>
                        <option value="apple">Apple</option>
                        </select>
                        
                        <select id="filter-price">
                        <option value="">قیمت</option>
                        <option value="0-100">۰ تا ۱۰۰</option>
                        <option value="100-500">۱۰۰ تا ۵۰۰</option>
                        <option value="500+">بیشتر از ۵۰۰</option>
                        </select>

                        <select id="filter-category">
                        <option value="">دسته بندی</option>
                        <option value="clothing">پوشاک</option>
                        <option value="electronics">الکترونیک</option>
                        <option value="home">خانه</option>
                        </select>
                        
                        <select id="filter-size">
                        <option value="">سایز</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        </select>

                        <select id="filter-color">
                        <option value="">رنگ</option>
                        <option value="red">قرمز</option>
                        <option value="blue">آبی</option>
                        <option value="black">مشکی</option>
                        </select>
                        </div>

                        <div class="switch-available">
                        <p>کالا‌های موجود</p>
                        <input class="tgl tgl-ios" type="checkbox" id="filter-available">
                        <label class="tgl-btn" for="filter-available"></label>
                        </div>

                    </div>
                    <!-- Filters end -->

                    <!-- Product list -->
                    <div class="products">
                        <!-- Archive item -->
                        <a href="#" class="product">
                        <img src="{{ asset('image/product.png') }}" alt="محصول 1">
                        <h3>محصول شماره ۱</h3>
                        <p class="price color">۲۵۰,۰۰۰ تومان</p>
                        <div class="like"><img src="{{ asset('icons/ui/like.svg') }}" alt="پسندیدن"></div>
                        </a>
                        <!-- Archive item end -->

                        <!-- Archive item in off -->
                        <a href="#" class="product">
                        <div class="is-discount">5%</div>
                        <img src="{{ asset('image/product.png') }}" alt="محصول 2">
                        <h3>محصول شماره ۲</h3>
                        <p class="price color">۱۵۰,۰۰۰ تومان</p>
                        <div class="like"><img src="{{ asset('icons/ui/like.svg') }}" alt="لغو پسندیدن"></div>
                        </a>
                        <!-- Archive item in off end -->

                    </div>
                    <!-- Product list end -->
                    </section>

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
        // Add to like
        document.addEventListener("DOMContentLoaded", () => {
            const likeButtons = document.querySelectorAll(".product .like");

            likeButtons.forEach(like => {
            like.addEventListener("click", (e) => {
                e.preventDefault(); 
                e.stopPropagation();

                const img = like.querySelector("img");
                const liked = img.dataset.liked === "true";

                if (liked) {
                img.src = "{{ asset('icons/ui/like.svg') }}";
                img.dataset.liked = "false";
                } else {
                img.src = "{{ asset('icons/ui/liked.svg') }}";
                img.dataset.liked = "true";
                }
            });
            });
        });

        // Swiper
        var ArchiveCatSwiper = new Swiper(".ArchiveCatSwiper", {
            slidesPerView: 2.5,
            spaceBetween: 24,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
            1024: {
                slidesPerView: 6,
            },
            767: {
                slidesPerView: 4,
            },
            },
        });

        const filters = {
            color: document.getElementById("filter-color"),
            size: document.getElementById("filter-size"),
            category: document.getElementById("filter-category"),
            price: document.getElementById("filter-price"),
            brand: document.getElementById("filter-brand"),
            sort: document.getElementById("filter-sort"),
            available: document.getElementById("filter-available")
        };

        const params = new URLSearchParams(window.location.search);

        // Add first paremetee base on URL
        for (let key in filters) {
            const value = params.get(key);
            if (key === "available") {
            filters[key].checked = value === "true";
            } else if (value) {
            filters[key].value = value;
            }
        }

        // when change update parematers
        Object.values(filters).forEach(element => {
            element.addEventListener("change", () => {
            const updatedParams = new URLSearchParams(window.location.search);

            for (let key in filters) {
                let el = filters[key];
                if (key === "available") {
                if (el.checked) {
                    updatedParams.set("available", "true");
                } else {
                    updatedParams.delete("available");
                }
                } else {
                if (el.value) {
                    updatedParams.set(key, el.value);
                } else {
                    updatedParams.delete(key);
                }
                }
            }

            // Reduct with new URL
            window.location.search = updatedParams.toString();
            });
        });
        
    </script>
@endpush 