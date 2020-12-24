<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
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
<script src="{{asset("css/owl.carousel.min.js")}}"></script>


<script>

    // set csrf token in meta tag
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let number = $('.exam_question_number').html();
    let end_display = $('.exam_question_max_number').html();
    if (number == end_display) {
        $('.end_quiz').removeClass('d-none');
        $('.next_question').addClass('d-none');
    }

    // send answers to database when checked radio boxs
    $('.exam_form input:radio').change(function () {
        let answer = $('.exam_form input:radio:checked').val();
        $.ajax({
            url: '{{route('sendAnswer')}}',
            type: 'post',
            data: {
                quiz_id: $('.exam_quizz_id').attr('qi'),
                question_id: $('.exam_question_title').attr('question_id'),
                answer: answer
            },
            success: function (res) {
            }
        })
    })

    // get answer for first question
    $('.exam_form input:radio').each(function () {
        let radio = $(this);
        $.ajax({
            url: '{{route("getFirstAnswer")}}',
            type: 'post',
            data: {
                question_id: $('.exam_question_title').attr('question_id'),
            },
            success: function (res) {
                if (res.checkedRadio != null) {
                    if (res.checkedRadio.answer == radio.val()) {
                        radio.prop('checked', true);
                    }
                } else {
                    radio.prop('checked', false)
                }
            }
        })
    })

    // get next question and answers & ...
    $('.next_question').on('click', function () {
        let next = $(this);
        let prev = $(this).siblings('.prev_question');

        $.ajax({
            url: '{{route('getQuestion')}}',
            type: 'post',
            data: {
                question_id: next.attr('question_id')
            },
            success: function (res) {
                test = $("#q-circle-n-" + res.questions.id).attr('id');
                let number = $("#q-circle-n-" + res.questions.id).children('span').html();
                $('.exam_question_title').html(res.questions.question_title)
                $('.exam_input_group input').attr('name', test)
                $('.answer_radio_one').find('label').html(res.questions.answer_one)
                $('.answer_radio_two').find('label').html(res.questions.answer_two)
                $('.answer_radio_three').find('label').html(res.questions.answer_three)
                $('.answer_radio_four').find('label').html(res.questions.answer_four)
                $('.exam_question_title').attr('question_id', res.questions.id)

                $('.exam_form input:radio').each(function () {
                    if (res.checkedRadio != null) {
                        if (res.checkedRadio.answer == $(this).val()) {
                            $(this).prop('checked', true);
                        }
                    } else {
                        $(this).prop('checked', false)
                    }
                })


                $('.exam_question_number').html(number)
                let end_display = $('.exam_question_max_number').html();
                if (res.next_question != null) {
                    next.attr('question_id', res.next_question.id)
                }

                if (res.pre_question != null) {
                    prev.attr('question_id', res.pre_question.id)
                }

                if (number == end_display) {
                    $('.end_quiz').removeClass('d-none');
                    $('.next_question').addClass('d-none');
                }
            }
        })
    })

    // get previous question and answers & ...
    $('.prev_question').on('click', function () {
        let pre = $(this);
        let next = $(this).siblings('.next_question');
        $.ajax({
            url: '{{route('getQuestion')}}',
            type: 'post',
            data: {
                question_id: pre.attr('question_id')
            },
            success: function (res) {
                test = $("#q-circle-n-" + res.questions.id).attr('id');
                let number = $("#q-circle-n-" + res.questions.id).children('span').html();
                $('.exam_question_title').html(res.questions.question_title)
                $('.exam_input_group input').attr('name', test)
                $('.answer_radio_one').find('label').html(res.questions.answer_one)
                $('.answer_radio_two').find('label').html(res.questions.answer_two)
                $('.answer_radio_three').find('label').html(res.questions.answer_three)
                $('.answer_radio_four').find('label').html(res.questions.answer_four)
                $('.exam_question_title').attr('question_id', res.questions.id)
                $('.exam_form input:radio').each(function () {
                    if (res.checkedRadio != null) {
                        if (res.checkedRadio.answer == $(this).val()) {
                            $(this).prop('checked', true);
                        }
                    } else {
                        $(this).prop('checked', false)
                    }
                })
                $('.exam_question_number').html(number)
                let end_display = $('.exam_question_max_number').html();

                if (res.next_question != null) {
                    next.attr('question_id', res.next_question.id)
                }
                if (res.pre_question != null) {
                    pre.attr('question_id', res.pre_question.id)
                }
                if (number != end_display) {
                    $('.end_quiz').addClass('d-none');
                    $('.next_question').removeClass('d-none');
                }
            }
        })
    })

    // change sidebar question numbers background color when answer to questions
    $(".exam_input_group input").click(function () {
        $(".question").find('#' + $(this).attr('name')).css("background", "rgb(79 166 255 / 72%)");
    })

    // get questions and answers & ... when click on sidebar questions number
    $('.sidebar_question_div').on('click', function () {
        let question_id = $(this).attr('question_id');
        let pre = $('.prev_question');
        let next = $('.next_question');
        $.ajax({
            url: '{{route('getQuestion')}}',
            type: 'post',
            data: {
                question_id: question_id,
                quiz_id: $('.exam_quizz_id').attr('qi')
            },
            success: function (res) {
                test = $("#q-circle-n-" + res.questions.id).attr('id');
                let number = $("#q-circle-n-" + res.questions.id).children('span').html();
                $('.exam_question_title').html(res.questions.question_title)
                $('.exam_input_group input').attr('label', test)
                $('.answer_radio_one').find('label').html(res.questions.answer_one)
                $('.answer_radio_two').find('label').html(res.questions.answer_two)
                $('.answer_radio_three').find('label').html(res.questions.answer_three)
                $('.answer_radio_four').find('label').html(res.questions.answer_four)
                $('.exam_question_title').attr('question_id', res.questions.id)
                $('.exam_question_number').html(number)
                let end_display = $('.exam_question_max_number').html();

                $('.exam_form input:radio').each(function () {
                    if (res.checkedRadio != null) {
                        if (res.checkedRadio.answer == $(this).val()) {
                            $(this).prop('checked', true);
                        }
                    } else {
                        $(this).prop('checked', false)
                    }
                })

                if (res.next_question != null) {
                    next.attr('question_id', res.next_question.id)
                }

                if (res.pre_question != null) {
                    pre.attr('question_id', res.pre_question.id)
                }
                if (question_number != end_display) {
                    $('.end_quiz').addClass('d-none');
                    $('.next_question').removeClass('d-none');
                }
            }
        })
    })

    // exit from quiz
    $('.exit_exam').on('click', function () {
        Swal.fire({
            title: "میخواهید از آزمون خارج شوید؟",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#ee5253',
            confirmButtonColor: '#ffa502',
            confirmButtonText: 'بله',
            cancelButtonText: 'نه',
            preConfirm: () => {
                let user_id = $(this).attr('user-id');
                window.location = '{{route("quiz.index")}}';
            },
        })
    })

    // warn to user (teacher or student)
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

    // kicking user (teacher or student)
    $('.teacher-kick-btn').on('click', function () {
        let user_name = $(this).attr('user-name');
        let thisElement = $(this);
        if (thisElement.attr('kicked') == 0) {
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
                            $(thisElement).attr('kicked', 1);
                            Swal.fire(
                                'اخراج شد',
                                success_message,
                                'success'
                            )
                        }
                    })
                },
            })
        } else if (thisElement.attr('kicked') == 1) {
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
                            $(thisElement).attr('kicked', 0);
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

    // show profile security tab
    $('#profile-security').on('click', function () {
        window.location = "#password";
    })

    // show profile information tab
    $('#profile-information').on('click', function () {
        window.location = "#profile";
    })

    // show profile email change tab
    $('#profile-email').on('click', function () {
        window.location = "#change-email";
    })

    // delete row from database
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

    // ajax pagination
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

    // dropdown
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
<script src={{asset("template_sit/dist/js/BsMultiSelect.js")}}></script>
<script>

    $('#some_students').change('checked', function () {
        $('.select-wrapper').fadeIn();
    })
    $('#all_students').change('checked', function () {
        $('.select-wrapper').fadeOut();
    })
</script>
@stack('custosm-scripts')
</body>
</html>
