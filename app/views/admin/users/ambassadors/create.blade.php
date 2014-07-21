
@extends('admin.layouts.master')

@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => ['Users','Ambassadors', 'List']])
@stop

@section('title')
@include('admin.layouts.partials.page-title',['title' => 'Ambassadors', 'subtitle' => '> List', 'icon' => 'user'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            @include('admin.partials.messages')
            @include('admin.partials.form-errors')
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-101" data-widget-editbutton="false">

                <header>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2>Ambassadors</h2>

                </header>

                <!-- widget div-->
                <div>

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body no-padding">
                        {{ Form::open(['route' => 'dashboard.ambassadors.store' ,'id' => 'ambassador-form', 'class' => 'smart-form', 'novalidate' => 'novalidate' ] ) }}

                            @include('admin.users.create-form')

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
<script src="js/plugin/jquery-form/jquery-form.min.js"></script>
<script>
    $( document ).ready(function() {
        var $registerForm = $("#ambassador-form").validate({

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
                    required : 'Please enter the username for the Ambassador'
                },
                email : {
                    required : 'Please enter the email address for the Ambassador',
                    email : 'Please enter a VALID email address '
                },


                firstname : {
                    required : 'Please enter the first name for the Ambassador'
                },
                lastname : {
                    required : 'Please enter the last name for the Ambassador'
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
