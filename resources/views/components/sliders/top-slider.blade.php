
    <style>
    
        .slider-container {
            width:100%;
            margin: auto;
            overflow: hidden;
            position: relative;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            min-height: 100%;
        }
        
        .slider {
            display: grid;
            overflow: hidden;
            width: 100%;
            
        }
        
        .slide {
            
            min-width: 100%;
            /* transition: opacity 0.3s ease-in-out; */
            /* position: absolute; */
            height: 100%;
            grid-column: 1;
            grid-row: 1;
            transition: transform 0.5s ease;
        }
        .focus-slide{
            z-index: 2;
            transform: translateX(0%)
        }
        .right-slide{
            z-index: 1;
            transform: translateX(100%)

        }
        .left-slide{
            z-index: 1;
            transform: translateX(-100%)
        }
        .slide img {
            width: 100%;
            display: block;
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
        
        .nav-buttons button {
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
        .nav-buttons button img{
            cursor: pointer;
        }
        
        .indicators {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        
        .indicator {
            width: 12px;
            height: 12px;
            background-color: lightgray;
            border-radius: 50%;
            margin: 5px;
            cursor: pointer;
        }
        
        .indicator.active {
            background-color: gray;
        }
        @media (max-width: 1024px) {
            .slider-container{
                border-radius: 0;
                
            }
            .nav-buttons{
                display: none;
                
            }
        }
        @media( max-width: 519px){
            .slide{

                height: 190px;
            }
            .slide img{
                height: 100%;
            }
        }
    </style>

    <div class="slider-container">
        <div class="slider">
            <div class="slide" data-index="0"><img src="{{asset('image/1873-685-اسلایدر-سایت-های-تورک-c.jpg')}}" alt="Slide 1"></div>
            <div class="slide" data-index="1"><img src="{{asset('image/1873-685.jpg')}}" alt="Slide 2"></div>
            <div class="slide" data-index="2"><img src="{{asset('image/Nud2ge.jpg')}}" alt="Slide 3"></div>
        </div>
        <div class="nav-buttons">
            <button id="prev"><img src="{{asset('icons/ui/next-icon.svg')}}" alt=""></button>
            <button id="next"><img style="scale: -1" src="{{asset('icons/ui/next-icon.svg')}}" alt=""></button>
        </div>
    </div>
    <div class="indicators"></div>
    
    <script>
document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');

    let indexes = Array.from(slides, (_, i) => i); // [0,1,2]

    function nextSlide() {
        
        indexes.unshift(indexes.pop()); // آخرین مقدار میره اول
        updateClasses();
    }

    function prevSlide() {
        
        indexes.push(indexes.shift()); // اولین مقدار میره آخر
        updateClasses();
    }

    function updateClasses() {
        slides.forEach(slide => {
            slide.classList.remove('focus-slide', 'right-slide', 'left-slide');
        });

        let focusIndex = indexes[0];
        let focusSlide = document.querySelector(`.slide[data-index="${focusIndex}"]`);
        if (focusSlide) focusSlide.classList.add('focus-slide');

        let rightIndexes = indexes.slice(1, -1);
        rightIndexes.forEach(index => {
            let rightSlide = document.querySelector(`.slide[data-index="${index}"]`);
            if (rightSlide) rightSlide.classList.add('right-slide');
        });

        let leftIndex = indexes[indexes.length - 1];
        let leftSlide = document.querySelector(`.slide[data-index="${leftIndex}"]`);
        if (leftSlide) leftSlide.classList.add('left-slide');
    }

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    updateClasses(); // مقداردهی اولیه
});

    </script>
