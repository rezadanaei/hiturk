@guest
<link rel="stylesheet" href="{{asset('styles/layouts/auth-model.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">


@php
     $activeTab = session('phone_error') ? 'phone' : (session('otp_error') ? 'otp' : 'phone');
@endphp


<form id="auth-model-continer" class="auth-continer {{ session('phone_error') || session('otp_error') ? 'open-auth-continer' : '' }} " action="{{ url('/login') }}" method="POST">
    @csrf
    <div class="auth-model {{ session('phone_error') || session('otp_error') ? 'open-auth-model' : '' }}">
        <button type="button" class="close-icon"></button>
        <div id="send-number" class="auth {{ $activeTab === 'phone' ? 'tab-active' : '' }}">
            <span>ورود یا ثبت نام</span>
            <p>برای ادامه لطفا شماره همراه خود را وارد نمایید.</p>
            <div class="phone-input-container">
                <img src="{{asset('icons/ui/profile-icon.svg')}}" alt="account icon">
                <input value="" id="phone-input" name="phone" type="tel" minlength="11" maxlength="11" pattern="09[0-9]{9}" placeholder="شماره همراه" oninput="this.value = this.value.replace(/[^0-9]/g, '')"  />
                <output class="error-message {{ $activeTab === 'phone' ? 'show' : '' }}">
                    @if (session('phone_error'))
                        {{ session('phone_error') }}
                    @endif
                </output>
            </div>
            <button type="button" class="next-button button">ادامه</button>
        </div>
        <div id="validation-code" class="auth {{ $activeTab === 'otp' ? 'tab-active' : '' }}">
            <span>ورود یا ثبت نام</span>
            <p>برای ادامه لطفا شماره همراه خود را وارد نمایید.</p>
            <div class="edit-number">
                <span id="phone-output" class="phone-preview" value=""></span>
                <script>
                    const phoneInput = document.getElementById('phone-input');
                    const phoneOutput = document.getElementById('phone-output');

                    document.addEventListener('DOMContentLoaded', function () {
                        const savedPhone = sessionStorage.getItem('phone_input');
                        if (savedPhone) {
                            phoneInput.value = savedPhone;
                            phoneOutput.textContent = savedPhone;
                        }
                    });

                    // ذخیره مقدار جدید در sessionStorage و نمایش آنی در output
                    phoneInput.addEventListener('input', function () {
                        sessionStorage.setItem('phone_input', this.value);
                        phoneOutput.textContent = this.value;
                    });

                </script>

                <button class="button-edit-number" type="button" >
                    <svg width="16" height="16" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.9915 4.95866C25.9785 4.87948 25.6641 2.99453 24.363 1.68039C23.05 0.392243 21.158 0.07907 21.0788 0.0660704C20.9382 0.0412529 20.7964 0.0719794 20.6746 0.146432C20.5305 0.235066 17.0737 2.40718 9.98067 9.46598C2.5047 16.9065 0.568943 19.8444 0.489763 19.9661C0.436583 20.0489 0.403493 20.1434 0.396402 20.2415L0.00168639 25.3054C-0.0113132 25.478 0.0513213 25.647 0.173045 25.7699C0.284133 25.881 0.434219 25.9424 0.591397 25.9424C0.60676 25.9424 0.622123 25.9424 0.637486 25.9412L5.72625 25.5477C5.82434 25.5406 5.9177 25.5087 6.00042 25.4555C6.12215 25.3775 9.07306 23.45 16.5467 16.0119C23.6397 8.95191 25.8213 5.51055 25.9099 5.36755C25.9856 5.24583 26.0151 5.10165 25.9927 4.96102L25.9915 4.95866ZM15.7111 15.1728C9.16406 21.6892 6.09142 23.9499 5.47571 24.3813L1.23311 24.7098L1.56164 20.492C1.99654 19.8763 4.27029 16.8179 10.8126 10.3062C12.908 8.22156 14.6865 6.5647 16.1519 5.2671C16.7239 5.39946 18.1858 5.82018 19.2187 6.83415C20.2445 7.83985 20.6723 9.25208 20.8094 9.81933C19.4999 11.2847 17.8254 13.0681 15.7111 15.1728ZM21.7323 8.76873C21.4534 7.96393 20.9417 6.86842 20.0459 5.98917C19.1513 5.11229 18.0333 4.61121 17.2144 4.33822C19.3499 2.50764 20.6439 1.58939 21.1048 1.2774C21.5728 1.38612 22.7144 1.72057 23.5275 2.51709C24.3252 3.32307 24.6655 4.46113 24.7778 4.93029C24.4646 5.38883 23.5499 6.66752 21.7323 8.76873Z" fill="#E3B000"/>
                    </svg> 
                    ویرایش
                </button>
                
            </div>
            <div class="inputs">
                <input name="input1" type="tel" class="number" maxlength="1" pattern="[0-9]">
                <input name="input2" type="tel" class="number" maxlength="1" pattern="[0-9]">
                <input name="input3" type="tel" class="number" maxlength="1" pattern="[0-9]">
                <input name="input4" type="tel" class="number" maxlength="1" pattern="[0-9]">
                <input name="input5" type="tel" class="number" maxlength="1" pattern="[0-9]">
                <output class="error-message {{ $activeTab === 'otp' ? 'show' : '' }}">
                    {{-- کد ورود معتبر نیست! --}}
                    @if (session('otp_error') )
                        
                        {{ session('otp_error') }}
                    @endif
                </output>
            </div>
            
            <button type="submit" class="send-button button">تایید</button>
        </div>
        

    </div>
</form>

<script>
document.addEventListener("DOMContentLoaded", () => {
    // DOM Elements
    const phoneInput = document.getElementById('phone-input');
    const buttonEditNumber = document.querySelector('.button-edit-number');
    const phoneContainer = document.querySelector(".phone-input-container");
    const errorMessage = document.querySelector(".error-message");
    const nextButton = document.querySelector(".next-button");
    const closeButton = document.querySelector(".close-icon");
    const authContainer = document.querySelector(".auth-continer");
    const authModel = document.querySelector(".auth-model");
    const validationCode = document.getElementById('validation-code');
    const numberInputs = document.querySelectorAll('input.number');

    // Utility Functions
    const toggleTabs = () => {
        document.getElementById('send-number')?.classList.toggle('tab-active');
        document.getElementById('validation-code')?.classList.toggle('tab-active');
    };

    const showError = (message) => {
        phoneContainer.classList.add("error-border");
        errorMessage.classList.add("show");
        errorMessage.textContent = message;
    };

    const hideError = () => {
        phoneContainer.classList.remove("error-border");
        errorMessage.classList.remove("show");
        errorMessage.textContent = "";
    };

    const validatePhoneNumber = () => {
        const phoneValue = phoneInput.value.trim();
        const isValid = phoneValue.length === 11 && /^\d+$/.test(phoneValue) && phoneValue.startsWith("09");

        if (isValid) {
            hideError();
            return phoneValue;
        } else {
            showError("لطفاً شماره موبایل معتبر وارد کنید.");
            return null;
        }
    };

    const handlePhoneSubmission = () => {
        const phoneNumber = validatePhoneNumber();
        if (!phoneNumber) return;

        fetch('/api/check-phonenumber', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ phone: phoneNumber })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                toggleTabs();
            } else {
                showError(data.message);
            }
        })
        .catch(() => showError("خطایی در ارسال رخ داد."));
    };

    const handleCloseAuth = () => {
        authContainer.classList.remove("open-auth-continer");
        authModel.classList.remove("open-auth-model");
        setTimeout(() => {
            authContainer.style.zIndex = -10;
        }, 300);
    };

    // Event Bindings
    phoneInput.addEventListener("input", validatePhoneNumber);
    nextButton.addEventListener("click", e => {
        e.preventDefault();
        handlePhoneSubmission();
    });
    buttonEditNumber.addEventListener("click", e => {
        e.preventDefault();
        toggleTabs();
    });

    closeButton?.addEventListener("click", handleCloseAuth);
    authContainer?.addEventListener("click", event => {
        if (event.target === authContainer) handleCloseAuth();
    });

    // Validation Code Input Behavior
    numberInputs.forEach(input => {
        input.addEventListener('focus', () => {
            if (getComputedStyle(validationCode).opacity === '1') {
                input.classList.add('focused');
            }
        });

        input.addEventListener('blur', () => {
            if (getComputedStyle(validationCode).opacity === '1') {
                input.classList.toggle('full', input.value !== '');
                input.classList.remove('focused');
            }
        });

        input.addEventListener('keydown', event => {
            if (getComputedStyle(validationCode).opacity !== '1') return;

            const key = event.key;
            const keyCode = event.keyCode;
            const isDigit = /^[0-9]$/.test(key);
            const isBackspace = keyCode === 8;
            const isDelete = keyCode === 46;
            const isArrowLeft = keyCode === 37;
            const isArrowRight = keyCode === 39;

            if (!isDigit && !isBackspace && !isDelete && !isArrowLeft && !isArrowRight) {
                event.preventDefault();
                return;
            }

            const focusPrev = () => input.previousElementSibling?.classList.contains('number') && input.previousElementSibling.focus();
            const focusNext = () => input.nextElementSibling?.classList.contains('number') && input.nextElementSibling.focus();

            if (isArrowLeft || isArrowRight) {
                event.preventDefault();
                isArrowLeft ? focusPrev() : focusNext();
            }

            if (isBackspace) {
                event.preventDefault();
                input.value = '';
                focusPrev();
            }

            if (isDigit) {
                event.preventDefault();
                input.value = key;
                focusNext();
            }
        });
    });
});
</script>
@endguest