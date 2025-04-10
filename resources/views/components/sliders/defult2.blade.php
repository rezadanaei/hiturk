<div class="swiper category-swiper myCategorySwiper category-slider-container">
	<div class="swiper-wrapper">
		<div class="swiper-slide category-slide">
			<img src="{{asset('image/image(2).jpg')}}" alt="Category 1">
		</div>
		<div class="swiper-slide category-slide">
			<img src="{{asset('image/image(2).jpg')}}" alt="Category 2">
		</div>
		<div class="swiper-slide category-slide">
			<img src="{{asset('image/image(2).jpg')}}" alt="Category 3">
		</div>
		<!-- اسلاید چهارم برای تست اضافه شده است -->
		<div class="swiper-slide category-slide">
			<img src="{{asset('image/image(2).jpg')}}" alt="Category 4">
		</div>
		<div class="swiper-slide category-slide">
			<img src="{{asset('image/image(2).jpg')}}" alt="Category 4">
		</div>
		<div class="swiper-slide category-slide">
			<img src="{{asset('image/image(2).jpg')}}" alt="Category 4">
		</div>
		<div class="swiper-slide category-slide">
			<img src="{{asset('image/image(2).jpg')}}" alt="Category 4">
		</div>
	</div>
</div>

<style>
	.category-slider-container {
		width: 100%;
		margin: auto;
		overflow: hidden;
		position: relative;
		border-radius: 20px;
		/* max-height: 70vh !important; */
		/* aspect-ratio: 16 / 9; */
	}
	
	.myCategorySwiper .swiper-slide img {
		display: block;
		width: 100%;
		height: 100%;
	}
	.myCategorySwiper .swiper-wrapper{
		height: auto !important;
	}
	
	.category-nav-buttons {
		position: absolute;
		bottom: 20px;
		width: 68px;
		display: flex;
		justify-content: space-between;
		right: 20px;
		z-index: 2;
	}
	
	.category-nav-buttons button {
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
	
	.category-nav-buttons button img {
		cursor: pointer;
	}
	
	.swiper-button-next::after,
	.swiper-button-prev::after {
		display: none;
	}
	
	.swiper-pagination-bullet {
		width: 10px;
		height: 10px;
		background-color: black !important;
		border-radius: 50% !important;
		transition: all 0.3s ease !important;
	}
	
	.swiper-pagination-bullet-active {
		width: 30px;
		height: 10px;
		border-radius: 20px !important;
		background-color: #e3b000 !important;
	}
	
	.swiper-button-next,
	.swiper-rtl .swiper-button-prev {
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
		.category-slider-container {
			border-radius: 0;
		}
		.category-nav-buttons {
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
	
	@media (max-width: 519px) {
		.category-slide {
			height: 190px;
		}
		.category-slide img {
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

<script>
	var categorySwiper = new Swiper(".myCategorySwiper", {
		slidesPerView: 4, 
		spaceBetween: 10,
		// loop: true,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		breakpoints: {
			// تنظیمات واکنش‌گرا
			320: {
				slidesPerView: 1,
				spaceBetween: 5,
			},
			520: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			1024: {
				slidesPerView: 4,
				spaceBetween: 10,
			},
		},
	});
</script>