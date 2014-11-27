@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Locations','States', 'Create']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'States', 'subtitle' => '> Create', 'icon' => 'map-marker'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

            @include('dashboard.partials.messages')
            @include('dashboard.partials.form-errors')

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-110" data-widget-editbutton="false"  data-widget-deletebutton="false">

                <header>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2>States</h2>

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
                        {{ Form::open(['route' => 'dashboard.states.store' ,'id' => 'states-form', 'class' => 'smart-form', 'novalidate' => 'novalidate' ] ) }}

                            <fieldset>
                                <div class="row">

                                    <!-- State form select -->
                                    <section class="col col-4">
                                        {{ Form::label('country_id', 'Country', ['class' => 'label']) }}
                                        <label class="select">
                                            {{ Form::select('country_id', $countries, null,['class' => 'select2', 'style' => 'width:100%'] ) }}
                                        </label>
                                    </section>

                                    <!-- State form input -->
                                    <section class="col col-4">
                                        {{ Form::label('name', 'State', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-map-marker"></i>
                                            {{ Form::text('name', null, ['placeholder' => 'State']) }}
                                        </label>
                                    </section>

                                    <!-- Abbreviation form input -->
                                    <section class="col col-8">
                                        {{ Form::label('abbreviation', 'Abbreviation', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-map-marker"></i>
                                            {{ Form::text('abbreviation', null, ['placeholder' => 'Abbreviation']) }}
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
<script src="/backend/js/plugin/select2/select2.min.js"></script>
<script src="/backend/js/plugin/jquery-form/jquery-form.min.js"></script>
<script>
$( document ).ready(function() {

        $(".select2").select2({
            placeholder: "Select a Country",
            allowClear: true
        });
        var $registerForm = $("#states-form").validate({

            // Rules for form validation
            rules : {
                username : {
                    required : true
                },
                email : {
                    required : true,
                    email : true
                },

                firstname : {
                    required : true
                },
                lastname : {
                    required : true
                },

            },

            // Messages for form validation
            messages : {
                username : {
                    required : 'Please enter your username'
                },
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },


                firstname : {
                    required : 'Please enter your first name'
                },
                lastname : {
                    required : 'Please enter your last name'
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
