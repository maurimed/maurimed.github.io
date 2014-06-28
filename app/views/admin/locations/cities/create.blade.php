@extends('admin.layouts.master')

@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => ['Locations','States', 'Create']])
@stop

@section('title')
@include('admin.layouts.partials.page-title',['title' => 'States', 'subtitle' => '> Create', 'icon' => 'map-marker'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            @include('admin.partials.messages')
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
<!--                            <header>-->
<!--                                Order services-->
<!--                            </header>-->

                            <fieldset>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="select">
                                            {{ Form::select('country_id', $countries, 168,['class' => 'select2', 'style' => 'width:100%'] ) }}
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-map-marker"></i>
                                            {{ Form::text('name', null, ['placeholder' => 'State']) }}
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
<script src="/admin/js/plugin/select2/select2.min.js"></script>
<script src="/admin/js/plugin/jquery-form/jquery-form.min.js"></script>
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
