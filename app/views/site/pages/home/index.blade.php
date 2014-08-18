@extends('site.layouts.master')

@section('styles')
<link href="/site/ambassadors/style2.css" rel="stylesheet">
<link href="/site/ambassadors/flags/assets/docs.css" rel="stylesheet">
<link href="/site/ambassadors/flags/css/flag-icon.css" rel="stylesheet">
<link href="/site/ambassadors/style.css"  rel="stylesheet">
@stop

@section('content')

    @include('site.pages.home.partials.form')

    @include('site.pages.home.partials.slider')

    @include('site.pages.home.partials.testimonials')

    @include('site.pages.home.partials.ambassadors')

@stop

@section('scripts')

<!-- jQuery REVOLUTION Slider  -->
<script src="/site/vendors/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="/site/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="/admin/js/plugin/jquery-validate/jquery.validate.min.js"></script>
<script>
    $('document').ready(function(){
        $('.loading-locations').css('display','block');
        $.ajax({
            type: "GET",
            url: '/api/ipinfo'
        }).done(function(data) {
            $('#countries').hide().html(data).slideDown('slow', function(){
                $('.loading-locations').css('display','none');
            });
        });

        var $email = $('#e-mail');
        var $phone = $('#phone');
        $("#landing-form").validate({

            rules : {

                firstname : { required: true},
                email : {
                    required : true,
                    email : true
                },
                phone: {
                    required: true,
                    number: true
                },
                country : { required: true},
                states : { required: true},
                cities : { required: true},
                interest : { required: true},
                find_us : { required: true},
                age : { required: true}

            },

            // Messages for form validation
            messages : {
                firstname : { required: $('#firstname').data('error')},
                email : {
                    required : $email.data('error'),
                    email : $email.data('invalid')
                },
                phone : {
                    required : $phone.data('error'),
                    number: $phone.data('number')
                },
                country : { required: $('#countries').data('error')},
                states : { required: $('#states').data('error')},
                cities : { required: $('#cities').data('error')},
                interest : { required: $('#interest').data('error')},
                find_us : { required: $('#find_us').data('error')},
                age : { required: $('#age').data('error')}


            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    });

</script>
@stop