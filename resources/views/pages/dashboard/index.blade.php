    @extends('layouts.main')


    @push('styles') 
        <link rel="stylesheet" href="{{ asset('styles/global/fonts.css') }}"> 
        <link rel="stylesheet" href="{{ asset('styles/global/fonts2.css') }}"> 
        <link rel="stylesheet" href="{{ asset('styles/pages/profile.css') }}">
    @endpush  

    <!-- Header section  -->
    @section('header')
        @include('components.header')
    @endsection

    <!-- Main content  -->
    @section('content')
        <div class="content">
            
            <div class="main-container">

                <div class="profile-page">

                    <!-- Mobile top info -->
                    <div class="profile-page-top-info">
                        <div class="profile-page-logo">
                            <img src="{{asset('icons/logo/white-logo.png')}}" alt="های‌ترک">
                        </div>
                        <div class="user-profile-top">
                            <img src="{{asset('image/user-pic.png')}}" alt="پروفایل">
                            <section class="upt-info">
                                <h3>نام کاربر</h3>
                                <p>09123456789</p>
                            </section>
                        </div>
                    </div>
                    <!-- Mobile top info end -->

                    <!-- Mobile Alert -->
                    <div class="alert-content-lg">
                        <div class="alert-content-main">
                            <img src="{{asset('icons/ui/shild.svg')}}" alt="هشدار">
                            <p>برای ساده سازی فرایند خرید، با ثبت کد ملی اطلاعات کاربری خود را تکمیل کنید.</p>
                        </div>
                        <a href="#">ثبت کد ملی</a>
                    </div>
                    <!-- Mobile Alert end -->

                    <div class="nestedContainer">

                        <!-- Profile Sidebar -->
                        <div class="sidebar">

                            <!-- User info -->
                            <div class="user-profile-top">
                                <img src="{{asset('image/user-pic.png')}}" alt="پروفایل">
                                <section class="upt-info">
                                    <h3>نام کاربر</h3>
                                    <p>09123456789</p>
                                </section>
                            </div>
                            <!-- User info end -->

                            <!-- Tabs -->
                            <div class="menu-item {{ request('tab') == null || request('tab') == 1 ? 'active' : '' }}" data-tab="tab-1"> <img class="icon" src="{{asset('icons/ui/tab1.svg')}}" alt="سفارش های من"> سفارش های من <img src="{{asset('icons/ui/left.svg')}}" class="left"></div>
                            <div class="menu-item {{ request('tab') == 2 ? 'active' : '' }} " data-tab="tab-2"> <img class="icon" src="{{asset('icons/ui/tab2.svg')}}" alt="درخواست های مرجوعی"> درخواست های مرجوعی <img src="{{asset('icons/ui/left.svg')}}" class="left"></div>
                            <div class="menu-item {{ request('tab') == 3 ? 'active' : '' }}" data-tab="tab-3"> <img class="icon" src="{{asset('icons/ui/tab3.svg')}}" alt="تراکنش ها"> تراکنش ها <img src="{{asset('icons/ui/left.svg')}}" class="left"></div>
                            <div class="menu-item {{ request('tab') == 4 ? 'active' : '' }}" data-tab="tab-4"> <img class="icon" src="{{asset('icons/ui/tab4.svg')}}" alt="لیست آدرس ها"> لیست آدرس ها <img src="{{asset('icons/ui/left.svg')}}" class="left"></div>
                            <div class="menu-item {{ request('tab') == 5 ? 'active' : '' }}" data-tab="tab-5"> <img class="icon" src="{{asset('icons/ui/tab5.svg')}}" alt="عملیات رمز عبور"> عملیات رمز عبور <img src="{{asset('icons/ui/left.svg')}}" class="left"></div>
                            <div class="menu-item {{ request('tab') == 6 ? 'active' : '' }}" data-tab="tab-6"> <img class="icon" src="{{asset('icons/ui/tab6.svg')}}" alt="اطلاعات حساب کاربری"> اطلاعات حساب کاربری <img src="{{asset('icons/ui/left.svg')}}" class="left"></div>
                            <div class="menu-item {{ request('tab') == 8 ? 'active' : '' }}" data-tab="tab-8"> <img class="icon" src="{{asset('icons/ui/tab8.svg')}}" alt="ذخیره شده ها"> ذخیره شده ها <img src="{{asset('icons/ui/left.svg')}}" class="left"></div>
                            <div class="menu-item {{ request('tab') == 7 ? 'active' : '' }}" data-tab="tab-7"> <img class="icon" src="{{asset('icons/ui/tab7.svg')}}" alt="خروج"> خروج <img src="{{asset('icons/ui/left.svg')}}" class="left"></div>
                            <!-- Tabs end -->

                        </div>
                        <!-- Profile Sidebar end -->

                        <div class="desktopContent" id="desktopContent">

                            <!-- Tab 1 -->
                            <div id="tab-1" class="tab-content {{ request('tab') == null || request('tab') == 1 ? 'active' : '' }}">
                                <section class="is-part">
                                    <!-- Title of content -->
                                    <div class="profile-dash-info">
                                        <h2>اطلاعات کاربری</h2>
                                        <button class="menu-item" data-tab="tab-6"><img src="{{asset('icons/ui/edit.svg')}}" alt="ویرایش"> ویرایش </button>
                                    </div>
                                    <!-- User info -->
                                    <table class="table-of-user-info">
                                        <tr>
                                            <th>نام و نام خانوادگی:</th>
                                            <th>ایمیل:</th>
                                            <th>شماره کارت:</th>
                                        </tr>
                                        <tr>
                                            <td>نام کاربر</td>
                                            <td>test@info.ie</td>
                                            <td>6219123456781234</td>
                                        </tr>
                                        <tr>
                                            <th>شماره تماس :</th>
                                            <th>تاریخ تولد:</th>
                                            <th>شماره شبا:</th>
                                        </tr>
                                        <tr>
                                            <td>-</td>
                                            <td>1369/12/09</td>
                                            <td>IR000000000000000000000123</td>
                                        </tr>
                                    </table>
                                </section>
                                <section class="is-part">
                                    <!-- Title -->
                                    <div class="profile-dash-info">
                                        <h2>سفارشات</h2>
                                    </div>
                                    <!-- User last orders -->
                                    <table class="table-of-last-orders">
                                        <thead>
                                            <tr>
                                                <th>شماره سفارش</th>
                                                <th>تاریخ</th>
                                                <th>وضعیت</th>
                                                <th>قیمت کل</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Single order item -->
                                            <tr class="pi-item-order" id="piItemShow_1234">
                                                <td class="tolo-id"><p>1234</p></td>
                                                <td class="tolo-data"><p>1403/12/23</p></td>
                                                <td class="tolo-stats"><p class="in-progress">در حال پردازش</p></td>
                                                <td class="tolo-price"><p>520,000 تومان</p></td>
                                            </tr>
                                            <tr class="pi-item-order-expand">
                                                <td colspan="5">
                                                    <div class="profile-item-full-info" id="piContent_1234" style="display: none;">
                                                        <div class="pifi-container">
                                                            <div>
                                                                <p>همه محصولات:</p>
                                                                <ul>
                                                                    <li><a href="#">اسم محصول - 32,000 تومان - 3عدد</a></li>
                                                                    <li><a href="#">اسم محصول - 32,000 تومان - 3عدد</a></li>
                                                                    <li><a href="#">اسم محصول - 32,000 تومان - 3عدد</a></li>
                                                                </ul>
                                                            </div>
                                                            <p><span class="color">آدرس: </span> آدرس وارد شده توسط کاربر در این مکان قرار خواهد گرفت</p>
                                                            <div class="last-price-pifi"><p>مبلغ نهایی:</p> <span class="color">520,000 تومان</span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Single order item end -->
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                            <!-- Tab 1 end -->

                            <!-- Tab 2 -->
                            <div id="tab-2" class="tab-content {{ request('tab') == 2 ? 'active' : '' }}">
                                <section class="is-part">
                                    <!-- Title -->
                                    <div class="profile-dash-info">
                                        <h2>درخواست های مرجوعی</h2>
                                    </div>
                                    <p>برای ثبت مرجوعی با پشتیبانی تماس حاصل کنید!</p>
                                    <!-- Returns items -->
                                    <table class="table-of-return-product">
                                        <tr>
                                            <th>شماره مرجوعی</th>
                                            <th>وضعیت</th>
                                            <th>توضیحات</th>
                                        </tr>

                                        <!-- Single Return item -->
                                        <tr>
                                            <td><p class="trp-id">2348</p></td>
                                            <td><p class="trp-stuts color">در حال بررسی</p></td>
                                            <td><p class="trp-desc">توضیحات این مرجوعی در این قسمت قرار میگیرد!</p></td>
                                        </tr>
                                        <!-- Single Return item end -->

                                    </table>
                                </section>
                            </div>
                            <!-- Tab 2 end -->

                            <!-- Tab 3 -->
                            <div id="tab-3" class="tab-content {{ request('tab') == 3 ? 'active' : '' }}">
                                <section class="is-part">
                                    <!-- Title -->
                                    <div class="profile-dash-info">
                                        <h2>تراکنش ها</h2>
                                    </div>
                                    <!-- List of payments -->
                                    <table class="table-of-payment">
                                        <tr>
                                            <th>ردیف</th>
                                            <th>شماره تراکنش</th>
                                            <th>مبلغ</th>
                                            <th>وضعیت</th>
                                            <th>تاریخ</th>
                                        </tr>

                                        <!-- Payment item -->
                                        <tr>
                                            <td><p class="table-top-number">1</p></td>
                                            <td><p class="table-top-id">638484</p></td>
                                            <td><p class="table-top-price">240,000 تومان</p></td>
                                            <td><p class="table-top-stuts color">موفق</p></td>
                                            <td><p class="table-top-date">1404/02/12</p></td>
                                        </tr>
                                        <!-- Payment item end -->

                                    </table>
                                </section>
                            </div>
                            <!-- Tab 3 end -->

                            <!-- Tab 4 -->
                            <div id="tab-4" class="tab-content {{ request('tab') == 4 ? 'active' : '' }}">
                                <section class="is-part">
                                    <!-- Title -->
                                    <div class="profile-dash-info">
                                        <h2>لیست آدرس ها</h2>
                                    </div>
                                    <!-- List of address -->
                                    <ul class="profile-address">
                                        <li>
                                            <span><strong class="color">آدرس: </strong> <p>آدرس کاربر در این قسمت نشان داده می شود برای کاربر </p></span>
                                            <div><a href="#">ویرایش</a> <a href="#">حذف</a></div>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                            <!-- Tab 4 end -->

                            <!-- Tab 5 -->
                            <div id="tab-5" class="tab-content {{ request('tab') == 5 ? 'active' : '' }}">
                                <section class="is-part">
                                    <!-- Title -->
                                    <div class="profile-dash-info">
                                        <h2>عملیات رمز عبور</h2>
                                    </div>
                                    <!-- Change password form -->
                                    <form action="" class="profile-password-actions">
                                        <input type="password" name="" id="" placeholder="رمز عبور جدید">
                                        <input type="password" name="" id="" placeholder="تکرار رمز عبور جدید">
                                        <input type="submit" value="تغییر رمز عبور">
                                    </form>
                                    <!-- Change password form end -->

                                </section>
                            </div>
                            <!-- Tab 5 end -->

                            <!-- Tab 6 -->
                            <div id="tab-6" class="tab-content {{ request('tab') == 6 ? 'active' : '' }}" >
                                <section class="is-part">
                                    <!-- Title -->
                                    <div class="profile-dash-info">
                                        <h2>اطلاعات حساب کاربری</h2>
                                    </div>
                                    <!-- User info Form -->
                                    <div class="user-info-edit" id="editUserInfoContent">
                                        <form action="">
                                            <input type="text" placeholder="نام و نام خانوادگی">
                                            <input type="email" name="" id="" placeholder="ایمیل">
                                            <input type="text" name="" id="" placeholder="شماره کارت">
                                            <input type="tel" name="" id="" placeholder="شماره تماس">
                                            <input type="text" name="" id="" placeholder="تاریخ تولد">
                                            <input type="text" name="" id="" placeholder="شماره شبا">
                                            <input type="submit" value="ذخیره اطلاعات">
                                        </form>
                                    </div>
                                    <!-- User info Form end -->

                                </section>
                            </div>
                            <!-- Tab 6 end -->
                            <!-- Tab 8 -->
                            <div id="tab-8" class="tab-content {{ request('tab') == 8 ? 'active' : '' }}">
                                <section class="is-part">
                                    <!-- Title -->
                                    <div class="profile-dash-info">
                                        <h2>ذخیره شده ها</h2>
                                    </div>
                                    <!-- List of address -->
                                    <ul class="profile-save-product">
                                        <!-- Save product item -->
                                        <li>
                                            <div>
                                                <img src="{{asset('image/product-img.png')}}" alt="تصویر محصول">
                                                <h3>عنوان محصول</h3>
                                            </div>
                                            <div class="actions-btn">
                                                <a href="#" class="show-product">مشاهده</a>
                                                <a href="#" class="delete-form-save">حذف</a>
                                            </div>
                                        </li>
                                        <!-- Save product item end -->
                                        
                                        <li>
                                            <div>
                                                <img src="{{asset('image/product-img.png')}}" alt="تصویر محصول">
                                                <h3>عنوان محصول</h3>
                                            </div>
                                            <div class="actions-btn">
                                                <a href="#" class="show-product">مشاهده</a>
                                                <a href="#" class="delete-form-save">حذف</a>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                            <!-- Tab 7 ( Exit ) -->
                            <div id="tab-7" class="tab-content {{ request('tab') == 7 ? 'active' : '' }}">
                                <h2>خروج</h2>
                                <p>خروج از حساب کاربری.</p>
                            </div>
                            <!-- Tab 7 ( Exit ) end -->


                        </div>
                    </div>

                    <!-- Mobile Popup -->
                    <div class="mobile-popup" id="mobilePopup">
                        <div class="popup-header">
                            <span class="close-btn" id="closePopup"><img src="{{asset('icons/ui/back.svg')}}" alt="بستن"></span>
                            <strong id="popupTitle"></strong>
                        </div>
                        <div class="popup-content" id="popupContent" style="padding:15px;">
                            محتوای تست
                        </div>
                    </div>
                    <!-- Mobile Popup end -->

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
        <script>
            function attachToggleListeners(container) {
                const piItems = container.querySelectorAll('[id^="piItemShow_"]');
                piItems.forEach(item => {
                    const itemId = item.id.replace('piItemShow_', '');
                    const content = container.querySelector(`#piContent_${itemId}`);
                    if (content) {
                        content.style.display = 'none';
                        const newItem = item.cloneNode(true);
                        item.parentNode.replaceChild(newItem, item);
                        newItem.addEventListener('click', () => {
                            content.style.display = content.style.display === 'block' ? 'none' : 'block';
                        });
                    } else {
                        console.warn(`No content found for piItemShow_${itemId}`);
                    }
                });
            }

            const menuItems = document.querySelectorAll('.menu-item');
            const tabContents = document.querySelectorAll('.tab-content');
            const mobilePopup = document.getElementById('mobilePopup');
            const popupTitle = document.getElementById('popupTitle');
            const popupContent = document.getElementById('popupContent');
            const closePopup = document.getElementById('closePopup');

            function showTab(tabId, element) {
                const tabElement = document.getElementById(tabId);
                if (!tabElement) return;
                
                if (window.innerWidth > 768) {
                    menuItems.forEach(i => i.classList.remove('active'));
                    element.classList.add('active');
                    tabContents.forEach(tab => tab.classList.remove('active'));
                    tabElement.classList.add('active');
                    attachToggleListeners(document.getElementById('desktopContent'));
                } else {
                    popupTitle.textContent = tabElement.querySelector('h2')?.textContent || 'بدون عنوان';
                    popupContent.innerHTML = tabElement.innerHTML;
                    mobilePopup.classList.add('active');
                    document.body.classList.add('no-scroll');
                    attachToggleListeners(popupContent);

                    const editButtons = popupContent.querySelectorAll('.menu-item[data-tab="tab-6"]');
                    editButtons.forEach(btn => {
                        btn.removeEventListener('click', handleEditClick);
                        btn.addEventListener('click', handleEditClick);
                    });
                }
            }

            function handleEditClick(event) {
                event.preventDefault();
                event.stopPropagation();
                const tabId = 'tab-6';
                const tabElement = document.getElementById(tabId);
                if (window.innerWidth <= 768) {
                    mobilePopup.classList.remove('active');
                    setTimeout(() => {
                        popupTitle.textContent = tabElement.querySelector('h2')?.textContent || 'اطلاعات حساب کاربری';
                        popupContent.innerHTML = tabElement.innerHTML;
                        mobilePopup.classList.add('active');
                        
                        attachToggleListeners(popupContent);
                        const newEditButtons = popupContent.querySelectorAll('.menu-item[data-tab="tab-6"]');
                        newEditButtons.forEach(btn => {
                            btn.removeEventListener('click', handleEditClick);
                            btn.addEventListener('click', handleEditClick);
                        });
                    }, 300);
                } else {
                    menuItems.forEach(i => i.classList.remove('active'));
                    document.querySelector(`.menu-item[data-tab="tab-6"]`)?.classList.add('active');
                    tabContents.forEach(tab => tab.classList.remove('active'));
                    tabElement.classList.add('active');
                    attachToggleListeners(document.getElementById('desktopContent'));
                }
            }

            menuItems.forEach(item => {
                item.addEventListener('click', (e) => {
                    const tabId = item.getAttribute('data-tab');
                    if (tabId) showTab(tabId, item);
                });
            });

            closePopup.addEventListener('click', () => {
                mobilePopup.classList.remove('active');
                document.body.classList.remove('no-scroll');
            });
             // تابع قبلی برای خواندن tab از URL
            function getTabFromURL() {
                const params = new URLSearchParams(window.location.search);
                return params.get('tab'); // مقدار tab یا null
            }

            const initialTab = getTabFromURL();

            if (initialTab && window.innerWidth <= 768) {
                const tabElement = document.getElementById(`tab-${initialTab}`);
                if (tabElement) {
                    popupTitle.textContent = tabElement.querySelector('h2')?.textContent || 'بدون عنوان';
                    popupContent.innerHTML = tabElement.innerHTML;
                    mobilePopup.classList.add('active');
                    document.body.classList.add('no-scroll');
                    attachToggleListeners(popupContent);

                    // اگر تب edit داشت، دکمه‌ها رو هم دوباره هندل کن
                    const editButtons = popupContent.querySelectorAll('.menu-item[data-tab="tab-6"]');
                    editButtons.forEach(btn => {
                        btn.removeEventListener('click', handleEditClick);
                        btn.addEventListener('click', handleEditClick);
                    });
                }
            }


            attachToggleListeners(document.getElementById('desktopContent'));
            attachToggleListeners(popupContent);
        </script>

    @endpush 