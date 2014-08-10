@extends('site.layouts.master')

@section('content')

    @include('site.layouts.partials.components.slider')

    @include('site.layouts.partials.components.testimonials-1')

    @include('site.layouts.partials.components.ambassadors')

@stop

@section('scripts')

<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="/site/vendors/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="/site/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="/site/js/script.js"></script>
<script type="text/javascript" src="/site/includes/retina/retina-1.1.0.min.js"></script>
<script src="/admin/js/plugin/jquery-validate/jquery.validate.min.js"></script>
<script>
    $('document').ready(function(){
        $('.loading-locations').css('display','block');
        var $countryError = '';
        $.ajax({
            type: "GET",
            url: '/api/ipinfo'
        }).done(function($data) {
            $('#countries').hide().html($data).slideDown('slow', function(){
                $('.loading-locations').css('display','none');
            });
        });


        var $email = $('#e-mail');
        console.log( $('#countries').data('error') );
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