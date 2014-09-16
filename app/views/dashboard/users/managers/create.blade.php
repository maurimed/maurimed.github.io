@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Users','Managers', 'Create']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'Managers', 'subtitle' => '> Create', 'icon' => 'user'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            @include('dashboard.partials.form-errors')
            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-121" data-widget-editbutton="false">

                <header>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2>Managers</h2>
                </header>

                <!-- widget div-->
                <div>

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox"> </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body no-padding">
                        {{ Form::open(['route' => 'dashboard.managers.store' ,'id' => 'manager-form', 'class' => 'smart-form', 'novalidate' => 'novalidate' ] ) }}

                            @include('dashboard.users.create-form')

                            <fieldset>
                                <div class="row">
                                    <div class="col col-4" >
                                        <label class="input">
                                            <select name="countries" data-placeholder="The University Country" id="countriesSelect" style="width:100%" required ><option></option> </select>
                                        </label>
                                    </div>
                                    <div class="col col-4" >
                                        <label class="input">
                                            <select name="states" data-placeholder="The University State" id="statesSelect" style="width:100%" required > <option></option> </select>
                                        </label>
                                    </div>
                                    <div class="col col-4" >
                                        <label class="input">
                                            <select name="cities" data-placeholder="The University City" id="citiesSelect" style="width:100%" required > <option></option> </select>
                                        </label>
                                    </div>
                                    <br/><br/>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="col col-8">
                                        <label class="input">
                                            <select name="universities" data-placeholder="Select the University"  id="universitiesSelect" style="width:100%!important"> <option></option></select>
                                        </label>
                                    </div>
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
{{--<script src="js/plugin/jquery-form/jquery-form.min.js"></script>--}}
<script src="/backend/js/plugin/select2/select2.min.js"></script>
<script>
$( document ).ready(function() {

    var countriesSelect = $('#countriesSelect'),
        statesSelect = $('#statesSelect'),
        citiesSelect = $('#citiesSelect'),
        universitiesSelect = $('#universitiesSelect');

    countriesSelect.select2();
    statesSelect.select2();
    citiesSelect.select2();
    universitiesSelect.select2();

    $.ajax({
        type: "GET",
        url: '/api/universities/countries'
    }).done(function(data) {
        $.each(data,function(key, value) {
            countriesSelect.append('<option value=' + key + '>' + value + '</option>');
        });
    });

    function getList(id, url, select){
        $.ajax({
            type: "GET",
            url: '/api/universities/' + url,
            data: { 'id' : id }
        }).done(function(data) {
            select.find('option').remove();
            $.each(data,function(key, value) {
                select.append('<option value=' + key + '>' + value + '</option>');
            });
        });
    }


    countriesSelect.on('change', function() {
        getList(this.value, 'states', statesSelect);
    });

    statesSelect.on('change', function() {
        getList(this.value, 'cities', citiesSelect);
    });

    citiesSelect.on('change', function() {
        getList(this.value, 'universities', universitiesSelect);
    });


//    $select.trigger("change");

    var $registerForm = $("#manager-form").validate({

            // Rules for form validation
            rules : {
                email : { required : true, email : true },

                firstname : { required : true },
                lastname : { required : true },

                universities : {
                    required: true
                },

                countries : {
                    required: true
                },
                states : {
                    required: true
                },
                cities : {
                    required: true
                }

            },

            // Messages for form validation
            messages : {
                email : {
                    required : 'Please enter the email address for the Manager',
                    email : 'Please enter a VALID email address'
                },

                firstname : {
                    required : 'Please enter the Manager first name '
                },

                lastname : {
                    required : 'Please enter the Manager last name'
                },
                universities : {
                    required: 'Please select the Manager University'
                },
                countries : {
                    required: 'Please select the University Country'
                },
                states : {
                    required: 'Please select the University State'
                },
                cities : {
                    required: 'Please select the University City'
                }

            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
});
</script>
@stop
