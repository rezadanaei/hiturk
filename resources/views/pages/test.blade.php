
<script src="{{asset('plugins/swiper/swiper-bundle.min.js')}}" ></script>
<link rel="stylesheet" href="{{asset('plugins/swiper/swiper-bundle.min.css')}}">
<div class="category-dropdown__panel-swipers">
                        @php
                            $slides =[
                                [
                                    'link' => '/category/turkish',
                                    'image' => 'image/1873-685-اسلایدر-سایت-های-تورک-c.jpg',
                                    'alt' => 'سریال‌های ترکی'
                                ],
                                [
                                    'link' => '/category/korean',
                                    'image' => 'image/1873-685-اسلایدر-سایت-های-تورک-c.jpg',
                                    'alt' => 'سریال‌های کره‌ای'
                                ],
                                [
                                    'link' => '/category/korean',
                                    'image' => 'image/1873-685-اسلایدر-سایت-های-تورک-c.jpg',
                                    'alt' => 'سریال‌های ایرانی'
                                ],
                            ];
                        @endphp
                        @include('components.sliders.megamenu-categories-swiper', ['items' => $slides])
                    </div>
                    @stack('megamenu-categories-swiper')