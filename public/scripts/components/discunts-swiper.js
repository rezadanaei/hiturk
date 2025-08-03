document
    .querySelectorAll(".swiper-discounts")
    .forEach(function (swiperContainer) {
        // بررسی وجود کلاس swiper-products
        const hasProductsClass =
            swiperContainer.classList.contains("swiper-products");

        // تنظیمات اولیه Swiper اصلی
        const swiperOptions = {
            slidesPerView: 5,
            spaceBetween: 20,
            nested: false,
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 3.2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 5,
                },
            },
        };

        // اضافه کردن دکمه‌های ناوبری فقط در صورتی که کلاس swiper-products وجود داشته باشه
        if (hasProductsClass) {
            swiperOptions.navigation = {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            };
        }

        // سوییپر اصلی
        new Swiper(swiperContainer, swiperOptions);

        // سوییپر تو در تو فقط داخل همین container
        const nestedWrappers =
            swiperContainer.querySelectorAll(".nested-swiper");

        nestedWrappers.forEach((wrapper) => {
            const swiperEl = wrapper.querySelector(".test-swiper");

            if (!swiperEl) return;

            const nesteSlides = swiperEl.querySelectorAll(".swiper-slide");
            const pagination = swiperEl.querySelector(".swiper-pagination");

            if (!nesteSlides.length || !pagination) return;

            // تنظیم سایز در دسکتاپ
            if (window.innerWidth >= 1024) {
                const firstImage = swiperEl.querySelector("img");
                if (firstImage) {
                    const imgWidth = firstImage.clientWidth;
                    swiperEl.style.width = imgWidth + "px";
                }
            }

            const totalSlides = nesteSlides.length;
            const middleSlideIndex = Math.floor(totalSlides / 2);

            const swiper = new Swiper(swiperEl, {
                loop: false,
                slidesPerView: 1,
                nested: true,
                touchStartPreventDefault: false,
                watchOverflow: true,
                allowTouchMove: true,
                pagination: {
                    el: pagination,
                    clickable: true,
                },
                initialSlide: middleSlideIndex,
                breakpoints: {
                    1024: {
                        allowTouchMove: false,
                        spaceBetween: 0,
                        speed: 800,
                    },
                },
            });

            // interactions فقط در دسکتاپ
            if (window.innerWidth >= 1024) {
                swiperEl.addEventListener("mousemove", (e) => {
                    const rect = swiperEl.getBoundingClientRect();
                    const containerX = e.clientX - rect.left;
                    const totalWidth = rect.width;

                    const segmentWidth = totalWidth / totalSlides;
                    let index = Math.floor(containerX / segmentWidth);
                    index = Math.max(0, Math.min(totalSlides - 1, index));

                    if (swiper.realIndex !== index) {
                        swiper.slideTo(index);
                    }
                });

                const previewImages =
                    wrapper.querySelectorAll(".image-preview img");
                const mainImages = wrapper.querySelectorAll(
                    ".main-image-display .main-image"
                );
                const mainImagesDisplay = wrapper.querySelector(
                    ".main-image-display"
                );

                previewImages.forEach((previewImg, index) => {
                    previewImg.addEventListener("mouseover", () => {
                        mainImagesDisplay.style.display = "block";
                        mainImages.forEach(
                            (img) => (img.style.display = "none")
                        );
                        if (mainImages[index]) {
                            mainImages[index].style.display = "block";
                        }
                    });

                    previewImg.addEventListener("mouseout", () => {
                        mainImages.forEach(
                            (img) => (img.style.display = "none")
                        );
                        mainImagesDisplay.style.display = "none";
                    });
                });
            }
        });
    });
