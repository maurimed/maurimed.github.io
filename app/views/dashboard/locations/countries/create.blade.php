@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Locations','Countries', 'Create']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'Countries', 'subtitle' => '> Create', 'icon' => 'map-marker'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            @include('dashboard.partials.messages')
            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-11" data-widget-editbutton="false">
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
                    <h2>Countries</h2>

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
                        {{ Form::open(['route' => 'dashboard.countries.store' ,'id' => 'countries-form', 'class' => 'smart-form', 'novalidate' => 'novalidate' ] ) }}
<!--                            <header>-->
<!--                                Order services-->
<!--                            </header>-->

                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                            {{ Form::label('continent_id', 'Continent', ['class' => 'label']) }}
                                        <label class="select">
                                            {{ Form::select('continent_id', $continents, ['placeholder' => 'Select']) }}
                                            <i></i>
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <!-- Country form input -->
                                        {{ Form::label('name', 'Country', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-map-marker"></i>
                                            {{ Form::text('name', null, ['placeholder' => 'Country']) }}
                                        </label>
                                    </section>

                                    <section class="col col-4">
                                        <!-- Phone Code form input -->
                                        {{ Form::label('phonecode', 'Phone Code', ['class' => 'label']) }}
                                        <label class="input">
                                            <i class="icon-append fa fa-phone"></i>
                                            {{ Form::text('phonecode', null, ['placeholder' => '593']) }}
                                        </label>
                                    </section>

                                </div>

                            </fieldset>


                            <footer>
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </footer>
                        </form>

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
<script src="/backend/js/plugin/jquery-form/jquery-form.min.js"></script>
<script>
    $( document ).ready(function() {
        var $registerForm = $("#countries-form").validate({

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
