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
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                 <!-- Widget ID (each widget will need unique ID)-->
                            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-201" data-widget-editbutton="false">
                                <header>
                                    <span class="widget-icon"> <i class="fa fa-lock"></i> </span>
                                    <h2>Personal Info</h2>
                                </header>
                                <!-- widget div-->
                                <div>
                                    <!-- widget edit box -->
                                    <div class="jarviswidget-editbox"> <!-- This area used as dropdown edit box --> </div>
                                    <!-- end widget edit box -->

                                    <!-- widget content -->
                                    <div class="widget-body no-padding">
                                        {{ Form::open(['route' => ['dashboard.administrators.update', $administrator->userable->id],  'method' => 'put', 'files' => true ,'id' => 'administrator-form-edit', 'class' => 'smart-form', 'novalidate' => 'novalidate' ] ) }}
                                        {{--<header> Order services </header>--}}
                                        <fieldset>



                <div class="row">


                    <section class="col col-6">
                        <label class="label">First Name</label>
                        <label class="input">
                            <i class="icon-prepend fa fa-user"></i>
                            {{ Form::text('firstname', $administrator->userable->firstname) }}
                        </label>
                    </section>
                    <section class="col col-6">
                        <label class="label">Last Name</label>
                        <label class="input">
                            <i class="icon-prepend fa fa-user"></i>
                            {{ Form::text('lastname', $administrator->userable->lastname) }}
                        </label>
                    </section>

                </div>
                <div class="row">
                    <section class="col col-6">
                        <label class="label">Personal Email</label>
                        <label class="input">
                            <i class="icon-prepend fa fa-envelope"></i>
                            {{ Form::text('personal_email', $administrator->userable->personal_email) }}
                        </label>
                    </section>
                    <section class="col col-6">
                        <label class="label">Phone</label>
                        <label class="input">
                            <i class="icon-prepend fa fa-phone"></i>
                            {{ Form::text('personal_phone', $administrator->userable->personal_phone) }}
                        </label>
                    </section>
                </div>

                <div class="row">
                    <section class="col col-4" >
                        <label class="label">Country  </label>
                        <label class="input">
                            <select name="countries" data-selected="{{$administrator->userable->city->state->country->country_code}}" data-placeholder="Select the country" id="countriesSelect" style="width:100%" required ><option></option> </select>
                        </label>
                    </section>
                    <section class="col col-4" >
                        <label class="label">State</label>
                        <label class="input">
                            <select name="states" data-selected="{{$administrator->userable->city->state->id}}" data-placeholder="Select the state" id="statesSelect" style="width:100%" required > <option></option> </select>
                        </label>
                    </section>
                    <section class="col col-4" >
                        <label class="label">City</label>
                        <label class="input">
                            <select name="cities" data-selected="{{$administrator->userable->city->id}}" data-placeholder="Select the City" id="citiesSelect" style="width:100%" required > <option></option> </select>
                        </label>
                    </section>


                    <br/><br/>
                </div>

                <div class="row">
                    <section class="col col-6">
                        <label class="label">Address</label>
                        <label class="input"> <i class="icon-append fa fa-map-marker"></i>
                            {{ Form::text('address', $administrator->userable->address, ['id'=>'address'] ) }}
                        </label>
                    </section>

                    <section class="col col-6">
                       <label class="label">Profile Image</label>
                       <label class="input-file">
                           {{ Form::file('image') }}
                       </label>
                   </section>

                   </div>
                   <div class="row">
                    <section class="col col-12">
                        <label class="label">About me</label>
                        <label class="textarea"><i class="icon-append fa fa-pencil"></i>
                            {{ Form::textarea('about_me', $administrator->userable->about_me, ['id'=>'about_me', 'rows'=>4, 'style' => 'width:100%'] ) }}
                        </label>
                    </section>
                </div>
                <br/>
            </fieldset>

            <footer>
                <button type="submit" class="btn btn-primary">
                    Update Personal Info
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
<script src="/backend/js/plugin/select2/select2.min.js"></script>

<script src="/backend/js/plugin/jquery-form/jquery-form.min.js"></script>
<script>
    $( document ).ready(function() {


    var countriesSelect = $('#countriesSelect'),
        statesSelect = $('#statesSelect'),
        citiesSelect = $('#citiesSelect');

    countriesSelect.select2();
    statesSelect.select2();
    citiesSelect.select2();


    function getList(id, url, select, selected){
        $.ajax({
            type: "GET",
            url: '/api/' + url,
            data: { 'id' : id }
        }).done(function(data) {
            select.find('option').remove();
            select.append('<option></option>');

            $.each(data,function(key, value) {
                select.append('<option value=' + key + '>' + value + '</option>');
            });
        }).success(function() {
             select.select2("val", selected);
        });
    }

    var countrySelected = countriesSelect.data('selected'),
        stateSelected = statesSelect.data('selected'),
        citySelected = citiesSelect.data('selected');


    countriesSelect.on('change', function() {
        getList(this.value, 'states', statesSelect, stateSelected);
    });

    statesSelect.on('change', function() {
        getList(this.value, 'cities', citiesSelect, citySelected);
    });

    citiesSelect.on('change', function() {
           alert(this.value);
        });

    $.ajax({
        type: "GET",
        url: '/api/countries'
    }).done(function(data) {
        $.each(data,function(key, value) {
            countriesSelect.append('<option value=' + key + '>' + value + '</option>');
        });

    }).success(function() {
        countriesSelect.select2("val", countrySelected);
        getList(countriesSelect.val(), 'states', statesSelect, stateSelected);
    });

    $( document ).ajaxComplete(function( event, xhr, settings ) {
      if ( settings.url === "/api/countries" )
      {

      }
      else if ( settings.url === "/api/states?id=" + countrySelected)
      {

             getList(stateSelected, 'cities', citiesSelect, citySelected);
      }
      else if ( settings.url === "/api/cities*" )
      {

      }
    });


//                $.ajax({
//                    type: "GET",
//                    url: '/api/cities' ,
//                    data: { 'id' : statesSelect.val() }
//                }).done(function(data) {
//                    citiesSelect.find('option').remove();
//                    citiesSelect.append('<option></option>');
//
//                    $.each(data,function(key, value) {
//                        citiesSelect.append('<option value=' + key + '>' + value + '</option>');
//                    });
//                }).success(function() {
//                     citiesSelect.select2("val", citySelected);
//
//                });

//        $("#country").select2({
//            placeholder: "Select a Country",
//            allowClear: true
//        });
//
//        $("#locationContainer").css('display', 'none');
//        $("#ChangeLocation").click(function() {
//
//            $("#locationContainer").show( 300 );
//            $("#countryContainer").remove( );
//            $(this).remove( );
//
//        });

//        $("select#country").on('change', function() {
//            var val = this.value;
//            console.log(val);
//            $.ajax({
//                type: "GET",
//                url: '/api/states',
//                data: { 'country_code' : val }
//            }).done(function($data) {
//
//                $('#statesLists').html($data);
//                $('#citiesLists').html('<div class=note > Please select the state first </div>');
//                $('#zipsLists').html('<div class=note > Please select the city first </div>');
//
//
//            });
//
//        });

//        var $registerForm = $("#administrator-form-edit").validate({
//
//            // Rules for form validation
//            rules : {
////                username : {
////                    remote: "/dashboard/checkUsername"
////                },
//                email : {
//                    required : true,
//                    email : true
//                },
//                password : {
//                    minlength : 3,
//                    maxlength : 20
//                },
//                passwordConfirm : {
//                    minlength : 3,
//                    maxlength : 20,
//                    equalTo : '#password'
//                },
//                firstname : {
//                    required : true
//                },
//                lastname : {
//                    required : true
//                }
//
//            },
//
//            // Messages for form validation
//            messages : {
//                login : {
//                    required : 'Please enter your login'
//                },
//                email : {
//                    required : 'Please enter your email address',
//                    email : 'Please enter a VALID email address'
//                },
//                password : {
//                    required : 'Please enter your password'
//                },
//                passwordConfirm : {
//                    required : 'Please enter your password one more time',
//                    equalTo : 'Please enter the same password as above'
//                },
//                firstname : {
//                    required : 'Please select your first name'
//                },
//
////                username : {
////                    remote : 'This username is already taken'
////                }
//
//            },
//
//            // Do not change code below
//            errorPlacement : function(error, element) {
//                error.insertAfter(element.parent());
//            }
//        });
    });
</script>
@stop