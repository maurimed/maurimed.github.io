@extends('admin.layouts.master')

@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => ['Locations','Cities', 'Create']])
@stop

@section('title')
@include('admin.layouts.partials.page-title',['title' => 'Cities', 'subtitle' => '> Create', 'icon' => 'map-marker'])
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
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-66" data-widget-editbutton="false">


                <header>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2>Cities</h2>

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
                        {{ Form::open(['route' => 'dashboard.cities.store' ,'id' => 'cities-form', 'class' => 'smart-form', 'novalidate' => 'novalidate' ] ) }}

                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">Country</label>

                                        <label class="select">
                                            {{ Form::select('country_id', $countries, null,['class' => 'country-select2', 'id' => 'country', 'style' => 'width:100%'] ) }}
                                        </label>
                                    </section>
                                    <section class="col col-4" >
                                        <label class="label">State</label>
                                        <label id="statesLists" class="select">
                                        </label>
                                    </section>
                                    <section class="col col-4" >
                                        <label class="label">City</label>
                                        <label  class="input">
                                            {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'cityInput']) }}
                                        </label>
                                    </section>

                                </div>

                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">Zip</label>
                                        <label  class="input">
                                            {{ Form::text('zip', null, ['class' => 'form-control']) }}
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="label">Latitude </label>
                                        <label  class="input">
                                            {{ Form::text('lat', null, ['class' => 'form-control']) }}
                                        </label>
                                        <div class="note">Optional</div>
                                    </section>
                                    <section class="col col-4">
                                        <label class="label">Longitude </label>
                                        <label  class="input">
                                            {{ Form::text('lng', null, ['class' => 'form-control']) }}
                                        </label>
                                        <div class="note">Optional</div>

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

    $(".country-select2").select2({
        placeholder: "Select a Country",
        allowClear: true
    });

    var $select = $('select#country');

    $select.on('change', function() {
            var val = this.value;
            console.log(val);
            $.ajax({
                type: "GET",
                url: '/api/states',
                data: { 'country_id' : val }
            }).done(function($data) {

                $('#statesLists').html($data);

            });

        });

    $select.trigger('change');

    var $registerForm = $("#cities-form").validate({

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
