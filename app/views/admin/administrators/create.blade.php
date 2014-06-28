@extends('admin.layouts.master')

@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => ['Users','Administrators', 'List']])
@stop

@section('title')
@include('admin.layouts.partials.page-title',['title' => 'Administrators', 'subtitle' => '> List', 'icon' => 'user'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            @include('admin.partials.messages')
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
                    <h2>Administrators</h2>

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
                        {{ Form::open(['route' => 'dashboard.administrators.store' ,'id' => 'administrator-form', 'class' => 'smart-form', 'novalidate' => 'novalidate' ] ) }}
<!--                            <header>-->
<!--                                Order services-->
<!--                            </header>-->

                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="input">
                                            <i class="icon-append fa fa-user"></i>
                                            {{ Form::text('firstname', null, ['placeholder' => 'First Name']) }}
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="input">
                                            <i class="icon-append fa fa-user"></i>
                                            {{ Form::text('lastname', null, ['placeholder' => 'Last Name']) }}
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="input">

                                            <i class="icon-append fa fa-envelope-o"></i>
                                            {{ Form::email('email', null, ['placeholder' => 'Email']) }}
                                        </label
                                    </section>
                                </div>

                            </fieldset>

                            <!--<fieldset>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="select">
                                            <select name="interested">
                                                <option value="0" selected="" disabled="">Interested in</option>
                                                <option value="1">design</option>
                                                <option value="1">development</option>
                                                <option value="2">illustration</option>
                                                <option value="2">branding</option>
                                                <option value="3">video</option>
                                            </select> <i></i> </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="select">
                                            <select name="budget">
                                                <option value="0" selected="" disabled="">Budget</option>
                                                <option value="1">less than 5000$</option>
                                                <option value="2">5000$ - 10000$</option>
                                                <option value="3">10000$ - 20000$</option>
                                                <option value="4">more than 20000$</option>
                                            </select> <i></i> </label>
                                    </section>
                                </div>

                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                            <input type="text" name="startdate" id="startdate" placeholder="Expected start date">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                            <input type="text" name="finishdate" id="finishdate" placeholder="Expected finish date">
                                        </label>
                                    </section>
                                </div>

                                <section>
                                    <div class="input input-file">
                                        <span class="button"><input id="file2" type="file" name="file2" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">
                                    </div>
                                </section>

                                <section>
                                    <label class="textarea"> <i class="icon-append fa fa-comment"></i>
                                        <textarea rows="5" name="comment" placeholder="Tell us about your project"></textarea>
                                    </label>
                                </section>
                            </fieldset>-->
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
<script src="js/plugin/jquery-form/jquery-form.min.js"></script>
<script>
    $( document ).ready(function() {
        var $registerForm = $("#administrator-form").validate({

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
