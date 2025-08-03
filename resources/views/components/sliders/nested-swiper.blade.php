
  <style>
    .nested-swiper .test-swiper {
        display: block;
        overflow: hidden;
        
    }

    .nested-swiper .test-swiper .swiper-wrapper {
        height: auto !important;
        gap: 0 !important;
    }
    .nested-swiper .test-swiper .swiper-slide {
        width: 100% !important;
        min-width: 100px !important;
        min-height: 100px !important;
        aspect-ratio: 1 / 1.2  !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    .nested-swiper .test-swiper .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .nested-swiper .test-swiper .swiper-pagination {
        position: absolute !important;
        bottom: 5px;
        left: 50% !important;
        transform: translateX(-50%) !important;
        background-color: rgba(0, 0, 0, 0.5) !important;
        border-radius: 10px !important;
        width: auto !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 3px !important;
        padding: 3px !important;
        box-sizing: border-box !important;
    }
    .nested-swiper .test-swiper .swiper-pagination-bullet {
        width: 5px;
        height: 5px;
        background-color: rgb(255, 255, 255) !important;
        border-radius: 50% !important;
        transition: all 0.3s ease !important;
        margin: 0 !important;
    }
    .nested-swiper .test-swiper .swiper-pagination-bullet-active {
        width: 5px;
        height: 5px;
        border-radius: 20px !important;
        background-color: #e3b000 !important;
    }
    .nested-swiper {
        position: relative;
        overflow: hidden;
        width: 100%;
    }
    .nested-swiper .clothes-gallery {
        position: absolute;
        bottom: 5px;
        right: 15px;
        cursor: pointer;
    }
    .nested-swiper .clother-card {
        background-color: white;
        position: relative;
        padding: 5px;
        display: flex;
        align-items: center;
        border-radius: 50px;
        box-sizing: border-box;
        width: 45px;
        z-index: 5;
    }
    .nested-swiper .quantity {
        font-family: "VazirFD";
        font-size: 15px;
        position: relative;
        z-index: 3;
        margin: 0 4px;
        text-decoration: none;
        color: black;
    }
    .nested-swiper .circle {
        position: absolute;
        border-radius: 50%;
        width: 15px;
        height: 15px;
    }
    .nested-swiper .circle1 {
        left: 9px;
        top: 50%;
        transform: translateY(-50%);
        background: linear-gradient(to right, #003cff, #c1e5ff);
        z-index: 1;
    }
    .nested-swiper .circle2 {
        left: 5px;
        top: 50%;
        transform: translateY(-50%);
        background: linear-gradient(to right, #ffb700, #fff5db);
        z-index: 2;
    }
    .nested-swiper .image-preview {
        position: absolute;
        bottom: -130px;
        transition: bottom 0.3s ease;
        height: 120px;
        width: 100%;
        border-radius: 10px 10px 0px 0px;
        background-color: white;
        z-index: 5;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        box-shadow: rgba(0, 0, 0, 0.318) 0px 0px 7px 1px;
    }
    .nested-swiper .clother-card:hover .image-preview {
        bottom: 0%;
    }
    .nested-swiper .image-preview img {
        height: 100px !important;
        border-radius: 2px;
        box-sizing: border-box;
    }
    .nested-swiper .image-preview img:hover {
        border: #e3b000 solid 1px;
    }
    .nested-swiper .clothes-gallery:hover:has(+ .image-preview) + .image-preview,
    .nested-swiper .image-preview:hover {
        bottom: 0px;
    }
    .nested-swiper .main-image-display {
        position: absolute;
        z-index: 4;
        width: 100%;
        height: 100%;
        bottom: 0;
        display: none;
    }
    .nested-swiper .main-image {
        position: absolute;
        width: 100%;
        height: 100%;
        display: none;
        object-fit: cover;
    }
    @media (max-width: 1024px){
        .swiper-discounts .swiper-wrapper .swiper-slide .offer {
            top: 40px !important;
            font-size: 14px !important;
            line-height: 30px !important;
        }
        .nested-swiper .circle {
          width: 12px;
          height: 12px;
        }
        .nested-swiper .clother-card{
            width: 40px;
            padding:3px 5px;
        }
        .nested-swiper .image-preview{
            display: none !important;
        }
        
    }
    
  </style>
<div class="nested-swiper">
    <div class="test-swiper swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('image/image(2).jpg') }}" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('image/image(2).jpg') }}" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('image/image(2).jpg') }}" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('image/image(2).jpg') }}" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('image/image(2).jpg') }}" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('image/image(2).jpg') }}" alt="" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="clothes-gallery">
        <div class="clother-card">
            <span class="quantity">2</span><span class="circle circle1"></span
            ><span class="circle circle2"></span>
        </div>
    </div>
</div>
  
