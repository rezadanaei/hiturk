    @extends('layouts.main')

    <!-- Style section (optional)  -->
    <!-- Uncomment and add custom styles if needed -->
    @push('styles') 
        <link rel="stylesheet" href="{{ asset('styles/global/fonts.css') }}"> 
        <link rel="stylesheet" href="{{ asset('styles/global/fonts2.css') }}"> 
        <link rel="stylesheet" href="{{asset('plugins/swiper/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{ asset('styles/pages/FAQ.css') }}"> 
    @endpush  

    <!-- Header section  -->
    @section('header')
        @include('components.header')
    @endsection

    <!-- Main content  -->
    @section('content')
        <div class="content">
            
            <div class="main-container">
                <section class="faq">
                    <div class="fa1-page-title">
                        <img src="{{asset('icons/ui/faq.svg') }}" alt="سوالات متداول">
                        <h1>سوالات متداول</h1>
                    </div>

                    <div class="faq-top">
                        <div class="faq-search">
                            <div class="faq-search-container">
                                <input type="search" name="faqSearch" id="faqSearch" placeholder="سوال خود را جستجو کنید">
                                <img src="{{asset('icons/ui/faq-search.svg') }}" alt="جستجو">
                            </div>
                        </div>
                    </div>

                    <!-- FAQ tabs -->
                    <div class="faq-tabs">
                        <div class="faq-tab active" data-category="login">ورود و ثبت نام</div>
                        <div class="faq-tab" data-category="support">پشتیبانی</div>
                    </div>
                    <!-- FAQ tabs end -->

                    <div class="no-results">جستجو بدون نتیجه</div>

                    <!-- Defualt items -->
                    <ul class="faq-category-item" data-category="login">
                        <li>
                            <h4>چگونه می‌توانم ثبت‌نام کنم؟<img src="{{asset('icons/ui/down.svg') }}" alt="Arrow"></h4>
                            <p>برای ثبت‌نام، به صفحه اصلی سایت بروید و روی دکمه «ثبت‌نام» کلیک کنید.</p>
                        </li>
                        <li>
                            <h4>رمز عبورم را فراموش کرده‌ام، چه کنم؟<img src="{{asset('icons/ui/down.svg') }}" alt="Arrow"></h4>
                            <p>در صفحه ورود، روی «فراموشی رمز عبور» کلیک کنید و دستورالعمل‌ها را دنبال کنید.</p>
                        </li>
                        <li>
                            <h4>آیا ثبت‌نام رایگان است؟<img src="{{asset('icons/ui/down.svg') }}" alt="Arrow"></h4>
                            <p>بله، ثبت‌نام در سایت ما کاملاً رایگان است.</p>
                        </li>
                    </ul>
                    <!-- Defualt items end -->

                    <ul class="faq-category-item" data-category="support">
                        <li>
                            <h4>چگونه با پشتیبانی تماس بگیرم؟<img src="{{asset('icons/ui/down.svg') }}" alt="Arrow"></h4>
                            <p>می‌توانید از طریق ایمیل یا شماره تماس در صفحه تماس با ما اقدام کنید.</p>
                        </li>
                        <li>
                            <h4>ساعات کاری پشتیبانی چگونه است؟<img src="{{asset('icons/ui/down.svg') }}" alt="Arrow"></h4>
                            <p>پشتیبانی ما از ساعت ۹ صبح تا ۵ عصر فعال است.</p>
                        </li>
                        <li>
                            <h4>آیا پشتیبانی ۲۴ ساعته دارید؟<img src="{{asset('icons/ui/down.svg') }}" alt="Arrow"></h4>
                            <p>خیر، اما در ساعات غیرکاری می‌توانید از چت آنلاین استفاده کنید.</p>
                        </li>
                    </ul>

                </section>
            </div>
        </div>
    @endsection

    <!-- Footer section  -->
    @section('footer')
        @include('layouts.commitments')
        
    @endsection

    <!-- Script section (optional)  -->
    <!-- Uncomment and add custom scripts if needed  -->
    @push('scripts') 
        <script>
            // Tab functionality
            document.querySelectorAll('.faq-tab').forEach(tab => {
                tab.addEventListener('click', () => {
                    document.querySelectorAll('.faq-tab').forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');

                    const category = tab.getAttribute('data-category');
                    document.querySelectorAll('.faq-category-item').forEach(item => {
                        item.style.display = item.getAttribute('data-category') === category ? 'block' : 'none';
                    });
                    document.querySelector('.no-results').style.display = 'none';
                });
            });

            // Accordion functionality for individual FAQ items
            document.querySelectorAll('.faq-category-item li h4').forEach(header => {
                header.addEventListener('click', () => {
                    const item = header.parentElement;
                    const isActive = item.classList.contains('active');
                    item.classList.toggle('active', !isActive);
                });
            });

            // Live search functionality
            const searchInput = document.getElementById('faqSearch');
            searchInput.addEventListener('input', () => {
                const searchTerm = searchInput.value.trim().toLowerCase();
                const categories = document.querySelectorAll('.faq-category-item');
                let hasVisibleItem = false;

                // Reset tab visibility
                document.querySelectorAll('.faq-tab').forEach(tab => {
                    const category = tab.getAttribute('data-category');
                    const items = document.querySelector(`.faq-category-item[data-category="${category}"]`);
                    const title = tab.textContent.toLowerCase();
                    let hasVisible = false;

                    items.querySelectorAll('li').forEach(item => {
                        const question = item.querySelector('h4').textContent.toLowerCase();
                        const answer = item.querySelector('p').textContent.toLowerCase();
                        if (searchTerm === '' || title.includes(searchTerm) || question.includes(searchTerm) || answer.includes(searchTerm)) {
                            item.style.display = 'block';
                            hasVisible = true;
                        } else {
                            item.style.display = 'none';
                        }
                    });

                    tab.style.display = hasVisible || title.includes(searchTerm) ? 'block' : 'none';
                    if (hasVisible) hasVisibleItem = true;
                });

                // Show active category content if search term is present
                if (searchTerm !== '') {
                    const activeTab = document.querySelector('.faq-tab.active');
                    if (activeTab) {
                        const category = activeTab.getAttribute('data-category');
                        document.querySelectorAll('.faq-category-item').forEach(item => {
                            item.style.display = item.getAttribute('data-category') === category && item.querySelector('li[style="display: block;"]') ? 'block' : 'none';
                        });
                    }
                } else {
                    // Show active tab content when search is cleared
                    const activeTab = document.querySelector('.faq-tab.active');
                    if (activeTab) {
                        const category = activeTab.getAttribute('data-category');
                        document.querySelectorAll('.faq-category-item').forEach(item => {
                            item.style.display = item.getAttribute('data-category') === category ? 'block' : 'none';
                        });
                    }
                }

                // Show no results message
                document.querySelector('.no-results').style.display = hasVisibleItem || searchTerm === '' ? 'none' : 'block';
            });
        </script>
    @endpush