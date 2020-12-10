<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<script src="{{ asset("template_sit/js/jquery-3.4.1.min.js")}}"></script>
<script src="{{ asset("template_sit/js/popper.min.js")}}"></script>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset("template_sit/js/main.js")}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let sweetTextArea = $('.swal2-textarea').val();

    $('.teacher-warn-btn').on('click', function () {
        let user_name = $(this).attr('user-name');
        let success_message = 'به ' + user_name + ' اخطار داده شد';
        Swal.fire({
            title: 'دلیل اخطار چیست؟',
            input: 'textarea',
            inputAttributes: {
                autocapitalize: 'off'
            },
            showCancelButton: true,
            cancelButtonColor: '#ee5253',
            confirmButtonColor: '#ffa502',
            confirmButtonText: 'اخطار بده',
            cancelButtonText: 'لغو',
            showLoaderOnConfirm: true,
            preConfirm: () => {
                let user_id = $(this).attr('user-id');
                $.ajax({
                    type: 'get',
                    url: 'teacher/warn/' + user_id + '/' + $('.swal2-textarea').val(),
                    success: function (res) {
                        Swal.fire(
                            'اخطار داده شد',
                            success_message,
                            'success'
                        )
                    }
                })
            },
        })
    })


    $('.teacher-kick-btn').on('click', function () {
        let user_name = $(this).attr('user-name');
        let thisElement = $(this);
        if(thisElement.attr('kicked') == 0) {
            let success_message = user_name + ' اخراج شد';
            let question = user_name + ' اخراج شود؟';
            Swal.fire({
                title: question,
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#ee5253',
                confirmButtonColor: '#ffa502',
                confirmButtonText: 'اخراجش کن',
                cancelButtonText: 'لغو',
                preConfirm: () => {
                    let user_id = $(this).attr('user-id');
                    $.ajax({
                        type: 'get',
                        url: 'teacher/kick/' + user_id + '/kick',
                        success: function (res) {
                            $(thisElement).html('بازگشت کاربر');
                            $(thisElement).attr('kicked',1);
                            Swal.fire(
                                'اخراج شد',
                                success_message,
                                'success'
                            )
                        }
                    })
                },
            })
        }
        else if(thisElement.attr('kicked') == 1){
            let success_message = user_name + ' برگشت';
            let question = 'مطمعنید؟';
            Swal.fire({
                title: question,
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#ee5253',
                confirmButtonColor: '#00b894',
                confirmButtonText: 'برگردونش',
                cancelButtonText: 'لغو',
                preConfirm: () => {
                    let user_id = $(this).attr('user-id');
                    $.ajax({
                        type: 'get',
                        url: 'teacher/kick/' + user_id + '/back',
                        success: function (res) {
                            $(thisElement).html('اخراج');
                            $(thisElement).attr('kicked',0);
                            Swal.fire(
                                'برگشت',
                                success_message,
                                'success'
                            )
                        }
                    })
                },
            })
        }
    })


    $('#profile-security').on('click', function () {
        window.location = "#password";
    })
    $('#profile-information').on('click', function () {
        window.location = "#profile";
    })
    $('#profile-email').on('click', function () {
        window.location = "#change-email";
    })

    $(document).on('click', '.trash', function (e) {
        e.preventDefault(); // does not go through with the link.
        var $this = $(this);
        $.post({
            type: 'post',
            url: $this.attr('href'),
            data: {
                'id': $this.attr('id'),
                '_method': 'delete'
            }
        }).done(function (data) {
            $('.statement-table').html($(data).find('.statement-table').html())
        });
    });

    $(document).on('click', '.pagination a', function (event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
    });

    function fetch_data(page) {
        var url = location.pathname.slice(1);
        $.ajax({
            url: url + "?page=" + page,
            success: function (data) {
                $('.statement-table').html($(data).find('.statement-table').html());
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
