<!-- Slider main container -->
<div class="swiper-discounts swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      @foreach (range(1, 10) as $slide )
          <div class="swiper-slide">

            <a href="#" class="slide-link offer">5%</a>
            <div class="nested">
                @include('components.sliders.nested-swiper')
            </div>
            <a href="#" class="slide-link">
                <samp class="swiper-discounts-title">كفش مجلسي زنانه رنگ مشکی...</samp>
                <del class="old-price">250,000 تومان</del>
                <samp class="new-price">4.458.700 تومان</samp>
            </a>
            
        </div>
      @endforeach
      
      
    </div>
    
  </div>


<style>
    
    .swiper-discounts{
        width: 100% !important; 
    }
    .swiper-discounts .swiper-wrapper{
        height: auto !important;
    }
    
    .swiper-discounts .swiper-button-prev::after,
    .swiper-discounts.swiper-button-next::after {
        display: none;
    }
    .swiper-discounts .swiper-button-prev,
    .swiper-discounts .swiper-button-next {
        display: none !important;
    }
    
    
    .swiper-discounts .swiper-slide{
        background: none !important;
        border-radius: 12px;
        background-color: #F7F7F7 !important;
        box-sizing: border-box;
        min-width: 150px;
        box-sizing: border-box;
        padding: 20px 20px 0px 20px !important; 
    }
    .swiper-discounts .slide-link{
        text-decoration: none !important;
        
    }
    .swiper-discounts .swiper-wrapper .swiper-slide .nested{
        border-radius: 15px;
        overflow: hidden;
        box-sizing: border-box;
        
    }
    .swiper-discounts .swiper-slide .offer{
        position: absolute;
        top: 50px;
        left: 15px !important;
        background-color: #F7F7F7 !important;
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
        color: black !important;
        display: flex;
        align-items: center;
        justify-content: center;


    }
    .swiper-discounts .swiper-wrapper .swiper-slide .slide-link .swiper-discounts-title , .swiper-discounts .swiper-wrapper .swiper-slide .slide-link .old-price, .swiper-discounts .swiper-wrapper .swiper-slide .slide-link .new-price{
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
    @media (max-width:420px){
        .swiper-discounts .swiper-slide{
            padding: 15px 15px 0px 15px !important; 
        }
    }

</style>




{{-- <!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div> --}}