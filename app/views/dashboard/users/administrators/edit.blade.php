

@extends('dashboard.layouts.master')

@section('ribbon')
    @include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => [$administrator->userable_type, $administrator->username, 'Profile']])
@stop

@section('title')
    @include('dashboard.layouts.partials.page-title',['title' => $administrator->userable_type, 'subtitle' => '> ' . $administrator->username, 'icon' => 'user'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            @include('dashboard.partials.form-errors')

            @include('dashboard.users.edit', ['user' => $administrator])


        </article>
        <!-- WIDGET END -->
    </div>
    <!-- end row -->
</section>
@stop
@section('plugins')
<script src="/backend/js/plugin/select2/select2.min.js"></script>

<script src="/backend/js/plugin/jquery-form/jquery-form.min.js"></script>
<script>
    $( document ).ready(function() {
        $("#country").select2({
            placeholder: "Select a Country",
            allowClear: true
        });

        $("#locationContainer").css('display', 'none');
        $("#ChangeLocation").click(function() {

            $("#locationContainer").show( 300 );
            $("#countryContainer").remove( );
            $(this).remove( );

        });

        $("select#country").on('change', function() {
            var val = this.value;
            console.log(val);
            $.ajax({
                type: "GET",
                url: '/api/states',
                data: { 'country_code' : val }
            }).done(function($data) {

                $('#statesLists').html($data);
                $('#citiesLists').html('<div class=note > Please select the state first </div>');
                $('#zipsLists').html('<div class=note > Please select the city first </div>');


            });

        });

        var $registerForm = $("#administrator-form-edit").validate({

            // Rules for form validation
            rules : {
//                username : {
//                    remote: "/dashboard/checkUsername"
//                },
                email : {
                    required : true,
                    email : true
                },
                password : {
                    minlength : 3,
                    maxlength : 20
                },
                passwordConfirm : {
                    minlength : 3,
                    maxlength : 20,
                    equalTo : '#password'
                },
                firstname : {
                    required : true
                },
                lastname : {
                    required : true
                }

            },

            // Messages for form validation
            messages : {
                login : {
                    required : 'Please enter your login'
                },
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                password : {
                    required : 'Please enter your password'
                },
                passwordConfirm : {
                    required : 'Please enter your password one more time',
                    equalTo : 'Please enter the same password as above'
                },
                firstname : {
                    required : 'Please select your first name'
                },

//                username : {
//                    remote : 'This username is already taken'
//                }

            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    });
</script>
@stop