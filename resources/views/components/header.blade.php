
<style>
    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: white;
        transition: transform 0.3s ease-in-out;
        z-index: 998;
    }

    header.hide {
        transform: translateY(-65%);
    }
    .navigation-general{
        padding: 20px 40px;
        display: flex;
        align-items: center;
        max-width: 1500px;
        position: relative;
    }
    .search-btm{
        position: absolute;
        background-color: rgba(96, 96, 96, 0.08);
        border-radius: 12px;
        width: 40%;
        max-width: 700px;
        height: calc(100% - 40px);
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 10px;
        padding: 0 20px;
        box-sizing: border-box;

    }
    .search-btm > span {
        font-family: 'IRANSans';
        font-style: normal;
        font-weight: 400;
        font-size: 1rem;
        line-height: 30px;
        color: #000000;
        opacity: 0.4;


    }
    .desktop-only{
        display: flex;
        align-items: center;
    }
    .logo-link{
        height: calc(100% - 20px);;
        text-decoration: none;
        position: absolute;
        top: 50%;
        left: 0px;
        transform: translateY(-50%)
    }
    .logo-link > img{
         height: 100%;
    }

    .wishlist-link{
        display: none;

    }
    .navigation-catrgories{
        padding: 10px 40px;
    }
    .main-list{
        display: flex;
        gap: 30px;
        align-items: center;
    }
    .top-list{

        font-family: 'IRANSans';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: #606060;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        cursor: pointer;
        transition: color 0.3s ease-in-out;
        position: relative;



    }
    .vertical-line {
        width: 2px;
        height: 20px;
        margin: 0px;
        background-color:  #606060;;
        border: none;
        display: inline-block;
        opacity: 0.2;
        
    }
    .top-list > a{
        text-decoration: none;
        color: #606060;
        transition: color 0.3s ease-in-out;
    }
    .top-list::after {
        content: "";
        position: absolute;
        bottom: -5px;
        right: 0;
        width: 0;
        height: 1.5px; 
        background-color:#E3B000; 
        transition: width 0.3s ease-in-out, background-color 0.3s ease-in-out;
    }

    .top-list:hover {
        color: #E3B000;
    }

    .top-list:hover a {
        color: #E3B000; 
    }

    .top-list:hover::after {
        width: 100%; 
    }
    @media (max-width: 1024px) {
        .navigation-general{
            height: 60px;
            box-sizing: border-box;
            padding: 20px;

        }
        .desktop-only{
            display: none;
        }
        .wishlist-link{
            display: inline;
            text-decoration: none;
            margin-left: 20px

        }
        .search-btm{
            all: unset;
            widows: auto;
        }
        .search-btm > img {
            filter: brightness(0) saturate(100%) invert(42%) sepia(4%) saturate(160%) hue-rotate(150deg);
        }
        .search-btm > span{
            display: none;
        }
        .logo-link{
            height: auto;
            left: 20px;
        }
        .logo-link > img{
            height: 50px;
            

        }
        .navigation-catrgories{
            display: none;
        }
        header.hide {
        transform: translateY(-100%);
    }
    
    }
</style>
<header>
    <div class="navigation-general">
        <div class="desktop-only">
            @include('layouts.shopping-cart')
            @include('layouts.auth-modal')
            @include('layouts.auth-button')
            
        </div>
        <a class="wishlist-link" href="#">
            <img  src="{{asset('icons/ui/wishlist.svg')}}" alt="">
        </a>
        <div class="search-btm">
            <picture>
                <source srcset="{{asset('icons/ui/search-icon-mobile.svg')}}" media="(max-width: 1024px)">
                
                <img style="height: 50%;" src="{{asset('icons/ui/search-icon.svg')}}" alt="search">
            </picture>
            
            <span>جستجو در های‌ترک</span>
        </div>
        <a class="logo-link" href="{{ route('home') }}">
            <img  src="{{asset('icons/logo/hiturk.svg')}}" alt="">
        </a>
    </div>
    <div class="navigation-catrgories">
        <ul class="main-list">
            <li class="top-list  products-categories" >
                <img src="{{asset('icons/ui/meno-hamberger.svg')}}" alt="">
                دسته بندی ها
            </li>
            <li class="top-list direct-link">
                <a href="#">شگفت انگیز</a>
            </li>
            <hr class="vertical-line">
            <li class="top-list">
                <a href="#">زنانه</a>
            </li>
            <li class="top-list">
                <a href="#">مردانه</a>
            </li>
            <li class="top-list">
                <a href="#">مادر و نوزاد</a>
            </li>
            <li class="top-list">
                <a href="#">زیبایی و سلامت</a>
            </li>
        </ul>


    </div>
    
</header>

<script>
    let lastScrollTop = 0;
    const header = document.querySelector("header");
    const navCategories = document.querySelector(".navigation-catrgories");

    window.addEventListener("scroll", function () {
        let scrollTop = window.scrollY;

        if (scrollTop > lastScrollTop) {
            // اسکرول به پایین → هدر را مخفی نکنیم تا کادر `navigation-categories` خارج نشود
            if (scrollTop > navCategories.offsetTop + navCategories.offsetHeight) {
                header.classList.add("hide");
            }
        } else {
            // اسکرول به بالا → نمایش مجدد هدر
            header.classList.remove("hide");
        }

        lastScrollTop = scrollTop;
    });

</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector("header");
    const container = document.querySelector(".container");

    function updateContainerMargin() {
        let headerHeight = header.offsetHeight; 
        if (container) {
            container.style.marginTop = `${headerHeight}px`; 
        }
    }

    updateContainerMargin(); 

    
    window.addEventListener("resize", updateContainerMargin);
});

</script>