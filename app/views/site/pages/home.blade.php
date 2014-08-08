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
<script>
    $('document').ready(function(){
        $('.loading-locations').css('display','block');
        $.ajax({
            type: "GET",
            url: '/api/ipinfo'
        }).done(function($data) {
            $('#countries').hide().html($data).slideDown('slow', function(){$('.loading-locations').css('display','none');});

        });
    });


</script>
@stop