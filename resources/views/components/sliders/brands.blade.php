<!-- Slider main container -->
<div class="swiper-brands">
    <span class="title">برترین برند ها<span>ی</span><span style="color: #e3b000;">&nbsp;مد و لباس</span><span>&nbsp;ترک</span></span>
    <!-- Additional required wrapper -->
    <a class="show-all" href="#"><span>مشاهده همه</span><img src="{{asset('icons/ui/next-icon-mobile.svg')}}" alt="next"></a>
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      <div class="swiper-slide"><img src="{{asset('image/image(5).png')}}" alt="logo brand"></div>
      
    </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"><img style="scale: -1;" src="{{asset('icons/ui/next-icon.svg')}}" alt="prev"></div>
    <div class="swiper-button-next"><img src="{{asset('icons/ui/next-icon.svg')}}" alt="next"></div>

</div>
<style>
    .swiper-brands{
        max-width: 1500px;
        margin: auto;
        margin-top: 10px;
        margin-bottom : 10px;
        position: relative;
        box-sizing: border-box;
        padding: 40px;
        overflow: hidden;
        padding-top : 70px;
        padding-bottom : 70px;
         

    }
    .swiper-brands .title{
        display: inline-block;
        font-family: 'IRANSans';
        font-style: normal;
        font-weight: 500;
        font-size: 32px;
        line-height: 48px;
        z-index: 3;
        text-align: center;

        color: #000000;
        margin-bottom: 20px;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top:0px;
    

    }
    .swiper-brands .show-all{
        font-family: 'IRANSans';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        /* identical to box height */
        text-align: center;

        /* Main Color */
        color: #E3B000;

        /* Rectangle 73 */

        box-sizing: border-box;

        position: absolute;
        width: 200px;
        height: 45px;
        border: 1px solid rgba(96, 96, 96,0.5);
        border-radius: 36px;
        bottom: 0;
        transform: translateX(-50%); 
        left: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;

    }
    .swiper-brands .show-all img{
            display: none;
        }
    .swiper-brands .title span{
        display: inline-block;
    }
    .swiper-brands .swiper-wrapper{
        height: auto !important;


    }
    .swiper-brands .swiper-slide img{
        width: 80px;
    }
    .swiper-brands .swiper-button-prev,
    .swiper-brands .swiper-button-next {
        position: absolute;
        top: 50%;
        transform: translateY(-30%);
        z-index: 10;
        box-shadow: inset 0 0 40px rgba(96, 96, 96, 0.05);
        height: 100%;
    }
    .swiper-brands .swiper-button-prev img,
    .swiper-brands .swiper-button-next img{
        width: 20px;
    }
    
    .swiper-brands .swiper-button-prev {
        left: -40px !important;
        right: auto !important;
    }
    
    .swiper-brands .swiper-button-next {
        right: 40px !important;
        left: auto !important;
    }
    @media (max-width: 1024px) {
        .swiper-brands{
            width: 100vw;
            padding-top: 35px;
            padding-bottom: 35px;

        }
        .swiper-brands .title{
            /* برترین برند ها */

            position: absolute;

            right: 10px;
            top :0px;

            font-size: 14px;
            line-height: 21px;

            text-align: right;

            color: #000000;
            font-size: clamp(1rem, 3vw, 1.8rem);
            transform: translateX(-50px);


        }
        .swiper-brands .title span{
            display: none;

        }
        .swiper-brands .show-all{
            all: unset;
            position: absolute;
            font-size: 12px;
            line-height: 18px;
            text-align: center;
            color: #E3B000;
            left: -20px;
            top: 0;
            bottom: auto;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;


        }
        .swiper-brands .show-all img{
            display: inline-block;
        }
        .swiper-brands .swiper-button-prev,
    .swiper-brands .swiper-button-next{
        display: none;
    }
    }
    .swiper-brands .swiper-slide img, .swiper-brands .swiper-slide{
        min-width: 75px !important;
        
    }
</style>
<script>
  var categorySwiper = new Swiper(".swiper-brands", {		
          loop: true,		
          slidesPerView: 11, 		
          spaceBetween: 20,
          breakpoints: {
            0: { slidesPerView: 3.3, spaceBetween: 8 }, 
            640: { slidesPerView: 8, spaceBetween: 8 }, 
            1024: { slidesPerView: 11, spaceBetween: 15 }, 
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

</script>