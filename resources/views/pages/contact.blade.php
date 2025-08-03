    @extends('layouts.main')

    <!-- Style section (optional)  -->
    <!-- Uncomment and add custom styles if needed -->
    @push('styles') 
        <link rel="stylesheet" href="{{ asset('styles/pages/contact.css') }}"> 
    @endpush  

    <!-- Header section  -->
    @section('header')
          @include('components.header')
    @endsection

    <!-- Main content  -->
    @section('content')
        <div class="content">
            <div class="main-container">

            <section class="contact">

                <div class="top">

                <div>
                    <h1 class="color">مــیـزبـان صـدای گـرمـتـان هـسـتـیـم</h1>
                    <iframe class="iframe-md" height="250px" title="map-iframe" src="https://neshan.org/maps/iframe/places/_bBFFQOARnul#c39.213-44.770-18z-0p/39.213396245797846/44.76914413279109" allowFullScreen loading="lazy" ></iframe>
                    <div class="address">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.304 39.4187C28.6027 40.6907 30.312 41.3227 32.016 41.3227C33.7013 41.3227 35.3813 40.7013 36.6453 39.464L45.1973 31.8667C48.7227 28.3413 50.6667 23.6533 50.6667 18.6667C50.6667 13.68 48.7227 8.99467 45.1973 5.46667C41.6747 1.94133 36.9867 0 32 0C27.0133 0 22.3253 1.94133 18.8 5.46667C11.5227 12.744 11.5227 24.5867 18.856 31.92L27.304 39.4187ZM20.6853 7.352C23.7093 4.33067 27.728 2.66667 32 2.66667C36.272 2.66667 40.2907 4.33067 43.312 7.352C46.336 10.3733 48 14.392 48 18.6667C48 22.9413 46.336 26.9573 43.3707 29.9253L34.8293 37.512C33.272 39.04 30.7333 39.032 29.1227 37.4667L20.6853 29.9787C14.448 23.7413 14.448 13.5893 20.6853 7.352ZM32 26.6133C36.3947 26.6133 39.9733 23.0373 39.9733 18.64C39.9733 14.2427 36.3947 10.6667 32 10.6667C27.6053 10.6667 24.0267 14.2427 24.0267 18.64C24.0267 23.0373 27.6053 26.6133 32 26.6133ZM32 13.3333C34.928 13.3333 37.3067 15.7147 37.3067 18.64C37.3067 21.5653 34.9253 23.9467 32 23.9467C29.0747 23.9467 26.6933 21.5653 26.6933 18.64C26.6933 15.7147 29.0747 13.3333 32 13.3333ZM64 45.376C64 45.8453 63.7547 46.28 63.352 46.52L35.8587 63.016C34.6693 63.7307 33.336 64.088 32 64.088C30.664 64.088 29.3307 63.728 28.1413 63.016L0.648 46.5173C0.245333 46.2773 0 45.8427 0 45.3733C0 44.904 0.245333 44.4693 0.648 44.2293L13.9813 36.2293C14.6053 35.848 15.432 36.056 15.8107 36.688C16.192 37.3173 15.984 38.1387 15.352 38.5173L3.92533 45.3733L29.512 60.7253C31.048 61.648 32.9547 61.648 34.4907 60.7253L60.0773 45.3733L48.5813 38.4747C47.9493 38.096 47.744 37.2773 48.1227 36.6453C48.504 36.0133 49.328 35.808 49.952 36.1867L63.352 44.2293C63.7547 44.472 64 44.904 64 45.3733V45.376Z" fill="#E3B000"/>
                    </svg>

                    <div>
                        <p>آدرس دفتر ایران <br>
                        آذربایجان غربی ، منطقه آزاد ماکو ، شهر شوط ، خیابان ولی عصر جنوبی  <br>04434278606</p>
                        <p>آدرس دفتر ترکیه <br>
                        استانبول / منطقه شیشلی / ساختمان شماره 31 / پلاک 8 / واحد 3</p>
                    </div>
                    
                    </div>

                    <div class="contact-part">

                    <ul>
                        <li>
                        <a href="mailto:hiturk.ir@gmail.com">
                            <img src="{{asset('icons/ui/contact-email.svg')}}" alt="Email">
                            <p>hiturk.ir@gmail.com</p> 
                        </a>
                        </li>

                        <li>
                        <a href="https://instagram.com/hiturk.ir">
                            <img src="{{asset('icons/ui/contact-instagram.svg')}}" alt="Instagram">
                            <p>@hiturk.ir</p>
                        </a>
                        </li>

                        <li>
                        <a>
                            <img src="{{asset('icons/ui/contact-call.svg')}}" alt="Call">
                            <a href="tel:09011021212">09011021212</a>
                            <p> - </p>
                            <a href="tel:04434278606">04434278606</a>
                        </a>
                        </li>
                    </ul>

                    </div>

                </div>

                <iframe class="iframe-lg" title="map-iframe" src="https://neshan.org/maps/iframe/places/_bBFFQOARnul#c39.213-44.770-18z-0p/39.213396245797846/44.76914413279109" allowFullScreen loading="lazy" ></iframe>

                </div>

                <div class="content-contact">
                <h2>اکثر سوالات در (<a href="#" class="color">بخش سوالات پر تکرار</a>) پاسخ داده شده ، پیشنهاد میکنیم حتما این بخش را مطالعه کنید.</h2>
                <h3>برای طرح سوالات مرتبط با سفارش ثبت شده از بخش (<a href="#" class="color">گفتگوی آنلاین</a>) میتوانید به راحتی مکاتبه کنید.</h3>
                <p>سوالات به این شکل سریعتر و دقیقتر خواهد بود و مکالمات برای روزهای آتی مکتوب خواهد ماند.</p>
                </div>

                <div class="center">
                <p>همچنین می‌توانید فرم تماس زیر را پر کرده و برای ما ارسال کنید. تیم پشتیبانی ما در اسرع وقت به شما پاسخ خواهد داد.</p>
                </div>

                <form action="#" method="post" class="contact-form">
                <div class="grid-2">
                    <input type="text" name="name" id="name" placeholder="نام و نام خانوادگی">
                    <input type="tel" name="tel" id="tel" placeholder="شماره تلفن">
                    <input type="email" name="email" id="email" placeholder="ایمیل">
                    <input type="text" name="title" id="title" placeholder="موضوع">
                </div>
                <textarea name="textarea" id="textarea" placeholder="پیام" rows="7"></textarea>
                <input type="submit" value="ارسال پیام" class="submit">
                </form>
                
            </section>

            </div>
        </div>
    @endsection

    <!-- Footer section  -->
    @section('footer')
         @include('layouts.commitments')
        
    @endsection

    <!-- Script section (optional)  -->
    <!-- Uncomment and add custom scripts if needed 
    @push('scripts') 
    <script src="{{ asset('js/custom.js') }}"></script> 
    @endpush -->