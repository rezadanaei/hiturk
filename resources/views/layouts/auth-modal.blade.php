<link rel="stylesheet" href="{{asset('styles/layouts/auth-model.css')}}">

<form class="auth-continer">
    @csrf
    <div class="auth-model">
        <button class="close-icon"></button>
        <div class="auth">
            <span>ورود یا ثبت نام</span>
            <p>برای ادامه لطفا شماره همراه خود را وارد نمایید.</p>
            <div class="phone-input-container">
                <img src="{{asset('icons/ui/profile-icon.svg')}}" alt="account icon">
                <input type="tel" minlength="11" maxlength="11" pattern="09[0-9]{9}" placeholder="شماره همراه" oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
                <output  class="error-message">لطفاً شماره موبایل معتبر وارد کنید.</output>
            </div>
            <button class="next-button">ادامه</button>
        </div>


    </div>
</form>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const phoneInput = document.querySelector(".phone-input-container input");
    const phoneContainer = document.querySelector(".phone-input-container");
    const errorMessage = document.querySelector(".error-message");
    const nextButton = document.querySelector(".next-button");

    const validatePhoneNumber = () => {
        const phoneValue = phoneInput.value;

        const isValid = phoneValue.length === 11 && /^\d+$/.test(phoneValue) && phoneValue.startsWith("09");

        if (isValid) {
            phoneContainer.classList.remove("error-border");
            errorMessage.style.display = "none";
            alert("این یک پیغام است!");
            
        } else {
            phoneContainer.classList.add("error-border");
            errorMessage.style.display = "block";
            
        }
    };

    nextButton.addEventListener("click", (e) => {
        e.preventDefault(); 
        validatePhoneNumber();
    });
});


</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const closeButton = document.querySelector(".close-icon"); // دکمه بستن
        const authContainer = document.querySelector(".auth-continer"); // فرم با کلاس auth-continer
        const authModel = document.querySelector(".auth-model"); // مدل فرم

        // تابع برای برداشتن کلاس "open"
        const closeForm = () => {
            authContainer.classList.remove("open-auth-continer");
            authModel.classList.remove("open-auth-model");
        };

        // رویداد کلیک برای دکمه بستن
        closeButton.addEventListener("click", closeForm);

        // رویداد کلیک برای فرم auth-continer
        authContainer.addEventListener("click", (event) => {
            // فقط وقتی که روی خود فرم کلیک شد و نه روی مدل، کلاس open برداشته شود
            if (event.target === authContainer) {
                closeForm();
            }
        });
    });



</script>