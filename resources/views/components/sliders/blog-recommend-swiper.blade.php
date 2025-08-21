<style>
    .blogRecommendSwiper .swiper-wrapper {
        box-sizing: border-box;
        height: auto;
    }
    .blogRecommendSwiper .swiper-slide {
        background-color: white;
        height: min-content;
        position: relative;
        border: 1px solid #EBEBED;
        border-radius: 12px;
        margin-bottom: 24px;
    }
    .blogRecommendSwiper .swiper-slide img {
        width: 100%;
        height: 210px;
        border-radius: 12px 12px 0 0;
        object-fit: cover;
    }
    .blogRecommendSwiper .swiper-slide div {
        padding: 0 24px 10px 24px;
    }
    .blogRecommendSwiper .swiper-slide div a {
        color: black;
        text-decoration: none;
        font-size: 20px;
    }
    .blogRecommendSwiper .swiper-slide div p {
        opacity: 0.7;
        font-family: 'IRANSans';
        font-style: normal;
        font-weight: 400;
        line-height: 20px; 
        margin-top: 10px;
    }
    .blogRecommendSwiper .swiper-slide h4 {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-family: 'IRANSans';
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 24px;
        margin-top: 10px; 
    }

    .blogRecommendSwiper .swiper-slide .bmm-category {
        position: absolute;
        top: 32px;
        right: 16px;
        padding: 0;
        z-index: 1;
    }
    .blogRecommendSwiper .swiper-slide .bmm-category a {
        background-color: var(--main);
        color: white;
        padding: 8px 16px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        line-height: 0;
        transition: all 0.2s ease;
    }

    .blogRecommendSwiper .swiper-pagination-bullet-active {
        background-color: var(--main);
    }
    .blogRecommendSwiper .swiper-pagination {
        margin-bottom: -8px !important;
    }
</style>

<div class="swiper blogRecommendSwiper">
    <div class="swiper-wrapper">
        <!-- Swiper Recommend item -->
        @foreach (range(1, 10) as $items )
            <div class="swiper-slide">
                <div class="bmm-category"><a href="#1">دسته بندی</a></div>
                <a href="#"><img src="{{asset('image/img.png')}}" alt="عنوان نوشته"></a>
                <div>
                    <a href="#"><h4>عنوان نوشته</h4></a>
                    <p>متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای </p>
                    <p>1403/02/15</p>
                </div>
            </div>
        @endforeach
        
        <!-- Swiper Recommend item end -->
    </div>
    <div class="swiper-pagination"></div>
</div>