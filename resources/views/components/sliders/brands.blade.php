<!-- Slider main container -->
<div class="brands-swiper-parent">
    <div class="brands-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
            <div class="swiper-slide">
                <a href="#"
                    ><img src="{{ asset('image/image(5).png') }}" alt=""
                /></a>
            </div>
        </div>


        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev">
            <img src="{{ asset('icons/ui/next-icon.svg') }}" alt="" />
        </div>
        <div class="swiper-button-next">
            <img
                style="scale: -1"
                src="{{ asset('icons/ui/next-icon.svg') }}"
                alt=""
            />
        </div>
    </div>
</div>
<style>
    .brands-swiper-parent {
        width: 100%;
        position: relative !important;
        max-width: 1400px !important;
        margin: auto;
        padding: 0 50px;
        overflow: hidden;
    }
    .brands-swiper {
        width: 100% !important;

        overflow: hidden !important;
    }

    .brands-swiper .swiper-wrapper {
        height: auto !important;
    }
    .brands-swiper .swiper-button-prev,
    .brands-swiper .swiper-button-next {
        position: absolute !important;
        z-index: 10 !important;
        top: unset !important;
        bottom: 50% !important;
        display: inline-flex !important ;
        transform: translate(-50%, 50%);
        align-items: center;
        justify-content: center;
    }
    .brands-swiper .swiper-button-next::after, .brands-swiper .swiper-button-prev::after{
        display: none;
    }
    .brands-swiper .swiper-button-next {
        left: 0px !important;
        right: unset !important;
        transform: translateX(50%) translateY(50%);
    }
    .brands-swiper .swiper-button-prev {
        right: 0px !important;
        left: unset !important;
    }
    .brands-swiper .swiper-slide {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .brands-swiper .swiper-slide a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        /* width: 100%;
        height: 100%; */
    }
    .brands-swiper .swiper-slide a img {
        width: 6vmax;
        height: auto;
        max-width: 80px;
    }
    @media (max-width: 1024px) {
        .brands-swiper-parent {
            width: 100vw !important;
            padding: 0;
        }
        .brands-swiper .swiper-slide a {
            background-color: white;
            padding: 10px;
            border-radius: 20px;
            aspect-ratio: 1 / 1 !important;
        }
        .brands-swiper .swiper-button-prev,
        .brands-swiper .swiper-button-next{
            display: none !important;
        }
    }
</style>

