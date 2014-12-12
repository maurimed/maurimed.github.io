@extends('site.layouts.master')
@section('content')
    @include('site.layouts.partials.components.breadcums', ['title' => trans('contact.title')])
    <div style="padding-top:0" class="container">
        <div class="row">
            <div class="col-md-12 main-el">
                <h3 class="text-center text-muted">{{ trans('contact.subtitle') }}</h3>
                <div class="dividing sep-line"></div>
                <div class="element row">
                    <div class="col-lg-8 col-md-8" >
                        <div class="message-form">
                        {{Form::open(['route'=> 'contact.store', 'id'=> 'message-form'])}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::text('firstname', null, ['class' => 'form-control', 'id' => 'firstname', 'placeholder' => 'Your First Name']) }}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::text('lastname', null, ['class' => 'form-control', "id" => "lastname", 'placeholder' => 'Your Last Name']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Your Email']) }}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::text('skype', null, ['class' => 'form-control', 'placeholder' => 'Your Skype']) }}
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::text('home_phone', null, ['class' => 'form-control', 'placeholder' => 'Your Home Phone']) }}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::text('cell_phone', null, ['class' => 'form-control', 'placeholder' => 'Your Cell Phone']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::textarea('message', null, ['class' => 'form-control',"placeholder" => "Enter your message" ]) }}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::submit('Send Message', ["class" => "btn btn-custom-blue"]) }}
                                    </div>
                                </div>
                            </div>


                        {{Form::close()}}
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="promo-video-wrapper">
                            <iframe class="center-block"  height="230" src="https://www.youtube.com/embed/NuTOU5n0d0M"> </iframe>
                        </div>
                        <div class="contact-location main-el">
                            <div class="sep-heading-container shc4 clearfix">
                                <h4>General Contact</h4>
                                <div class="sep-container">
                                    <div class="the-sep"></div>
                                </div>
                            </div>
                            <p>{{ trans('contacts.address') }}</p>

                            <div class="phone">
                                <span class="bold field"><i class="fa fa-phone text-color"></i> </span>&nbsp;  <a href="tel:{{trans('contacts.phone')}}" class="main-text-color">{{ trans('contacts.phone') }}</a>
                            </div>

                            <div class="mail">
                                <span class="bold field"> <i class="fa fa-envelope text-color"></i></span> &nbsp;<a href="mailto:{{ trans('contacts.email') }}" class="main-text-color">{{ trans('contacts.email') }}</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('scripts')
{{--<script src></script>--}}
<script src="/site/vendors/fitvids/jquery.fitvids.js"></script>
<script src="/backend/js/plugin/jquery-validate/jquery.validate.min.js"></script>


<script>
    $(document).ready(function(){
        $(".promo-video-wrapper").fitVids();
            var $email = $('#contact_email'),
            $phone = $('#home_phone');
        $("#message-form").validate({
                    rules : {

                        firstname : { required: true},
                        lastname : { required: true},
                        skype : { required: true},
                        message : { required: true},
                        home_phone : { required: true},
                        cell_phone : { required: true},
                        email : {
                            required : true,
                            email : true
                        }


                    },

                    // Messages for form validation
//                    messages : {
//                        firstname : { required: $('#firstname').data('error')},
//                        email : {
//                            required : $email.data('error'),
//                            email : $email.data('invalid')
//                        },
//                        phone : {
//                            required : $phone.data('error'),
//                            number: $phone.data('number')
//                        },


//                    },

                    // Do not change code below
                    errorPlacement : function(error, element) {
                        error.insertAfter(element.parent());
                    }
                });
    });

</script>
@stop
