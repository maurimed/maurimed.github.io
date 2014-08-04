@extends('admin.layouts.master')
@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => [$user->userable_type, $user->username, 'Profile']])
@stop
@section('title')
@include('admin.layouts.partials.page-title',['title' => $user->userable_type, 'subtitle' => '> ' . $user->username, 'icon' => 'user'])
@stop
@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
            @include('admin.partials.messages')
            @include('admin.partials.form-errors')

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                <!-- widget options:
                    usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
                    data-widget-colorbutton="false"
                    data-widget-editbutton="false"
                    data-widget-togglebutton="false"
                    data-widget-deletebutton="false"
                    data-widget-fullscreenbutton="false"
                    data-widget-custombutton="false"
                    data-widget-collapsed="true"
                    data-widget-sortable="false"
                -->

                <header>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2>Users</h2>
                </header>

                <!-- widget div-->
                <div>

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->

                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body no-padding">
                        {{ Form::open(['route' => ['dashboard.users.profile.update', $user->id],  'method' => 'put', 'files' => true ,'id' => 'administrator-form-edit', 'class' => 'smart-form', 'novalidate' => 'novalidate' ] ) }}
                        <!--                            <header>-->
                        <!--                                Order services-->
                        <!--                            </header>-->

                        <fieldset>

                            @include('admin.users.profiles.common_fields')

                            @if( is_admin() )
                                @include('admin.users.administrators.edit')
                            @elseif( is_student() )
                                @include('admin.users.students.edit')
                            @elseif( is_director() )
                                @include('admin.users.directors.edit')
                            @elseif( is_ambassador() )
                                @include('admin.users.ambassadors.edit')
                            @elseif( is_manager() )
                                @include('admin.users.representatives.managers.edit')
                            @elseif( is_parent() )
                                @include('admin.users.representatives.parents.edit')
                            @endif

                        </fieldset>

                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </footer>
                        {{ Form::close() }}
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div>
            <!-- end widget -->
        </article>
        <!-- WIDGET END -->
    </div>
    <!-- end row -->
</section>
@stop
@section('plugins')
<script src="/admin/js/plugin/select2/select2.min.js"></script>

<script src="/admin/js/plugin/jquery-form/jquery-form.min.js"></script>
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

                pageSetUp();

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