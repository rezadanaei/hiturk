<style>
    header {
        position: fixed;
        top: 0;
        /* left: 50%; */
        /* transform: translateX(-50%); */
        background: white;
        transition: transform 0.3s ease-in-out; 
        z-index: 998;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 40px;
        box-sizing: border-box;
        margin: auto !important;
        
    }
    .header{
        width: 100%;
        max-width: 1500px;
        z-index: 997;
        background: white;
        margin: auto !important;
        display: block;
        
    }

    header.hide {
        transform: translateY(-50%);
    }
    .navigation-general{
        padding: 20px 0;
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
        left: 0px !important;
        transform: translateY(-50%);
        width: 120px;
        display: inline-block;
    }
    .logo-link > img{
         height: 100%;
         float: left;
    }

    .wishlist-link{
        display: none;

    }
    .navigation-catrgories{
        padding: 10px 0 20px 0;
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
    .dropdown{
        position: absolute;
        top: 0%;
        opacity: 0;
        width:calc(100% - 70px);
        max-width: 1440px;
        background: #ffffff;
        box-shadow: 0px 16px 37.3px rgba(0, 0, 0, 0.09);
        border-radius: 0 0px 20px 20px; 
        box-sizing: border-box;
        margin: auto;
        z-index: 990;
        left: 50%;
        transform: translateX(-50%);
        display: block;
        transition: top 0.3s ease, opacity 0.3s ease;

    }

    .down{
        top: 100%;
        opacity: 1;
    }
    .dropdown > * {
        display: none;
    }
    .dropdown .show{
        display: block;
    }
    @media (max-width: 1024px) {
        header{
            padding: 0 20px;
        }
        .navigation-general{
            height: 60px;
            box-sizing: border-box;
            padding: 20px 0;

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
        .search-btm img {
            filter: brightness(0) saturate(100%) invert(42%) sepia(4%) saturate(160%) hue-rotate(150deg);
            height: 21px;
            width: auto;
        }
        .search-btm > span{
            display: none;
        }
        .logo-link{
            height: auto;
            left: 20px;
            width: unset;
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
    <div class="header">
        <div class="navigation-general">
            <div class="desktop-only">
                @include('layouts.shopping-cart')
                @if (Auth::check())
                @include('layouts.after-login-btn')
                @endif
                @include('layouts.auth-button')
                
            </div>
            <a class="wishlist-link" href="#">
                <img  src="{{asset('icons/ui/wishlist.svg')}}" alt="">
            </a>
            <div class="search-btm">
                <picture>
                    <source srcset="{{asset('icons/ui/search-icon-mobile.svg')}}" media="(max-width: 1024px)">
                    
                    <img src="{{asset('icons/ui/search-icon.svg')}}" alt="search">
                </picture>
                
                <span>جستجو در های‌ترک</span>
            </div>
            <a class="logo-link" href="{{ route('home') }}">
                <img  src="{{asset('icons/logo/hiturk.svg')}}" alt="">
            </a>
        
        </div>
        <div class="navigation-catrgories">
            <ul class="main-list">
                <li class="top-list  products-categories" X-data ='category' >
                    <img src="{{asset('icons/ui/meno-hamberger.svg')}}" alt="">
                    دسته بندی ها
                </li>
                <li class="top-list direct-link" x-data='Xdata'>
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
        
    </div>
    
    
    </div>
    <div class="dropdown"  >
        <div class="category" X-data ='category'>
            {{-- @include('layouts.category-dropdown') --}}
        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const header = document.querySelector("header");
        const container = document.querySelector(".container");
        const navCategories = document.querySelector(".navigation-catrgories");
        const dropdown = document.querySelector(".dropdown");
        const dropdowns = dropdown.querySelectorAll("[X-data]");
        const listItems = document.querySelectorAll(".main-list .top-list");

        let lastScrollTop = 0;
        let timeoutId;

        const updateContainerMargin = () => {
            if (container) {
                container.style.marginTop = `${header.offsetHeight}px`;
            }
        };

        const hideDropdown = () => {
            dropdown.classList.remove("down");
            dropdowns.forEach(el => el.classList.remove("show"));
        };

        const showDropdown = (targetData) => {
            dropdown.classList.add("down");
            dropdowns.forEach(el => {
                el.classList.toggle("show", el.getAttribute("X-data") === targetData);
            });
        };

        const initHeaderScroll = () => {
            window.addEventListener("scroll", () => {
                const scrollTop = window.scrollY;
                const containerTop = container.getBoundingClientRect().top;

                if (containerTop <= 0) {
                    if (scrollTop > lastScrollTop && scrollTop > navCategories.offsetTop + navCategories.offsetHeight) {
                        header.classList.add("hide");
                    } else {
                        header.classList.remove("hide");
                    }
                    lastScrollTop = scrollTop;
                }
            });
        };

        const initCategoryHoverDropdown = () => {
            listItems.forEach(item => {
                item.addEventListener("mouseenter", () => {
                    const data = item.getAttribute("X-data");
                    clearTimeout(timeoutId);
                    data ? showDropdown(data) : hideDropdown();
                });
            });

            const delayedHide = () => {
                timeoutId = setTimeout(hideDropdown, 100);
            };

            dropdown.addEventListener("mouseenter", () => clearTimeout(timeoutId));
            dropdown.addEventListener("mouseleave", delayedHide);
            navCategories.addEventListener("mouseleave", delayedHide);

            document.addEventListener("click", (e) => {
                if (!dropdown.contains(e.target) && !navCategories.contains(e.target)) {
                    hideDropdown();
                }
            });
        };

        // Init
        updateContainerMargin();
        initHeaderScroll();
        initCategoryHoverDropdown();
        window.addEventListener("resize", updateContainerMargin);
    });

</script>
