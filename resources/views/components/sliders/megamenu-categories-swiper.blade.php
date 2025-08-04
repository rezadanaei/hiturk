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
  
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

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
    aspect-ratio: 29 / 19;
    
  }
  .megamenu-categories-swiper .swiper-slide img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    background-repeat: no-repeat; 
    display: block;
  
    
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
  .megamenu-categories-swiper .swiper-pagination-bullet {	
		background-color: black !important;
		border-radius: 50% !important;
		transition: all 0.3s ease !important;
    width: 5px !important;
    height: 5px !important;
    margin: 0 2px !important;
	}
  .megamenu-categories-swiper .swiper-pagination-bullet-active {
		background-color: #e3b000 !important;
	}
  @media (max-width: 1024px) {
    .megamenu-categories-swiper .swiper-slide img{
      border-radius: 10px;
    }
    .megamenu-categories-swiper .swiper-button-prev,
    .megamenu-categories-swiper .swiper-button-next {
      display: none;
    }
      .megamenu-categories-swiper .swiper-pagination{
        display: block;
        position: relative !important;
        margin-top: 5px !important;
      }
  }
    
      
</style>






