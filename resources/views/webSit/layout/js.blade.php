
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
<script src="{{asset('template_sit/js/jquery.mpdatepicker.js')}}"></script>
<script src="{{asset('template_sit/js/Pdatepicker.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/jquery.inputmask.min.js"></script>
<script>
    $(".pdatepicker").mpdatepicker({
        'timePicker': false
    });
</script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function($){


        $('.ResendCode').on('click', function () {
            $.ajax({
                url: '{{route("twofactor")}}',
                type:'post',
                success: function (data) {
                    console.log(data)
                }
            })
        })
        // setting
        var debug = false;

        // fake ajax request
        // $.mockjax({
        //     url: '/api/tfa',
        //     dataType: 'json',
        //     response: function(settings) {
        //         this.responseText = {
        //             "ok": (Math.random() >= 0.5) // random true/false
        //         };
        //     },
        //     responseTime: 1000
        // });

        // pincode
        var _pincode = []
        _req = null;

        // main form
        var $form = $('#form');

        // pincode group
        var $group = $form.find('.form__pincode');

        // all input fields
        var $inputs = $group.find(':input');

        // input fields
        var $first = $form.find('[name=pincode-1]')
            , $second = $form.find('[name=pincode-2]')
            , $third = $form.find('[name=pincode-3]')
            , $fourth = $form.find('[name=pincode-4]')
            , $fifth = $form.find('[name=pincode-5]')
            , $sixth = $form.find('[name=pincode-6]');

        // submit button
        // var $button = $form.find('.button--primary');

        // all fields
        $inputs
            .on('keyup', function(event) {
                var code = event.keyCode || event.which;

                if (code === 9 && ! event.shiftKey) {
                    // prevent default event
                    event.preventDefault();

                    // focus to submit button
                    $('.button--primary').focus();
                }
            })
            .inputmask({
                mask: '9',
                placeholder: '',
                showMaskOnHover: false,
                showMaskOnFocus: false,
                clearIncomplete: true,
                onincomplete: function() {
                    ! debug || console.log('inputmask incomplete');
                },
                oncleared: function() {
                    var index = $inputs.index(this)
                        , prev = index - 1
                        , next = index + 1;

                    if (prev >= 0) {
                        // clear field
                        $inputs.eq(prev).val('');

                        // focus field
                        $inputs.eq(prev).focus();

                        // remove last nubmer
                        _pincode.splice(-1, 1)
                    } else {
                        return false;
                    }

                    ! debug || console.log('[oncleared]', prev, index, next);
                },
                onKeyValidation: function(key, result) {
                    var index = $inputs.index(this)
                        , prev = index - 1
                        , next = index + 1;

                    // focus to next field
                    if (prev < 6) {
                        $inputs.eq(next).focus();
                    }

                    ! debug || console.log('[onKeyValidation]', index, key, result, _pincode);
                },
                onBeforePaste: function (data, opts) {
                    $.each(data.split(''), function(index, value) {
                        // set value
                        $inputs.eq(index).val(value);

                        ! debug || console.log('[onBeforePaste:each]', index, value);
                    });

                    return false;
                }
            });

        // first field
        $('[name=pincode-1]')
            .on('focus', function(event) {
                ! debug || console.log('[1:focus]', _pincode);
            })
            .inputmask({
                oncomplete: function() {
                    // add first character
                    _pincode.push($(this).val());

                    // focus to second field
                    $('[name=pincode-2]').focus();

                    ! debug || console.log('[1:oncomplete]', _pincode);
                }
            });

        // second field
        $('[name=pincode-2]')
            .on('focus', function(event) {
                if ( ! ($first.val().trim() !== '')) {
                    // prevent default
                    event.preventDefault();

                    // reset pincode
                    _pincode = [];

                    // handle each field
                    $inputs
                        .each(function() {
                            // clear each field
                            $(this).val('');
                        });

                    // focus to first field
                    $first.focus();
                }

                ! debug || console.log('[2:focus]', _pincode);
            })
            .inputmask({
                oncomplete: function() {
                    // add second character
                    _pincode.push($(this).val());

                    // focus to third field
                    $('[name=pincode-3]').focus();

                    ! debug || console.log('[2:oncomplete]', _pincode);
                }
            });

        // third field
        $('[name=pincode-3]')
            .on('focus', function(event) {
                if ( ! ($first.val().trim() !== '' &&
                    $second.val().trim() !== '')) {
                    // prevent default
                    event.preventDefault();

                    // reset pincode
                    _pincode = [];

                    // handle each field
                    $inputs
                        .each(function() {
                            // clear each field
                            $(this).val('');
                        });

                    // focus to first field
                    $first.focus();
                }

                ! debug || console.log('[3:focus]', _pincode);
            })
            .inputmask({
                oncomplete: function() {
                    // add third character
                    _pincode.push($(this).val());

                    // focus to fourth field
                    $('[name=pincode-4]').focus();

                    ! debug || console.log('[3:oncomplete]', _pincode);
                }
            });

        // fourth field
        $('[name=pincode-4]')
            .on('focus', function(event) {
                if ( ! ($first.val().trim() !== '' &&
                    $second.val().trim() !== '' &&
                    $third.val().trim() !== '')) {
                    // prevent default
                    event.preventDefault();

                    // reset pincode
                    _pincode = [];

                    // handle each field
                    $inputs
                        .each(function() {
                            // clear each field
                            $(this).val('');
                        });

                    // focus to first field
                    $first.focus();
                }

                ! debug || console.log('[4:focus]', _pincode);
            })
            .inputmask({
                oncomplete: function() {
                    // add fo fourth character
                    _pincode.push($(this).val());

                    // focus to fifth field
                    $('[name=pincode-5]').focus();

                    ! debug || console.log('[4:oncomplete]', _pincode);
                }
            });

        // fifth field
        $('[name=pincode-5]')
            .on('focus', function(event) {
                if ( ! ($first.val().trim() !== '' &&
                    $second.val().trim() !== '' &&
                    $third.val().trim() !== '' &&
                    $fourth.val().trim() !== '')) {
                    // prevent default
                    event.preventDefault();

                    // reset pincode
                    _pincode = [];

                    // handle each field
                    $inputs
                        .each(function() {
                            // clear each field
                            $(this).val('');
                        });

                    // focus to first field
                    $first.focus();
                }

                ! debug || console.log('[5:focus]', _pincode);
            })
            .inputmask({
                oncomplete: function() {
                    // add fifth character
                    _pincode.push($(this).val());

                    // focus to sixth field
                    $('[name=pincode-6]').focus();

                    ! debug || console.log('[5:oncomplete]', _pincode);
                }
            });

        // sixth field
        $('[name=pincode-6]')
            .on('focus', function(event) {
                if ( ! ($first.val().trim() !== '' &&
                    $second.val().trim() !== '' &&
                    $third.val().trim() !== '' &&
                    $fourth.val().trim() !== '' &&
                    $fifth.val().trim() !== '')) {
                    // prevent default
                    event.preventDefault();

                    // reset pincode
                    _pincode = [];

                    // handle each field
                    $inputs
                        .each(function() {
                            // clear each field
                            $(this).val('');
                        });

                    // focus to first field
                    $first.focus();
                }

                ! debug || console.log('[6:focus]', _pincode);
            })
            .inputmask({
                oncomplete: function() {
                    // add sixth character
                    _pincode.push($(this).val());

                    // pin length not equal to six characters
                    if (_pincode.length !== 6) {
                        // reset pin
                        _pincode = [];

                        // handle each field
                        $inputs
                            .each(function() {
                                // clear each field
                                $(this).val('');
                            });

                        // focus to first field
                        $('[name=pincode-1]').focus();
                    } else {
                        // handle each field
                        $inputs.each(function() {
                            // disable field
                            $(this).prop('disabled', true);
                        });

                        // send request
                        _req = $.ajax({
                            type: 'POST',
                            url: '{{route("twofactor.check")}}',
                            data: {
                                'code': _pincode.join(''),
                            }
                        })
                            .done(function(data, textStatus, jqXHR) {
                                console.log(data)
                                try {
                                    ! debug || console.log('data', data);

                                    if (data.ok === true) {
                                        $group.addClass('form__group--success');
                                        // $button.removeAttr('disabled');
                                        window.location = '/';
                                    }

                                    if (data.ok === false) {
                                        $group.addClass('form__group--error');
                                    }
                                } catch (err) {

                                }
                            })
                            .fail(function(jqXHR, textStatus, errorThrown) {
                                $group.removeClass('form__group--error');
                            })
                            .always(function(dataOrjqXHR, textStatus, jqXHRorErrorThrown) {
                                // reset pin
                                _pincode = [];

                                // reset request
                                _req = null;

                                setTimeout(function() {
                                    // handle each field
                                    $inputs.each(function() {
                                        // clear all fields
                                        $(this).val('');

                                        // enable all fields
                                        $(this).prop('disabled', false);
                                    });

                                    // remove response status class
                                    $group.removeClass('form__group--success form__group--error');

                                    // disable submit button
                                    $button.attr('disabled', true);

                                    // focus to first field
                                    $first.focus();
                                }, 2000);
                            });
                    }

                    ! debug || console.log('[6:oncomplete]', _pincode);
                }
            });
    });

</script>


{{--<script src="/js/jquery-3.4.1.min.js"></script>--}}
{{--<script src="/js/popper.min.js"></script>--}}
{{--<script src="/js/bootstrap.min.js"></script>--}}
{{--<script src="/js/bootstrap-select.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/owl.carousel.min.js"></script>

