
<!-- Slider main container -->
<div class="swiper-categories">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><a href="#" class="categories-link"><div>بچگانه</div><img src="{{asset('image/image(2).jpg')}}" alt=""></a></div>
      
      <div class="swiper-slide"><a href="#" class="categories-link"><div>بچگانه</div><img src="{{asset('image/image(2).jpg')}}" alt=""></a></div>
      
      <div class="swiper-slide"><a href="#" class="categories-link"><div>بچگانه</div><img src="{{asset('image/image(2).jpg')}}" alt=""></a></div>
      
      <div class="swiper-slide"><a href="#" class="categories-link"><div>بچگانه</div><img src="{{asset('image/image(2).jpg')}}" alt=""></a></div>
      
      <div class="swiper-slide"><a href="#" class="categories-link"><div>بچگانه</div><img src="{{asset('image/image(2).jpg')}}" alt=""></a></div>
      
      <div class="swiper-slide"><a href="#" class="categories-link"><div>بچگانه</div><img src="{{asset('image/image(2).jpg')}}" alt=""></a></div>
      <div class="swiper-slide"><a href="#" class="categories-link"><div>بچگانه</div><img src="{{asset('image/image(2).jpg')}}" alt=""></a></div>
      <div class="swiper-slide"><a href="#" class="categories-link"><div>بچگانه</div><img src="{{asset('image/image(2).jpg')}}" alt=""></a></div>
      
      
      
    </div>
    
  </div>
<style>
    .swiper-categories{
        width: 100%;
		margin: auto;
		overflow: hidden;
		position: relative;
		min-height: unset !important;
    }
    
    .swiper-categories .swiper-slide a{
		overflow: hidden;
        aspect-ratio: 1 / 1;
        width: 100%;
        display: inline-block;
        border-radius: 15%;
        position: relative;
        

		
	}
    .swiper-categories .swiper-slide a::after{
        content: "";
        position: absolute;
        width: 15px;
        height: 15px;
        z-index: 3;
        bottom: -1px;
        left: 74%;
        background-image: url('../../icons/ui/after.svg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat
    }
    .swiper-categories .swiper-slide a::before{
        content: "";
        position: absolute;
        transform: rotate(-90deg) translateY(-100%);
        width: 15px;
        height: 15px;
        z-index: 3;
        bottom: -1px;
        left: 26%;
        background-image: url('../../icons/ui/after.svg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .swiper-categories .swiper-slide a div{
        width: 50%;
        height: 20%;
        background-color: #fff;
        position: absolute;
        bottom: 0px;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 10px 10px 0px 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'IRANSansBold';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 21px;
        color: #000000;

    }
    .swiper-categories .swiper-slide a img {
		display: block;
		width: 110%;
        object-fit: cover;
        transition: all 0.3s ;
		
	}
    .swiper-categories .swiper-slide:hover a img {

		width: 100%;
		

		
	}
    .swiper-categories .swiper-wrapper{
		height: auto !important;
        /* width: auto !important; */
	}
    .swiper-categories .categories-link{
        
        overflow: hidden;
    }
    @media (max-width: 1024px) {
      .swiper-categories .swiper-slide{
        min-width: 100px;
        min-height: 100px
      }
      .swiper-categories .swiper-slide:first-child{
        margin-right: 10px;

      }
      .swiper-categories .swiper-slide a::after, .swiper-categories .swiper-slide a::before{
        background-image: url('../../icons/ui/after-mobile.svg');
      }
      .swiper-categories .swiper-slide a div{
        background-color: #F6F6F6;
        font-size: 13px;
        font-weight: 500;
      }
      
    }
    @media(max-width: 720px){
      .swiper-categories .swiper-slide a::before, .swiper-categories .swiper-slide a::after{
        width: 10px;
        height: 10px;
      }
      .swiper-categories .swiper-slide a div{
          
          font-style: normal;
          font-weight: 400;
          font-size: 10px;
          line-height: 15px;
      }
      
    }
</style>
  
