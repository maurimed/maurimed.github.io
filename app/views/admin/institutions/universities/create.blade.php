@extends('admin.layouts.master')

@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => ['Institutions','Universities', 'Create']])
@stop

@section('title')
@include('admin.layouts.partials.page-title',['title' => 'Universities', 'subtitle' => '> Create', 'icon' => 'institution'])
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
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-81" data-widget-editbutton="false">
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
                    <h2>Universities</h2>

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
                        {{ Form::open(['route' => 'dashboard.universities.store' ,'id' => 'universities-form', 'class' => 'smart-form', 'novalidate' => 'novalidate' ] ) }}
                                <header>Create University</header>
                            <fieldset>
                                <div class="row">

                                    <!-- Name form input -->
                                    <section class="col col-6">
                                        {{ Form::label('name', 'Name', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-pencil"></i>
                                            {{ Form::text('name', null, ['placeholder' => 'Name']) }}
                                        </label>
                                    </section>

                                    <!-- Name form input -->
                                    <section class="col col-6">
                                        {{ Form::label('email', 'Email', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-envelope"></i>
                                            {{ Form::text('email', null, ['placeholder' => 'Email']) }}
                                        </label>
                                    </section>

                                </div>

                                <div class="row">
                                    
                                    <!-- Website form input -->
                                    <section class="col col-4">
                                        {{ Form::label('website', 'Website', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-link"></i>
                                            {{ Form::text('website', null, ['placeholder' => 'Website']) }}
                                        </label>
                                    </section>

                                    <!-- Tuition link form input -->
                                    <section class="col col-4">
                                        {{ Form::label('tuition_link', 'Tuition link', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-link"></i>
                                            {{ Form::text('tuition_link', null, ['placeholder' => 'Tuition Link']) }}
                                        </label>
                                    </section>

                                    <!-- Admissions link form input -->
                                    <section class="col col-4">
                                        {{ Form::label('admissions_link', 'Admissions link', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-link"></i>
                                            {{ Form::text('admissions_link', null, ['placeholder' => 'Admissions link'])
                                            }}
                                        </label>
                                    </section>


                                </div>

                                <div class="row">
                                    <!-- Address form input -->
                                    <section class="col col-8">
                                        {{ Form::label('address', 'Address', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-map-marker"></i>
                                            {{ Form::text('address', null, ['placeholder' => 'Address']) }}
                                        </label>
                                    </section>

                                    <!-- Phone form input -->
                                    <section class="col col-4">
                                        {{ Form::label('phone', 'Phone', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-phone"></i>
                                            {{ Form::text('phone', null, ['placeholder' => 'Phone']) }}
                                        </label>
                                    </section>

                                </div>

                                <div class="row">
                                    <section class="col col-3">
                                        <label class="label">Country</label>
                                        <label class="select">
                                            <div id="locationContainer">

                                                {{ Form::select('country', $countries, [], ['id'=>'country', 'style' => 'width:100%'] ) }}
                                            </div>
                                            @if(isset($user->userable->city->name))
                                            <div id="countryContainer">
                                                {{ $user->userable->city->state->country->name  }}
                                            </div>
                                            @endif
                                        </label>
                                    </section>
                                    <section class="col col-3" >
                                        <label class="label">State</label>
                                        <label id="statesLists" class="select">
                                            @if(isset($user->userable->city->name))
                                            {{ $user->userable->city->state->name }}
                                            @endif

                                        </label>
                                    </section>
                                    <section class="col col-3">
                                        <label class="label">City</label>
                                        <label id="citiesLists" class="select">
                                            @if(isset($user->userable->city->name))
                                            {{ $user->userable->city->name  }}
                                            @endif
                                        </label>
                                    </section>
                                    <section class="col col-3">
                                        <label class="label">Zip</label>
                                        <label id="zipsLists" class="select">
                                            @if(isset($user->userable->city->name))
                                            {{ $user->userable->city->zip }}
                                            @endif
                                        </label>
                                    </section>

                                </div>

                                <div class="row">

                                    <!-- Sports divission form input -->
                                    <section class="col col-4">
                                        {{ Form::label('sports_divission', 'Sports divission', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-child"></i>
                                            {{ Form::text('sports_division',null, ['placeholder' =>'Sports Division']) }}
                                        </label>
                                    </section>


                                    <!-- Closest airport form input -->
                                    <section class="col col-4">
                                        {{ Form::label('closest_airport', 'Closest airport', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-plane"></i>
                                            {{ Form::text('closest_airport',null, ['placeholder' =>'Closest Airport']) }}
                                        </label>
                                    </section>

                                    <!-- Far from airport form input -->
                                    <section class="col col-4">
                                        {{ Form::label('far_from_airport', 'Far from airport', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-clock-o"></i>
                                            {{ Form::text('far_from_airport',null, ['placeholder' =>'Far from Airport']) }}
                                        </label>
                                    </section>
                                </div>

                            </fieldset>

                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Save
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


//        $("#locationContainer").css('display', 'none');
        $("#ChangeLocation").click(function() {

//            $("#locationContainer").show( 300 );
            $("#countryContainer").remove( );
            $(this).remove( );

        });


        $("select#country").on('change', function() {
            var val = this.value;
            console.log(val);
            $.ajax({
                type: "GET",
                url: '/api/states',
                data: { 'country_id' : val }
            }).done(function($data) {

                $('#statesLists').html($data);
                $('#citiesLists').html('<div class=note > Please select the state first </div>');
                $('#zipsLists').html('<div class=note > Please select the city first </div>');

                pageSetUp();

            });

        });

        var $registerForm = $("#suniversities-form").validate({

            // Rules for form validation
            rules : {
                username : {
                    required : true
                },
                email : {
                    required : true,
                    email : true
                },

                website : {
                    required : true,
                    url: true
                },

                tuition_link : {
                    required : true,
                    url: true
                },
                admissions_link : {
                    required : true,
                    url: true
                },


            },

            // Messages for form validation
            messages : {
                username : {
                    required : 'Please enter your username'
                },
                email : {
                    required : 'Please enter the University email address',
                    email : 'Please enter a VALID email address'
                },


                website : {
                    required : 'Please enter the University website url',
                    url: 'Please enter a valid url'
                },

                tuition_link : {
                    required : 'Please enter the University Tuition url',
                    url: 'Please enter a valid url'
                },

                admissions_link : {
                    required : 'Please enter the University Admissions url',
                    url: 'Please enter a valid url'
                },





            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    });
</script>
@stop
