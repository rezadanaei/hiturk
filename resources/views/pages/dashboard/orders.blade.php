@extends('layouts.main')

 <!-- Style section (optional)  -->
    <!-- Uncomment and add custom styles if needed -->
@push('styles') 
    <link rel="stylesheet" href="{{ asset('styles/global/fonts.css') }}"> 
    <link rel="stylesheet" href="{{ asset('styles/global/fonts2.css') }}"> 
    <link rel="stylesheet" href="{{ asset('styles/pages/dashboard/orders.css') }}"> 
@endpush  

@section('header')
    @include('components.header')
@endsection
@section('content')
    <div class="content" >
        @php
            $step = request()->query('step', 0); // مقدار پیش‌فرض 0
        @endphp
        @if ($step == 0)
            <div class="main-container">
            
                <div class="card-top">
                    <div class="on-card"><span><img src="{{asset('icons/ui/Vector.svg') }}" alt="سبد خرید"></span> سبد خرید</div>
                    <div class="in-address"><span><img src="{{asset('icons/ui/Vector-1.svg') }}" alt="آدرس"></span> اطلاعات ارسال</div>
                    <div class="in-wallet"><span><img src="{{asset('icons/ui/Vector-2.svg') }}" alt="پرداخت"></span> اطلاعات پرداخت</div>
                </div>

                <div class="card-empty">

                    <img src="{{asset('icons/ui/card-empty.png') }}" alt="سبد خرید خالیست">
                    <h2>سبد خرید شما خالیست</h2>

                </div>

            </div>
        @elseif ($step == 1)
            <div class="main-container">
            
            <div class="card-top">
                <div class="on-card bold"><span class="active-border"><img src="{{asset('icons/ui/Vector.svg') }}" alt="سبد خرید"></span> سبد خرید</div>
                <div class="in-address"><span><img src="{{asset('icons/ui/Vector-1.svg') }}" alt="آدرس"></span> اطلاعات ارسال</div>
                <div class="in-wallet"><span><img src="{{asset('icons/ui/Vector-2.svg') }}" alt="پرداخت"></span> اطلاعات پرداخت</div>
            </div>

            <div class="card-items">

                <table class="card-table">
                <thead>
                    <tr>
                    <th>سبد خرید شما</th>
                    <th>قیمت واحد</th>
                    <th>تعداد</th>
                    <th>قیمت نهایی</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Card item -->
                    <tr>
                    <td>
                        <div class="card-product-info">
                        <section>
                        <img src="{{asset('image/product.png') }}" alt="تصویر محصول">
                        <div class="cpi-item">
                            <h3>پولوشرت مردانه سارک Sarak کد 0504198</h3>
                            <ul>
                            <li>سایز: L</li>
                            <li>رنگ: قرمز</li>
                            </ul>
                            <p>کد محصول: 1259485</p>
                        </div>
                        </section>
                        <div id="cardDeleteItem" class="delete-card-item"><img src="{{asset('icons/ui/delete.svg') }}" alt="حذف"></div>
                        </div>
                    </td>
                    <td>
                        <div class="card-product-price">
                        <div class="cpp-price is-off-price">864,000 تومان</div>
                        <div class="cpp-off-price">
                            <p>20% تخفیف</p>
                            <p>172,800 تومان</p>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="quantity-control">
                        <button type="button" class="decrease">−</button>
                        <input type="number" value="2" min="1">
                        <button type="button" class="increase">+</button>
                        </div>
                    </td>

                    <td class="card-item-final-price color">691,200 تومان</td>
                    </tr>
                    <!-- Card item end -->

                    <!-- Card item NO Off -->
                    <tr>
                    <td>
                        <div class="card-product-info">
                        <section>
                        <img src="{{asset('image/product.png') }}" alt="تصویر محصول">
                        <div class="cpi-item">
                            <h3>پولوشرت مردانه سارک Sarak کد 0504198</h3>
                            <ul>
                            <li>سایز: L</li>
                            <li>رنگ: قرمز</li>
                            </ul>
                            <p>کد محصول: 1259485</p>
                        </div>
                        </section>
                        <div class="delete-card-item"><img src="{{asset('icons/ui/delete.svg') }}" alt="حذف"></div>
                        </div>
                    </td>
                    <td>
                        <div class="card-product-price">
                        <div class="cpp-price">864,000 تومان</div>
                        </div>
                    </td>
                    <td>
                        <div class="quantity-control">
                        <button type="button" class="decrease">−</button>
                        <input type="number" value="2" min="1">
                        <button type="button" class="increase">+</button>
                        </div>
                    </td>

                    <td class="card-item-final-price color">691,200 تومان</td>
                    </tr>
                    <!-- Card item NO Off end-->

                </tbody>
                <tfoot>
                    <tr>
                    <td colspan="1">
                        <div class="card-add-off">
                        <button id="addOffPrice"><img src="{{asset('icons/ui/off.svg') }}" alt="کد تخفیف"> <p>ثبت کد تخفیف</p></button>
                        <div id="offPriceCount" class="show-off-input hidden">
                            <input type="text" placeholder="کد تخفیف">
                            <input type="submit" value="ثبت کد تخفیف">
                        </div>
                        <p class="card-alert">افزودن کالا به سبد خرید به معنی رزرو آن نیست با توجه به محدودیت موجودی سبد خود را ثبت و خرید را تکمیل کنید.</p>
                        </div>
                    </td>
                    <td colspan="3">
                        <div class="card-total-price">
                        <div class="ctp-order-price">
                            <p>قیمت کل سفارش:</p>
                            <span>691,200 تومان</span>
                        </div>

                        <div class="ctp-order-ship">
                            <p>بسته‌بندی و ارسال:</p>
                            <span>وابسته به نوع ارسال</span>
                        </div>

                        <div class="ctp-pay-price">
                            <p class="bold">قیمت قابل پرداخت:</p>
                            <span class="color">691,200 تومان</span>
                        </div>
                        </div>
                        <button class="confirm-card">ثبت و مرحله بعد</button>
                    </td>
                    </tr>
                </tfoot>
                </table>


            </div>

            </div>
        @elseif ($step == 2)
            <div class="main-container">
                
                <div class="card-top">
                    <div class="on-card"><span class="active-border"><img src="{{asset('icons/ui/Vector.svg') }}" alt="سبد خرید"></span> سبد خرید</div>
                    <div class="in-address bold"><span class="active-border"><img src="{{asset('icons/ui/Vector-1.svg') }}" alt="آدرس"></span> اطلاعات ارسال</div>
                    <div class="in-wallet"><span><img src="{{asset('icons/ui/Vector-2.svg') }}" alt="پرداخت"></span> اطلاعات پرداخت</div>
                </div>

                <div class="card-address">

                    <div class="card-address-title"><h2>مکان تحویل سفارش</h2></div>

                    <form class="card-address-from">
                    <h3>اطلاعات شخصی تحویل گیرنده</h3>
                    <div class="caf-grid-two">
                        <input type="text" name="nameOfUser" id="nameOfUser" placeholder="نام">
                        <input type="text" name="lastNameOfUser" id="lastNameOfUser" placeholder="نام خانوادگی">
                    </div>

                    <h3>اطلاعات ارسال</h3>
                    <div class="caf-grid-two">
                        <input type="tel" name="phoneUser" id="phoneUser" placeholder="شماره تماس">
                        <input type="text" name="stateUser" id="stateUser" placeholder="استان">
                        <input type="text" name="cityUser" id="cityUser" placeholder="شهر">
                        <input type="number" name="ZipCodeUser" id="ZipCodeUser" placeholder="کد پستی">
                    </div>
                    <textarea name="addressOfUser" id="addressOfUser" rows="5" placeholder="آدرس"></textarea>

                    <div class="caf-confirm">
                        <p>مجموع هزینه ارسال: <span class="color">36,000 تومان</span></p>
                        <input type="submit" value="تایید و ادامه">
                    </div>

                    </form>

                </div>

            </div>
        @elseif ($step == 3)
            <div class="main-container">
                
                <div class="card-top">
                    <div class="on-card"><span class="active-border"><img src="{{asset('icons/ui/Vector.svg') }}" alt="سبد خرید"></span> سبد خرید</div>
                    <div class="in-address"><span class="active-border"><img src="{{asset('icons/ui/Vector-1.svg') }}" alt="آدرس"></span> اطلاعات ارسال</div>
                    <div class="in-wallet bold"><span class="active-border"><img src="{{asset('icons/ui/Vector-2.svg') }}" alt="پرداخت"></span> اطلاعات پرداخت</div>
                </div>

                <div class="checkout-content">

                    <div class="chose-to-pay">
                    <h3>انتخاب شیوه‌ی پرداخت</h3>

                    <form>
                        
                        <div class="checkout-pay-item">
                        <input type="radio" name="zarinpal" id="zarinpal" value="zarinpal">
                        <label for="zarinpal"> <img src="{{asset('icons/ui/pay.svg') }}" alt="پرداخت"> زرین پال</label>
                        </div>
                        
                        <div class="checkout-pay-item">
                        <input type="radio" name="zarinpal" id="zarinpal" value="zarinpal">
                        <div><label for="zarinpal"> <img src="{{asset('icons/ui/pay.svg') }}" alt="پرداخت"> پرداخت با کارت های عضو شتاب</label></div>
                        </div>

                    </form>

                    <p class="chose-to-pay-info">با انتخاب دکمه پرداخت و تکمیل خرید، ‌موافقت خود را با <a href="#">قوانین و مقررات</a> و همچنین <a href="#">شرایط بازگشت</a> سفارشات بانی‌مد اعلام نموده‌اید.</p>
                    </div>

                    <div class="card-last-info">

                    <div class="checkout-info-top">
                        <p>این سفارش در تاریخ 1404/03/01 برای اسم خریداری به آدرس وارد شده در بخش قبل و شماره تماس 09963866791 تحویل می‌گردد.</p>
                    </div>

                    <div class="checkout-last-prices">

                        <div class="clpp-last-price">
                        <p>قیمت کل سفارش:</p>
                        <span>691,200 تومان</span>
                        </div>

                        <div class="clpp-shipping-price">
                        <p>هزینه ارسال، بیمه و بسته بندی:</p>
                        <span>89,000 تومان</span>
                        </div>

                        <div class="clpp-discount-value color">
                        <p>تخفیف:</p>
                        <span>0 تومان</span>
                        </div>

                        <div class="clpp-price-to-pay">
                        <p>قابل پرداخت:</p>
                        <span class="color">791,200 تومان</span>
                        </div>

                    </div>

                    <button class="clp-discount-submit" type="submit">پرداخت و تکمیل خرید</button>

                    </div>

                </div>

            </div>

        @endif
    </div>

    
@endsection
@section('footer')
    @include('layouts.commitments')
    
@endsection


@push('scripts') 
    <script>
    // وقتی صفحه لود شد، کد اجرا میشه
    document.addEventListener('DOMContentLoaded', function () {
        // همه کنترل‌های تعداد رو پیدا کن
        const quantityControls = document.querySelectorAll('.quantity-control');

        quantityControls.forEach(control => {
        const input = control.querySelector('input');
        const increaseBtn = control.querySelector('.increase');
        const decreaseBtn = control.querySelector('.decrease');

        // کلیک روی +
        increaseBtn.addEventListener('click', () => {
            input.value = parseInt(input.value) + 1;
        });

        // کلیک روی -
        decreaseBtn.addEventListener('click', () => {
            if (parseInt(input.value) > parseInt(input.min)) {
            input.value = parseInt(input.value) - 1;
            }
        });
        });

        const deleteButtons = document.querySelectorAll(".delete-card-item");

    deleteButtons.forEach(function (btn) {
        btn.addEventListener("click", function () {
        const tr = btn.closest("tr"); // پیدا کردن نزدیک‌ترین ردیف جدول
        if (tr) {
            tr.remove(); // حذف ردیف
        }
        });
    });

    });

    document.getElementById("addOffPrice").addEventListener("click", function(){
        const addOff = document.getElementById("offPriceCount");
        addOff.classList.toggle("hidden");
    });

    </script>
@endpush 