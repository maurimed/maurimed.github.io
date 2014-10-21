@extends('site.layouts.master')

@section('styles')
        <link href="/site/vendors/rs-plugin/css/settings.css" media="screen" rel="stylesheet"  >
        <link href="/site/vendors/smoothdivscroll/smoothDivScroll.css" rel="stylesheet">
        <link href="/site/vendors/magnific-popup/magnific-popup.css"rel="stylesheet"  >
        <link href="/site/ambassadors/style2.css" rel="stylesheet">
        <link href="/site/ambassadors/flags/assets/docs.css" rel="stylesheet">
        <link href="/site/ambassadors/flags/css/flag-icon.css" rel="stylesheet">
        <link href="/site/ambassadors/style.css"  rel="stylesheet">
        <link href="/site/vendors/bootstrap-select/bootstrap-select.min.css"  rel="stylesheet">
        {{--<link href="/site/vendors/bootstrap-checkbox/bootstrap-checkbox.css"  rel="stylesheet">--}}

@stop

@section('content')
        @include('site.pages.home.partials.form')

        @include('site.pages.home.partials.slider')

        @include('site.pages.home.partials.services')

        @include('site.pages.home.partials.calculators')

        @include('site.pages.home.partials.promos')

        @include('site.pages.home.partials.testimonials')

        @include('site.pages.home.partials.ambassadors')

@stop

@section('scripts')

<!-- jQuery REVOLUTION Slider  -->
<script src="/site/vendors/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="/site/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="/backend/js/plugin/jquery-validate/jquery.validate.min.js"></script>
<script src="/site/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="/site/vendors/fitvids/jquery.fitvids.js"></script>
{{--<script src="/site/vendors/bootstrap-checkbox/bootstrap-checkbox.js"></script>--}}
<script src="/backend/js/libs/angular.min.js"></script>
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
        $('.select-picker').selectpicker();
        $(".promo-video-wrapper").fitVids();

        $("#promo-form").validate({

                    rules : {

                        promo_name : { required: true},
                        promo_email : {
                            required : true,
                            email : true
                        },
                        promo_phone: {
                            required: true,
                            number: true
                        }

                    },

                    // Messages for form validation
                    messages : {
                        promo_name : { required: $('#promo_name').data('error')},
                        promo_email : {
                            required : $('#promo_email').data('error'),
                            email : $('#promo_email').data('invalid')
                        },
                        promo_phone : {
                            required : $('#promo_phone').data('error'),
                            number: $('#promo_phone').data('number')
                        }
                    },

                    // Do not change code below
                    errorPlacement : function(error, element) {
                        error.insertAfter(element.parent());
                    }
                });

    });

</script>
<script>
    (function(){
        var app = angular.module('calculator',[]);

        app.controller("CalculatorController", function($scope){

            function calculateGpa(values){
                return (values.grade * 4 )/ values.outOf;
            }
            function updateMessages(amount, percent, values){
                $scope.scholarship = { "amount": amount, "percent": percent };
                $scope.message = false;
                $scope.calcGpa = calculateGpa(values);
            }
            function showContactMessage(values){
                $scope.scholarship = undefined;
                $scope.message = true;
                $scope.calcGpa = undefined;
                $scope.calcGpa = calculateGpa(values);

            }
            $scope.$watch(
                function(scope){
                    return {grade: scope.gpa, outOf : scope.outOf };
                },
                function(values){
                    if(values.outOf == 100){
                        if(values.grade == 100){
                            updateMessages(100000, 100, values);
                        } else if (values.grade >= 89 && values.grade < 100 ){
                            updateMessages(80000, 90, values);
                        } else if (values.grade >= 80 && values.grade < 90 ){
                            updateMessages(60000, 80, values);
                        } else if (values.grade >= 0 && values.grade < 80 ){
                            showContactMessage(values);
                        }
                    } else if (values.outOf == 20){
                        if(values.grade == 20){
                            updateMessages(100000, 100, values);
                        } else if (values.grade >= 17.8 && values.grade < 20 ){
                            updateMessages(80000, 90, values);
                        } else if (values.grade >= 16 && values.grade < 17.80 ){
                            updateMessages(60000, 80, values);
                        } else if (values.grade >= 0 && values.grade < 16 ){
                            showContactMessage(values);
                        }
                    } else if (values.outOf == 10){
                        if(values.grade == 10){
                            updateMessages(100000, 100, values);
                        } else if (values.grade >= 8.9 && values.grade < 10 ){
                            updateMessages(80000, 90, values);
                        } else if (values.grade >= 8 && values.grade < 8.89 ){
                            updateMessages(60000, 80, values);
                        } else if (values.grade >= 0 && values.grade < 8 ){
                            showContactMessage(values);
                        }
                    }
                    if(values.grade > values.outOf){
                        $scope.gpa = values.outOf;
                        $scope.scholarship = undefined;
                        $scope.message = false;
                        $scope.calcGpa = undefined;
                    }

                },
                true
            );


        }).filter('percentage', ['$filter', function ($filter) {
            return function (input) {
              return $filter('number')(input) + '%';
            };
          }]);
    })();
</script>
@stop