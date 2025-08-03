document.addEventListener("DOMContentLoaded", function () {
    // Helper function for Swiper initialization with unique class
    function initSwiper(selector, getOptions) {
        document.querySelectorAll(selector).forEach((el, index) => {
            const uniqueClass = selector.replace(".", "") + "-" + index;
            el.classList.add(uniqueClass);
            const options = getOptions(el, index, uniqueClass);
            new Swiper(`.${uniqueClass}`, options);
        });
    }

    // Baners Swiper
    initSwiper(".baners-swiper", () => ({
        slidesPerView: 1.4,
        spaceBetween: 15,
        breakpoints: {
            767: { slidesPerView: 2 },
            1024: { slidesPerView: 2.8 },
        },
    }));

    // Brands Swiper
    initSwiper(".brands-swiper", (el) => ({
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: { slidesPerView: 1, spaceBetween: 10 },
            200: { slidesPerView: 2, spaceBetween: 10 },
            250: { slidesPerView: 3, spaceBetween: 10 },
            320: { slidesPerView: 4, spaceBetween: 10 },
            450: { slidesPerView: 6, spaceBetween: 10 },
            640: { slidesPerView: 8, spaceBetween: 15 },
            768: { slidesPerView: 8, spaceBetween: 20 },
            1024: { slidesPerView: 10, spaceBetween: 25 },
            1280: { slidesPerView: 10, spaceBetween: 30 },
        },
        navigation: {
            nextEl: el.querySelector(".swiper-button-next"),
            prevEl: el.querySelector(".swiper-button-prev"),
        },
    }));

    // Categories Swiper
    initSwiper(".swiper-categories", () => ({
        slidesPerView: 6,
        spaceBetween: 15,
        breakpoints: {
            0: { slidesPerView: 3.3, spaceBetween: 8 },
            640: { slidesPerView: 5, spaceBetween: 8 },
            1024: { slidesPerView: 6, spaceBetween: 15 },
        },
    }));

    // My Swiper
    initSwiper(".mySwiper", (el) => ({
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: el.querySelector(".swiper-button-next"),
            prevEl: el.querySelector(".swiper-button-prev"),
        },
        pagination: {
            el: el.querySelector(".swiper-pagination"),
            clickable: true,
        },
    }));

    // Discounts Swiper with Nested Swipers
    document
        .querySelectorAll(".swiper-discounts")
        .forEach((swiperContainer) => {
            const hasProductsClass =
                swiperContainer.classList.contains("swiper-products");

            const swiperOptions = {
                slidesPerView: 5,
                spaceBetween: 20,
                nested: false,
                breakpoints: {
                    0: { slidesPerView: 2, spaceBetween: 10 },
                    640: { slidesPerView: 3.2, spaceBetween: 10 },
                    1024: { slidesPerView: 5 },
                },
            };

            if (hasProductsClass) {
                swiperOptions.navigation = {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                };
            }

            new Swiper(swiperContainer, swiperOptions);

            swiperContainer
                .querySelectorAll(".nested-swiper")
                .forEach((wrapper) => {
                    const swiperEl = wrapper.querySelector(".test-swiper");
                    if (!swiperEl) return;

                    const slides = swiperEl.querySelectorAll(".swiper-slide");
                    const pagination =
                        swiperEl.querySelector(".swiper-pagination");
                    if (!slides.length || !pagination) return;

                    if (window.innerWidth >= 1024) {
                        const firstImg = swiperEl.querySelector("img");
                        if (firstImg) {
                            swiperEl.style.width = firstImg.clientWidth + "px";
                        }
                    }

                    const swiper = new Swiper(swiperEl, {
                        loop: false,
                        slidesPerView: 1,
                        nested: true,
                        touchStartPreventDefault: false,
                        watchOverflow: true,
                        allowTouchMove: true,
                        pagination: { el: pagination, clickable: true },
                        initialSlide: Math.floor(slides.length / 2),
                        breakpoints: {
                            1024: {
                                allowTouchMove: false,
                                spaceBetween: 0,
                                speed: 800,
                            },
                        },
                    });

                    if (window.innerWidth >= 1024) {
                        swiperEl.addEventListener("mousemove", (e) => {
                            const rect = swiperEl.getBoundingClientRect();
                            const index = Math.floor(
                                (e.clientX - rect.left) /
                                    (rect.width / slides.length)
                            );
                            if (swiper.realIndex !== index)
                                swiper.slideTo(index);
                        });

                        const previews =
                            wrapper.querySelectorAll(".image-preview img");
                        const mainImgs = wrapper.querySelectorAll(
                            ".main-image-display .main-image"
                        );
                        const mainDisplay = wrapper.querySelector(
                            ".main-image-display"
                        );

                        previews.forEach((previewImg, i) => {
                            previewImg.addEventListener("mouseover", () => {
                                mainDisplay.style.display = "block";
                                mainImgs.forEach(
                                    (img) => (img.style.display = "none")
                                );
                                if (mainImgs[i])
                                    mainImgs[i].style.display = "block";
                            });

                            previewImg.addEventListener("mouseout", () => {
                                mainImgs.forEach(
                                    (img) => (img.style.display = "none")
                                );
                                mainDisplay.style.display = "none";
                            });
                        });
                    }
                });
        });

    // Megamenu Categories Swiper
    initSwiper(".megamenu-categories-swiper", (el) => ({
        loop: true,
        navigation: {
            nextEl: el.querySelector(".swiper-button-next"),
            prevEl: el.querySelector(".swiper-button-prev"),
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    }));
});
