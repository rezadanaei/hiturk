<style>
    .baners-swiper{
        width: 100% !important;
    }
    .baners-swiper .swiper-wrapper{
        height: auto !important;
    }
    .baners-swiper .swiper-wrapper .swiper-slide{
        padding-bottom: 10px;
        border-radius: 20px;
        text-decoration: none;
        font-family: "VazirFD";
        color: black;

    }
    .baners-swiper .swiper-wrapper .swiper-slide img{
        width: 100%;
        object-fit: cover;
    }
    .baners-swiper .swiper-wrapper .swiper-slide .texts{
        padding: 20px;
        display: flex;
        justify-content: flex-start;
        gap: 15px; 
        flex-direction: column;
    }
    .baners-swiper .swiper-wrapper .swiper-slide .texts h4{
        font-family: 'VazirBoldFD';
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 29px;
        /* identical to box height */
        color: #000000;
    }
    .baners-swiper .swiper-wrapper .swiper-slide .texts p{
        font-family: 'VazirThinFD';
        font-style: normal;
        font-size: 14px;
        line-height: 23px;
        color: #000000;
    }
    .baners-swiper .swiper-wrapper .swiper-slide .texts span{
        display: flex;
        align-items: center;
        font-family: 'VazirFD';
        font-style: normal;
        font-size: 14px;
        line-height: 26px;
        color: #000000;
        gap: 5px;
    }
    .baners-swiper .swiper-wrapper .swiper-slide .texts span svg{
        transition: margin-right ease 0.3s;
    }
    .baners-swiper .swiper-wrapper .swiper-slide .texts span:hover svg{
        margin-right: 10px;
    }
    @media (max-width:767px){
        .baners-swiper .swiper-wrapper .swiper-slide{
            padding-bottom: 0px !important;
            border-radius: 10px;
        }
        .baners-swiper .swiper-slide:first-child {
             margin-right: 10px;
        }
        .baners-swiper .swiper-wrapper .swiper-slide .texts{
            gap: 5px;
            padding: 10px;
        }
        .baners-swiper .swiper-wrapper .swiper-slide .texts h4{
            font-size: 16px;
            line-height: 20px;
        }
        .baners-swiper .swiper-wrapper .swiper-slide .texts p{
            font-size: 12px;
            line-height: 16px;
        }
    }
</style>

<!-- Slider main container -->
<div class="baners-swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
         <!-- Slides -->
        <a style="background-color: #E0E4FF" href="#" class="swiper-slide">
            <img src="{{asset('image/image10.png')}}" alt="">
            <div class="texts"><h4>20% بازگشت وجه</h4>
                <p>مراقبت و بهداشت پوست مو</p> 
                <span>مشاهده محصولات 
                    <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5571 6.51883e-06C4.49915 -0.000310111 4.4417 0.0101984 4.38805 0.0309303C4.3344 0.0516613 4.2856 0.0822094 4.24446 0.12082L0.64684 3.5244C0.441801 3.71789 0.279125 3.94775 0.16813 4.20081C0.0571348 4.45388 9.22281e-07 4.72517 8.74376e-07 4.99915C8.26471e-07 5.27313 0.0571347 5.54443 0.16813 5.79749C0.279125 6.05055 0.441801 6.28041 0.64684 6.4739L4.24445 9.87748C4.28551 9.91633 4.33425 9.94714 4.3879 9.96816C4.44154 9.98918 4.49904 10 4.5571 10C4.61516 10 4.67266 9.98918 4.7263 9.96816C4.77995 9.94714 4.82869 9.91633 4.86974 9.87748C4.9108 9.83864 4.94337 9.79253 4.96559 9.74178C4.98781 9.69103 4.99925 9.63663 4.99925 9.5817C4.99925 9.52677 4.98781 9.47237 4.96559 9.42162C4.94337 9.37087 4.9108 9.32476 4.86974 9.28592L1.27213 5.88233C1.02474 5.648 0.885788 5.33035 0.885788 4.99915C0.885789 4.66796 1.02474 4.3503 1.27213 4.11597L4.86975 0.712385C4.91102 0.673656 4.94378 0.627582 4.96613 0.576816C4.98849 0.52605 5 0.471598 5 0.416602C5 0.361607 4.98849 0.307156 4.96613 0.25639C4.94378 0.205624 4.91102 0.159548 4.86975 0.12082C4.8286 0.0822095 4.7798 0.0516614 4.72615 0.0309304C4.6725 0.0101985 4.61505 -0.000310091 4.5571 6.51883e-06Z" fill="black"/>
                    </svg>
                </span> 
            </div>
            
        </a>
        
        <a style="background-color: #FEEEBD" href="#" class="swiper-slide">
            <img src="{{asset('image/image2.png')}}" alt="">
            <div class="texts"><h4>20% بازگشت وجه</h4>
                <p>مراقبت و بهداشت پوست مو</p> 
                <span>مشاهده محصولات 
                    <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5571 6.51883e-06C4.49915 -0.000310111 4.4417 0.0101984 4.38805 0.0309303C4.3344 0.0516613 4.2856 0.0822094 4.24446 0.12082L0.64684 3.5244C0.441801 3.71789 0.279125 3.94775 0.16813 4.20081C0.0571348 4.45388 9.22281e-07 4.72517 8.74376e-07 4.99915C8.26471e-07 5.27313 0.0571347 5.54443 0.16813 5.79749C0.279125 6.05055 0.441801 6.28041 0.64684 6.4739L4.24445 9.87748C4.28551 9.91633 4.33425 9.94714 4.3879 9.96816C4.44154 9.98918 4.49904 10 4.5571 10C4.61516 10 4.67266 9.98918 4.7263 9.96816C4.77995 9.94714 4.82869 9.91633 4.86974 9.87748C4.9108 9.83864 4.94337 9.79253 4.96559 9.74178C4.98781 9.69103 4.99925 9.63663 4.99925 9.5817C4.99925 9.52677 4.98781 9.47237 4.96559 9.42162C4.94337 9.37087 4.9108 9.32476 4.86974 9.28592L1.27213 5.88233C1.02474 5.648 0.885788 5.33035 0.885788 4.99915C0.885789 4.66796 1.02474 4.3503 1.27213 4.11597L4.86975 0.712385C4.91102 0.673656 4.94378 0.627582 4.96613 0.576816C4.98849 0.52605 5 0.471598 5 0.416602C5 0.361607 4.98849 0.307156 4.96613 0.25639C4.94378 0.205624 4.91102 0.159548 4.86975 0.12082C4.8286 0.0822095 4.7798 0.0516614 4.72615 0.0309304C4.6725 0.0101985 4.61505 -0.000310091 4.5571 6.51883e-06Z" fill="black"/>
                    </svg>
                </span> 
            </div>
            
        </a>
        
        <a style="background-color: #E0E4FF" href="#" class="swiper-slide">
            <img src="{{asset('image/image10.png')}}" alt="">
            <div class="texts"><h4>20% بازگشت وجه</h4>
                <p>مراقبت و بهداشت پوست مو</p> 
                <span>مشاهده محصولات 
                    <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5571 6.51883e-06C4.49915 -0.000310111 4.4417 0.0101984 4.38805 0.0309303C4.3344 0.0516613 4.2856 0.0822094 4.24446 0.12082L0.64684 3.5244C0.441801 3.71789 0.279125 3.94775 0.16813 4.20081C0.0571348 4.45388 9.22281e-07 4.72517 8.74376e-07 4.99915C8.26471e-07 5.27313 0.0571347 5.54443 0.16813 5.79749C0.279125 6.05055 0.441801 6.28041 0.64684 6.4739L4.24445 9.87748C4.28551 9.91633 4.33425 9.94714 4.3879 9.96816C4.44154 9.98918 4.49904 10 4.5571 10C4.61516 10 4.67266 9.98918 4.7263 9.96816C4.77995 9.94714 4.82869 9.91633 4.86974 9.87748C4.9108 9.83864 4.94337 9.79253 4.96559 9.74178C4.98781 9.69103 4.99925 9.63663 4.99925 9.5817C4.99925 9.52677 4.98781 9.47237 4.96559 9.42162C4.94337 9.37087 4.9108 9.32476 4.86974 9.28592L1.27213 5.88233C1.02474 5.648 0.885788 5.33035 0.885788 4.99915C0.885789 4.66796 1.02474 4.3503 1.27213 4.11597L4.86975 0.712385C4.91102 0.673656 4.94378 0.627582 4.96613 0.576816C4.98849 0.52605 5 0.471598 5 0.416602C5 0.361607 4.98849 0.307156 4.96613 0.25639C4.94378 0.205624 4.91102 0.159548 4.86975 0.12082C4.8286 0.0822095 4.7798 0.0516614 4.72615 0.0309304C4.6725 0.0101985 4.61505 -0.000310091 4.5571 6.51883e-06Z" fill="black"/>
                    </svg>
                </span> 
            </div>
            
        </a>
        
        
    </div>

</div>

