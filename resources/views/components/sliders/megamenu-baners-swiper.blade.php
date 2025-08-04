<!-- Slider main container -->
<div class="megamenu-brands-swiper">
    @foreach (range(1, 10) as $number)
        <a href="#" class="mega-brand-item">
            <img src="{{ asset('image/image(5).png') }}" alt=""/>
        </a>
    @endforeach
</div>

<style>
    .megamenu-brands-swiper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        overflow-y: auto;
        height: 100%;
        max-height: 180px;
        scrollbar-width: thin;
        scrollbar-color: #999 #f1f1f1;  
        direction: ltr;

    }
    .megamenu-brands-swiper ::-webkit-scrollbar {
        width: 8px;
    }
    .megamenu-brands-swiper ::-webkit-scrollbar-track {
        background: #f1f1f1;
        margin-top: 5px;  /* فاصله از بالا */
        margin-bottom: 5px; /* فاصله از پایین */
        border-radius: 4px;
    }
    .megamenu-brands-swiper ::-webkit-scrollbar-thumb {
        background-color: #999;
        border-radius: 4px;
        border: 2px solid #f1f1f1;
    }
    .megamenu-brands-swiper::-webkit-scrollbar-thumb:hover {
        background: #666;
    }
    .megamenu-brands-swiper .mega-brand-item {
        width: 100%;
        padding: 4px;
        background-color: #dbdbdb;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
    }
    .megamenu-brands-swiper .mega-brand-item img {
        width: 80%;
    }
     @media (max-width: 991px) {
        .megamenu-brands-swiper {
            display: flex;
            flex-direction: row;
            overflow-x: auto;
            overflow-y: hidden;
            max-height: none;
            height: auto;
            direction: rtl;
            max-width: 100%;
        }

        .megamenu-brands-swiper .mega-brand-item {
            min-width: 70px; 
        }

        .megamenu-brands-swiper::-webkit-scrollbar {
            height: 8px;
            width: 0;
        }
    }
</style>