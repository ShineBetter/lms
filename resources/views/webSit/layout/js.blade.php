
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.min.js')}}" ></script>
<script src="{{asset('js/owl.carousel.min.js')}}" defer></script>
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/waypoint.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/fancybox.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/date-time-picker.js')}}"></script>
<script src="{{asset('js/jquery.filer.min.js')}}"></script>
<script src="{{asset('js/smooth-scrolling.js')}}"></script>
<script src="{{asset('js/tooltipster.bundle.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>--}}
{{--<script src="/js/jquery-3.4.1.min.js"></script>--}}
{{--<script src="/js/popper.min.js"></script>--}}
{{--<script src="/js/bootstrap.min.js"></script>--}}
{{--<script src="/js/bootstrap-select.min.js"></script>--}}
{{--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>--}}
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous"></script>
{{--<script src="/js/owl.carousel.min.js"></script>--}}
<script src="/js/isotope.js"></script>
<script src="/js/waypoint.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/fancybox.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/date-time-picker.js"></script>
<script src="/js/jquery.filer.min.js"></script>
<script src="/js/smooth-scrolling.js"></script>
<script src="/js/tooltipster.bundle.min.js"></script>
<script src="/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>


<script>
    $(document).ready(function() {

        var $slider = $(".slider"),
            $slideBGs = $(".slide__bg"),
            diff = 0,
            curSlide = 0,
            numOfSlides = $(".slide").length-1,
            animating = false,
            animTime = 500,
            autoSlideTimeout,
            autoSlideDelay = 6000,
            $pagination = $(".slider-pagi");

        function createBullets() {
            for (var i = 0; i < numOfSlides+1; i++) {
                var $li = $("<li class='slider-pagi__elem'></li>");
                $li.addClass("slider-pagi__elem-"+i).data("page", i);
                if (!i) $li.addClass("active");
                $pagination.append($li);
            }
        };

        createBullets();

        function manageControls() {
            $(".slider-control").removeClass("inactive");
            if (!curSlide) $(".slider-control.left").addClass("inactive");
            if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
        };

        function autoSlide() {
            autoSlideTimeout = setTimeout(function() {
                curSlide++;
                if (curSlide > numOfSlides) curSlide = 0;
                changeSlides();
            }, autoSlideDelay);
        };

        autoSlide();

        function changeSlides(instant) {
            if (!instant) {
                animating = true;
                manageControls();
                $slider.addClass("animating");
                $slider.css("top");
                $(".slide").removeClass("active");
                $(".slide-"+curSlide).addClass("active");
                setTimeout(function() {
                    $slider.removeClass("animating");
                    animating = false;
                }, animTime);
            }
            window.clearTimeout(autoSlideTimeout);
            $(".slider-pagi__elem").removeClass("active");
            $(".slider-pagi__elem-"+curSlide).addClass("active");
            $slider.css("transform", "translate3d("+ -curSlide*100 +"%,0,0)");
            $slideBGs.css("transform", "translate3d("+ curSlide*50 +"%,0,0)");
            diff = 0;
            autoSlide();
        }

        function navigateLeft() {
            if (animating) return;
            if (curSlide > 0) curSlide--;
            changeSlides();
        }

        function navigateRight() {
            if (animating) return;
            if (curSlide < numOfSlides) curSlide++;
            changeSlides();
        }

        $(document).on("mousedown touchstart", ".slider", function(e) {
            if (animating) return;
            window.clearTimeout(autoSlideTimeout);
            var startX = e.pageX || e.originalEvent.touches[0].pageX,
                winW = $(window).width();
            diff = 0;

            $(document).on("mousemove touchmove", function(e) {
                var x = e.pageX || e.originalEvent.touches[0].pageX;
                diff = (startX - x) / winW * 70;
                if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
                $slider.css("transform", "translate3d("+ (-curSlide*100 - diff) +"%,0,0)");
                $slideBGs.css("transform", "translate3d("+ (curSlide*50 + diff/2) +"%,0,0)");
            });
        });

        $(document).on("mouseup touchend", function(e) {
            $(document).off("mousemove touchmove");
            if (animating) return;
            if (!diff) {
                changeSlides(true);
                return;
            }
            if (diff > -8 && diff < 8) {
                changeSlides();
                return;
            }
            if (diff <= -8) {
                navigateLeft();
            }
            if (diff >= 8) {
                navigateRight();
            }
        });

        $(document).on("click", ".slider-control", function() {
            if ($(this).hasClass("left")) {
                navigateLeft();
            } else {
                navigateRight();
            }
        });

        $(document).on("click", ".slider-pagi__elem", function() {
            curSlide = $(this).data("page");
            changeSlides();
        });

    });





    // slide reng

    $('.slider-reng').each(function(e) {

        var slider = $(this),
            width = slider.width(),
            handle,
            handleObj;

        let svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        svg.setAttribute('viewBox', '0 0 ' + width + ' 83');

        slider.html(svg);
        slider.append($('<div>').addClass('active').html(svg.cloneNode(true)));

        slider.slider({
            range: true,
            values: [10, 500],
            min: 10,
            step: 5,
            minRange: 10,
            max: 700,
            create(event, ui) {

                slider.find('.ui-slider-handle').append($('<div />'));

                $(slider.data('value-0')).html(slider.slider('values', 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));
                $(slider.data('value-1')).html(slider.slider('values', 1).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));
                $(slider.data('range')).html((slider.slider('values', 1) - slider.slider('values', 0)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));

                setCSSVars(slider);

            },
            start(event, ui) {

                $('body').addClass('ui-slider-active');

                handle = $(ui.handle).data('index', ui.handleIndex);
                handleObj = slider.find('.ui-slider-handle');

            },
            change(event, ui) {
                setCSSVars(slider);
            },
            slide(event, ui) {

                let min = slider.slider('option', 'min'),
                    minRange = slider.slider('option', 'minRange'),
                    max = slider.slider('option', 'max');

                if(ui.handleIndex == 0) {
                    if((ui.values[0] + minRange) >= ui.values[1]) {
                        slider.slider('values', 1, ui.values[0] + minRange);
                    }
                    if(ui.values[0] > max - minRange) {
                        return false;
                    }
                } else if(ui.handleIndex == 1) {
                    if((ui.values[1] - minRange) <= ui.values[0]) {
                        slider.slider('values', 0, ui.values[1] - minRange);
                    }
                    if(ui.values[1] < min + minRange) {
                        return false;
                    }
                }

                $(slider.data('value-0')).html(ui.values[0].toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));
                $(slider.data('value-1')).html(ui.values[1].toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));
                $(slider.data('range')).html((slider.slider('values', 1) - slider.slider('values', 0)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));

                setCSSVars(slider);

            },
            stop(event, ui) {

                $('body').removeClass('ui-slider-active');

                let duration = .6,
                    ease = Elastic.easeOut.config(1.08, .44);

                TweenMax.to(handle, duration, {
                    '--y': 0,
                    ease: ease
                });

                TweenMax.to(svgPath, duration, {
                    y: 42,
                    ease: ease
                });

                handle = null;

            }
        });

        var svgPath = new Proxy({
            x: null,
            y: null,
            b: null,
            a: null
        }, {
            set(target, key, value) {
                target[key] = value;
                if(target.x !== null && target.y !== null && target.b !== null && target.a !== null) {
                    slider.find('svg').html(getPath([target.x, target.y], target.b, target.a, width));
                }
                return true;
            },
            get(target, key) {
                return target[key];
            }
        });

        svgPath.x = width / 2;
        svgPath.y = 42;
        svgPath.b = 0;
        svgPath.a = width;

        $(document).on('mousemove touchmove', e => {
            if(handle) {

                let laziness = 4,
                    max = 24,
                    edge = 52,
                    other = handleObj.eq(handle.data('index') == 0 ? 1 : 0),
                    currentLeft = handle.position().left,
                    otherLeft = other.position().left,
                    handleWidth = handle.outerWidth(),
                    handleHalf = handleWidth / 2,
                    y = e.pageY - handle.offset().top - handle.outerHeight() / 2,
                    moveY = (y - laziness >= 0) ? y - laziness : (y + laziness <= 0) ? y + laziness : 0,
                    modify = 1;

                moveY = (moveY > max) ? max : (moveY < -max) ? -max : moveY;
                modify = handle.data('index') == 0 ? ((currentLeft + handleHalf <= edge ? (currentLeft + handleHalf) / edge : 1) * (otherLeft - currentLeft - handleWidth <= edge ? (otherLeft - currentLeft - handleWidth) / edge : 1)) : ((currentLeft - (otherLeft + handleHalf * 2) <= edge ? (currentLeft - (otherLeft + handleWidth)) / edge : 1) * (slider.outerWidth() - (currentLeft + handleHalf) <= edge ? (slider.outerWidth() - (currentLeft + handleHalf)) / edge : 1));
                modify = modify > 1 ? 1 : modify < 0 ? 0 : modify;

                if(handle.data('index') == 0) {
                    svgPath.b = currentLeft / 2  * modify;
                    svgPath.a = otherLeft;
                } else {
                    svgPath.b = otherLeft + handleHalf;
                    svgPath.a = (slider.outerWidth() - currentLeft) / 2 + currentLeft + handleHalf + ((slider.outerWidth() - currentLeft) / 2) * (1 - modify);
                }

                svgPath.x = currentLeft + handleHalf;
                svgPath.y = moveY * modify + 42;

                handle.css('--y', moveY * modify);

            }
        });

    });

    function getPoint(point, i, a, smoothing) {
        let cp = (current, previous, next, reverse) => {
                let p = previous || current,
                    n = next || current,
                    o = {
                        length: Math.sqrt(Math.pow(n[0] - p[0], 2) + Math.pow(n[1] - p[1], 2)),
                        angle: Math.atan2(n[1] - p[1], n[0] - p[0])
                    },
                    angle = o.angle + (reverse ? Math.PI : 0),
                    length = o.length * smoothing;
                return [current[0] + Math.cos(angle) * length, current[1] + Math.sin(angle) * length];
            },
            cps = cp(a[i - 1], a[i - 2], point, false),
            cpe = cp(point, a[i - 1], a[i + 1], true);
        return `C ${cps[0]},${cps[1]} ${cpe[0]},${cpe[1]} ${point[0]},${point[1]}`;
    }

    function getPath(update, before, after, width) {
        let smoothing = .16,
            points = [
                [0, 42],
                [before <= 0 ? 0 : before, 42],
                update,
                [after >= width ? width : after, 42],
                [width, 42]
            ],
            d = points.reduce((acc, point, i, a) => i === 0 ? `M ${point[0]},${point[1]}` : `${acc} ${getPoint(point, i, a, smoothing)}`, '');
        return `<path d="${d}" />`;
    }

    function setCSSVars(slider) {
        let handle = slider.find('.ui-slider-handle');
        slider.css({
            '--l': handle.eq(0).position().left + handle.eq(0).outerWidth() / 2,
            '--r': slider.outerWidth() - (handle.eq(1).position().left + handle.eq(1).outerWidth() / 2)
        });
    }

</script>


