<style>
    @font-face {
        src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/polar.otf');
        /*font-family: 'Polar';*/
    }
    .slider-container {
        position: relative;
        height: 82vh;
        user-select: none;
        cursor: grab;
    }
    .slider-control {
        z-index: 2;
        position: absolute;
        top: 0;
        width: 12%;
        height: 100%;
        transition: opacity 0.3s;
        will-change: opacity;
        opacity: 0;
    }
    .slider-control.inactive:hover {
        cursor: auto;
    }
    .slider-control:not(.inactive):hover {
        opacity: 1;
        cursor: pointer;
    }
    .slider-control.left {
        left: 0;
        background: linear-gradient(to right, rgba(0, 0, 0, 0.18) 0%, rgba(0, 0, 0, 0) 100%);
    }
    .slider-control.right {
        right: 0;
        background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.18) 100%);
    }
    .slider-pagi {
        position: absolute;
        z-index: 3;
        left: 50%;
        bottom: 2rem;
        transform: translateX(-50%);
        font-size: 0;
        list-style-type: none;
    }
    .slider-pagi__elem {
        position: relative;
        display: inline-block;
        vertical-align: top;
        width: 2rem;
        height: 2rem;
        margin: 0.5rem 0.5rem;
        border-radius: 50%;
        border: 2px solid #fff;
        cursor: pointer;
    }
    .slider-pagi__elem:before {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        width: 1.2rem;
        height: 1.2rem;
        background: #fff;
        border-radius: 50%;
        transition: transform 0.3s;
        transform: translate(-50%, -50%) scale(0);
    }
    .slider-pagi__elem.active:before, .slider-pagi__elem:hover:before {
        transform: translate(-50%, -50%) scale(1);
    }
    .slider {
        z-index: 1;
        position: relative;
        height: 100%;
    }
    .slider.animating {
        transition: transform 0.5s;
        will-change: transform;
    }
    .slider.animating .slide__bg {
        transition: transform 0.5s;
        will-change: transform;
    }
    .slide {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    .slide.active .slide__overlay, .slide.active .slide__text {
        opacity: 1;
        transform: translateX(0);
    }
    .slide__bg {
        position: absolute;
        top: 0;
        left: -50%;
        width: 100%;
        height: 100%;
        background-size: cover;
        will-change: transform;
    }
    .slide:nth-child(1) {
        left: 0;
    }
    .slide:nth-child(1) .slide__bg {
        left: 0;
        background-color: #ff7171;
        background-image: url('{{asset($slider1->picture)}}');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .slide:nth-child(1) .slide__overlay-path {
        fill: #e99c7e;
    }
    @media (max-width: 991px) {
        .slide:nth-child(1) .slide__text {
            background-color: rgba(233, 156, 126, 0.8);
        }
    }
    .slide:nth-child(2) {
        left: 100%;
    }
    .slide:nth-child(2) .slide__bg {
        left: -50%;
        background-image: url('{{asset($slider2->picture)}}');
        background-color: #ffd58e;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .slide:nth-child(2) .slide__overlay-path {
        fill: #e1ccae;
    }
    @media (max-width: 991px) {
        .slide:nth-child(2) .slide__text {
            background-color: rgba(225, 204, 174, 0.8);
        }
    }
    .slide:nth-child(3) {
        left: 200%;
    }
    .slide:nth-child(3) .slide__bg {
        left: -100%;
        background-color: #66d3ff;
        background-image: url('{{asset($slider3->picture)}}');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .slide:nth-child(3) .slide__overlay-path {
        fill: #adc5cd;
    }
    @media (max-width: 991px) {
        .slide:nth-child(3) .slide__text {
            background-color: rgba(173, 197, 205, 0.8);
        }
        ..slide__text-heading {
            font-size: 25px;
        }
    }
    .slide:nth-child(4) {
        left: 300%;
    }
    /*.slide:nth-child(4) .slide__bg {*/
    /*    left: -150%;*/
    /*    background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/3d-slider-4.jpg');*/
    /*}*/
    .slide:nth-child(4) .slide__overlay-path {
        fill: #cbc6c3;
    }
    @media (max-width: 991px) {
        .slide:nth-child(4) .slide__text {
            background-color: rgba(203, 198, 195, 0.8);
        }
    }
    .slide__content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 82vh;
    }
    .slide__overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 100%;
        min-height: 810px;
        transition: transform 0.5s 0.5s, opacity 0.2s 0.5s;
        will-change: transform, opacity;
        transform: translate3d(-20%, 0, 0);
        opacity: 0;
    }
    @media (max-width: 991px) {
        .slide__overlay {
            display: none;
        }
    }
    .slide__overlay path {
        opacity: 0.8;
    }
    .slide__text {
        position: absolute;
        width: 25%;
        bottom: 15%;
        left: 12%;
        color: #fff;
        transition: transform 0.5s 0.8s, opacity 0.5s 0.8s;
        will-change: transform, opacity;
        transform: translateY(-50%);
        opacity: 0;
        text-align: right;
        direction: rtl;
    }
    @media (max-width: 991px) {
        .slide__text {
            left: 0;
            bottom: 0;
            width: 100%;
            height: 20rem;
            text-align: center;
            transform: translateY(50%);
            transition: transform 0.5s 0.5s, opacity 0.5s 0.5s;
            padding: 0 1rem;
            text-align: right;
            direction: rtl;
        }
    }
    .slide__text-heading {
        font-size: 2rem;
        margin-bottom: 2rem;
    }
    @media (max-width: 991px) {
        .slide__text-heading {
            line-height: 20rem;
            font-size: 3.5rem;
        }
    }
    .slide__text-desc {
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
    }
    @media (max-width: 991px) {
        .slide__text-desc {
            display: none;
        }
    }
    .slide__text-link {
        z-index: 5;
        display: inline-block;
        position: relative;
        padding: 0.5rem;
        cursor: pointer;
        font-size: 2.3rem;
        perspective: 1000px;
    }
    @media (max-width: 991px) {
        .slide__text-link {
            display: none;
        }
    }
    .slide__text-link:before {
        z-index: -1;
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        transform-origin: 50% 100%;
        transform: rotateX(-85deg);
        transition: transform 0.3s;
        will-change: transform;
    }
    .slide__text-link:hover:before {
        transform: rotateX(0);
    }

</style>
<div class="slider-container">
    <div class="slider-control left inactive"></div>
    <div class="slider-control right"></div>
    <ul class="slider-pagi"></ul>
    <div class="slider">
        <div class="slide slide-0 active">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">{{$slider1->header}}</h2>
                    <p class="slide__text-desc">{{$slider1->text}}</p>
                </div>
            </div>
        </div>
        <div class="slide slide-1 ">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading"> {{$slider2->header}}</h2>
                    <p class="slide__text-desc"> {{$slider2->text}}</p>
                    <a class="slide__text-link">دوره ها</a>
                </div>
            </div>
        </div>
        <div class="slide slide-2">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">{{$slider3->header}}</h2>
                    <p class="slide__text-desc">{{$slider3->header}}</p>
{{--                    <a class="slide__text-link">Project link</a>--}}
                </div>
            </div>
        </div>
{{--        <div class="slide slide-3">--}}
{{--            <div class="slide__bg"></div>--}}
{{--            <div class="slide__content">--}}
{{--                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">--}}
{{--                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />--}}
{{--                </svg>--}}
{{--                <div class="slide__text">--}}
{{--                    <h2 class="slide__text-heading">Project name 4</h2>--}}
{{--                    <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>--}}
{{--                    <a class="slide__text-link">Project link</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>



