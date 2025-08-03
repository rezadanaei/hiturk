<div class="swiper-discounts swiper-products">
    <div class="swiper-wrapper ">
        @foreach (range(1, 10) as $number)
            <div class="swiper-slide">
                <div class="nested">@include('components.sliders.nested-swiper')</div> 
                <a class="offer" href="#">5%</a>
                <a class="slide-link" href="#">
                    <samp class="swiper-discounts-title">كفش مجلسي زنانه رنگ مشکی...</samp>
                    <del class="old-price">250,000 تومان</del>
                    <samp class="new-price">4.458.700 تومان</samp>
                </a>
            </div>
        @endforeach
        
            
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev">
        <img src="{{ asset('icons/ui/next-icon.svg') }}" alt="" />
    </div>
    <div class="swiper-button-next">
        <img
            style="scale: -1"
            src="{{ asset('icons/ui/next-icon.svg') }}"
            alt=""
        />
    </div>

</div>
<style>
    .swiper-products{
        width: 100% !important; 
        overflow: hidden !important;
    }
    .swiper-discounts .swiper-wrapper{
        height: auto !important;
    }
    
    .swiper-products .swiper-button-prev::after,
    .swiper-products .swiper-button-next::after {
        display: none;
    }
    .swiper-products .swiper-button-prev,
    .swiper-products .swiper-button-next {
        position: absolute !important;
        z-index: 10 !important;
        top: unset !important;
        bottom: 50% !important;
        display: inline-flex !important ;
        transform: translate(-50%, 50%);
        align-items: center;
        justify-content: center;
    }
    .swiper-products .swiper-button-prev img,
    .swiper-products .swiper-button-next img {
        width: 15px;
        height: auto;
    }
    .swiper-products .swiper-button-next {
        left: 0px !important;
        right: unset !important;
        transform: translateX(50%) translateY(50%);
    }
    .swiper-products .swiper-button-prev {
        right: 0px !important;
        left: unset !important;
    }
    .swiper-products .swiper-wrapper .swiper-slide{
        background: none !important;
        border-radius: 12px;
        padding: 0px !important ;
        box-sizing: border-box;
        min-width: 150px;

    }
    .swiper-discount .swiper-wrapper .swiper-slide .slide-link{
        text-decoration: none;
        
    }
    .swiper-discounts .swiper-wrapper .swiper-slide .nested{
        border-radius: 15px;
        overflow: hidden;
        box-sizing: border-box;
        
    }
    .swiper-products .swiper-wrapper .swiper-slide .offer{
        position: absolute;
        top: 50px;
        left: 0px !important;
        background-color: #E3B000 !important;
        z-index: 5;
        padding: 0px 10px !important;
        border-radius: 0px 20px 20px 0px;
        font-family: 'VazirFD';
        font-style: normal;
        font-weight: 500;
        font-size: 1rem;
        line-height: 30px !important;
        text-align: right;
        text-decoration: none;
        /* Black */
        color: white !important;
        display: flex;
        align-items: center;
        justify-content: center;


    }
    .swiper-products .swiper-wrapper .swiper-slide .slide-link .swiper-discounts-title , .swiper-discounts .swiper-wrapper .swiper-slide .slide-link .old-price, .swiper-discounts .swiper-wrapper .swiper-slide .slide-link .new-price{
        display: block;
        margin: 10px !important;
    }
    .swiper-discounts .swiper-wrapper .swiper-slide .slide-link .swiper-discounts-title{
        font-family: 'IRANSans';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        text-align: center;
        color: black;
    }

    .swiper-discounts .swiper-wrapper .swiper-slide .slide-link .old-price{
        font-family: 'VazirFD';
        font-style: normal;
        font-weight: 500;
        font-size: 10px;
        line-height: 16px;
        text-align: center;
        color: #000000;

        opacity: 0.4;
    }
    .swiper-discounts .swiper-wrapper .swiper-slide .slide-link .new-price{

        font-family: 'VazirFD';
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 32px;
        text-align: center;


        color: #E3B000;
    }
    @media (max-width: 1024px){
        .swiper-discount *{
        margin: 0;
        
        }
        .swiper-discounts .swiper-wrapper .swiper-slide .slide-link .new-price{
            font-size: 16px;
            margin: 0;
        }
        .swiper-discounts .swiper-wrapper .swiper-slide .slide-link .old-price{
            margin: 0;
        }
        .swiper-discounts .swiper-wrapper .swiper-slide .slide-link .swiper-discounts-title{
            font-weight: 500;
            font-size: 14px;
            margin: 0;
        }
        .swiper-discounts .swiper-slide:first-child {
            margin-right: 10px;
        }
        .swiper-discounts .swiper-wrapper .swiper-slide{
            padding: 10px;
        }
        .swiper-products .swiper-button-prev,
        .swiper-products .swiper-button-next{
            display: none !important;
        }
    }
</style>
