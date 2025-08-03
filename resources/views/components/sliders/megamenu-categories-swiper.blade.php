<!-- Slider main container -->
<div class="swiper megamenu-categories-swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
            @foreach ($items as $item)
                <div class="swiper-slide">
                    <a href="{{ $item['link'] ?? '#' }}">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['alt'] ?? '' }}">
                    </a>
                </div>
            @endforeach
            
    </div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
  

</div>

<style>
  .megamenu-categories-swiper{
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    border-radius: 10px;
    /* direction: rtl; */

  }
  .megamenu-categories-swiper .swiper-wrapper{
    height: auto !important;
  }
  .megamenu-categories-swiper .swiper-slide{


  }
    .megamenu-categories-swiper .swiper-slide img{
      width: 100%;
      height: 100%;
      object-fit: cover;
      background-repeat: no-repeat; 
      display: block;
      aspect-ratio: 29 / 19;
    }
    .megamenu-categories-swiper .swiper-button-prev,
    .megamenu-categories-swiper .swiper-button-next {
      width: 20px;         
      height: 20px;        
      background-color: rgba(255, 255, 255, 0.677); 
      color: black;        
      border-radius: 50%;  
      box-shadow: 0 0 5px rgba(0,0,0,0.1); 
      position: absolute;
      top: 50% !important;
      transform: translateY(50%) !important;
    }

    /* آیکون داخل دکمه */
    .megamenu-categories-swiper .swiper-button-prev::after,
    .megamenu-categories-swiper .swiper-button-next::after {
      font-size: 10px; 
      color: black;   
    }
      
</style>






