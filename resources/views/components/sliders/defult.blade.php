
{{-- <link rel="stylesheet" href="{{asset('plugins/swiper/swiper-bundle.min.css')}}"> --}}
<div class="swiper mySwiper slider-container">
	<div class="swiper-wrapper">
		<div class="swiper-slide slide">
			<img src="{{ asset('image/1873-685-اسلایدر-سایت-های-تورک-c.jpg') }}" alt="Slide 1">
		</div>
		<div class="swiper-slide slide">
			<img src="{{ asset('image/1873-685.jpg') }}" alt="Slide 2">
		</div>
		<div class="swiper-slide slide">
			<img src="{{ asset('image/Nud2ge.jpg') }}" alt="Slide 3">
		</div>
	</div>

	<div class="nav-buttons">
		<div class="swiper-button-prev" id="prev">
			<img src="{{ asset('icons/ui/next-icon.svg') }}" alt="" />
		</div>
		<div class="swiper-button-next" id="next">
			<img style="scale: -1" src="{{ asset('icons/ui/next-icon.svg') }}" alt="" />
		</div>
	</div>

	<div class="swiper-pagination"></div>
</div>

<style>
	
	.slider-container {
		width: 100%;
		margin: auto;
		overflow: hidden;
		position: relative;
		border-radius: 20px;
		min-height: 100%;
		/* max-height:100% !important; */
		/* aspect-ratio: 16 / 9; */
	}
	
	.mySwiper .swiper-slide img {
		display: block;
		width: 100%;
		height: 100%;
		/* object-fit: cover; */
	}
	.mySwiper .swiper-wrapper{
		height: auto !important;
	}
    .nav-buttons {
		position: absolute;
		bottom: 20px;
		width: 68px;
		display: flex;
		justify-content: space-between;
		right: 20px;
		z-index: 2;
	}
    .nav-buttons div {
		background-color: rgb(255 255 255);
		border: solid 1px black;
		border-radius: 50%;
		cursor: pointer;
		width: 30px;
		height: 30px;
		display: flex;
		align-items: center;
		justify-content: center;
	}
    .nav-buttons div img {
		cursor: pointer;
	}
	.swiper-button-next::after,
	.swiper-button-prev::after {
		display: none;
	}
	.mySwiper .swiper-pagination-bullet {
		width: 10px ;
		height: 10px ;
		background-color: black !important;
		border-radius: 50% !important;
		transition: all 0.3s ease !important;
	}
	.mySwiper .swiper-pagination-bullet-active {
		width: 30px ;
		height: 10px ;
		border-radius: 20px !important;
		background-color: #e3b000 !important;
	}
	.mySwiper .swiper-button-next,
	.mySwiper .swiper-rtl .swiper-button-prev {
		bottom: 10% !important;
		top: unset;
	}
	.swiper-button-prev,
	.swiper-rtl .swiper-button-next {
		left: unset;
		right: 60px;
		bottom: 10%;
		top: unset;
	}

	@media (max-width: 1024px) {
            .slider-container{
                border-radius: 0;
                
            }
            .nav-buttons{
                display: none;
                
            }
			.swiper-pagination-bullet {
		        width: 8px;
		        height: 8px;
				margin: 0 3px;
		    }
		
		    .swiper-pagination-bullet-active {
		        width: 30px;
		        height: 8px;
		    }
        }
        @media( max-width: 519px){
            .slide{

                height: 190px;
            }
            .slide img{
                height: 100%;
            }
			.swiper-pagination-bullet {
		        width: 6px;
		        height: 6px;
				margin: 0 0.5px;
		    }

    		.swiper-pagination-bullet-active {
    		    width: 14px;
    		    height: 6px;
    		}
        }
</style>



{{-- <script src="{{asset('plugins/swiper/swiper-bundle.min.js')}}"></script> --}}
<script>
	var swiper = new Swiper(".mySwiper", {
		loop: true,
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
</script>

