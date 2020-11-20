

<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- account-delete-modal -->
<div class="modal-form text-center">
    <div class="modal fade account-delete-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content p-4">
                <div class="modal-top border-0 mb-4 p-0">
                    <div class="alert-content">
                        <span class="la la-exclamation-circle warning-icon"></span>
                        <h4 class="widget-title font-size-20 mt-2 mb-1">Your account will be deleted permanently!</h4>
                        <p class="modal-sub">Are you sure to proceed.</p>
                    </div>
                </div>
                <div class="btn-box">
                    <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel
                    </button>
                    <button type="submit" class="theme-btn bg-color-6 border-0 text-white">Delete</button>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->

<!-- account-delete-modal -->
<div class="modal-form text-center">
    <div class="modal fade item-delete-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content p-4">
                <div class="modal-top border-0 mb-4 p-0">
                    <div class="alert-content">
                        <span class="la la-exclamation-circle warning-icon"></span>
                        <h4 class="widget-title font-size-20 mt-2 mb-1">Your item will be deleted permanently!</h4>
                        <p class="modal-sub">Are you sure to proceed.</p>
                    </div>
                </div>
                <div class="btn-box">
                    <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel
                    </button>
                    <button type="submit" class="theme-btn bg-color-6 border-0 text-white">Delete</button>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div>
<script src="{{asset('template_sit/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('template_sit/js/popper.min.js')}}"></script>
<script src="{{asset('template_sit/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('template_sit/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('template_sit/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('template_sit/js/isotope.js')}}"></script>
<script src="{{asset('template_sit/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('template_sit/js/fancybox.js')}}"></script>
<script src="{{asset('template_sit/js/wow.js')}}"></script>
<script src="{{asset('template_sit/js/chart.js')}}"></script>
<script src="{{asset('template_sit/js/doughnut-chart.js')}}"></script>
<script src="{{asset('template_sit/js/bar-chart.js')}}"></script>
<script src="{{asset('template_sit/js/line-chart.js')}}"></script>
<script src="{{asset('template_sit/js/smooth-scrolling.js')}}"></script>
<script src="{{asset('template_sit/js/tooltipster.bundle.min.js')}}"></script>
<script src="{{asset('template_sit/js/jquery.filer.min.js')}}"></script>
<script src="{{asset('template_sit/js/jquery.vmap.js')}}"></script>
<script src="{{asset('template_sit/js/jquery.vmap.world.js')}}"></script>
<script src="{{asset('template_sit/js/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('template_sit/js/jquery.vmap-script.js')}}"></script>
<script src="{{asset('template_sit/js/progress-bar.js')}}"></script>
<script src="{{asset('template_sit/js/date-time-picker.js')}}"></script>
<script src="{{asset('template_sit/js/emojionearea.min.js')}}"></script>
<script src="{{asset('template_sit/js/animated-skills.js')}}"></script>
<script src="{{asset('template_sit/js/main.js')}}"></script>
<script>
        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

    function fetch_data(page) {
        $.ajax({
            url: "student?page=" + page,
            success: function (data) {
                console.log()
                $('.data-table').html($(data).find('.data-table').html());
            }
        });
    }

    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
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
