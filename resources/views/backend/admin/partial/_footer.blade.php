<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->
{{--<div class="row">--}}
{{--    <div class="col-lg-12">--}}
{{--        <div class="copyright-content mt-0 pt-0 pb-4 border-top-0 text-center">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <p class="copy__desc">&copy; 2020 Aduca. All Rights Reserved. by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs.</a></p>--}}
{{--                </div><!-- end col-lg-12 -->--}}
{{--            </div><!-- end row -->--}}
{{--        </div><!-- end copyright-content -->--}}
{{--    </div><!-- end col-lg-12 -->--}}
{{--</div>--}}


<script src="{{ asset("template_sit/js/jquery-3.4.1.min.js")}}""</script>
<
script
src = "{{ asset("template_sit/js/popper.min.js")}}" ></script>
<script src="{{ asset("template_sit/js/bootstrap.min.js")}}"></script>
<script src="{{ asset("template_sit/js/bootstrap-select.min.js")}}"></script>
<script src="{{ asset("template_sit/js/owl.carousel.min.js")}}"></script>
<script src="{{ asset("template_sit/js/magnific-popup.min.js")}}"></script>
<script src="{{ asset("template_sit/js/isotope.js")}}"></script>
<script src="{{ asset("template_sit/js/waypoint.min.js")}}"></script>
<script src="{{ asset("template_sit/js/jquery.counterup.min.js")}}"></script>
<script src="{{ asset("template_sit/js/fancybox.js")}}"></script>
<script src="{{ asset("template_sit/js/smooth-scrolling.js")}}"></script>
<script src="{{ asset("template_sit/js/tooltipster.bundle.min.js")}}"></script>
<script src="{{ asset("template_sit/js/jquery.filer.min.js")}}"></script>
<script src="{{ asset("template_sit/js/progress-bar.js")}}"></script>
<script src="{{ asset("template_sit/js/date-time-picker.js")}}"></script>
<script src="{{ asset("template_sit/js/emojionearea.min.js")}}"></script>
<script src="{{ asset("template_sit/js/animated-skills.js")}}"></script>
<script src="{{ asset("template_sit/js/main.js")}}"></script>
<script>
<<<<<<< HEAD
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click', '.trash', function (e) {
        e.preventDefault(); // does not go through with the link.
        var $this = $(this);
        $.post({
            type: 'post',
            url: $this.attr('href') + '/' + $this.attr('id'),
            data: {
                'id': $this.attr('id'),
                '_method': 'delete'
            }
        }).done(function (data) {
            $('.table').html($(data).find('.table').html())
        });
    });
=======
>>>>>>> parent of 5df307d (custimize btn component & create delete component & partial table from indexes)
    $(document).on('click', '.pagination a', function (event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
    });

    function fetch_data(page) {
        var url = location.pathname.slice(1);
        $.ajax({
            url: url+"?page=" + page,
            success: function (data) {
                console.log()
                $('.data-table').html($(data).find('.data-table').html());
            }
        });
    }

    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>
@stack('custosm-scripts')
</body>
</html>
