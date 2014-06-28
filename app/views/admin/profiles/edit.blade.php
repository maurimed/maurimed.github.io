@extends('admin.layouts.master')
@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => ['Users', $user->username, 'Profile']])
@stop
@section('title')
@include('admin.layouts.partials.page-title',['title' => 'Users', 'subtitle' => '> ' . $user->username, 'icon' => 'user'])
@stop
@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            @include('admin.partials.messages')
            @include('admin.partials.form-errors')

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
                    <h2>Users</h2>

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
                        {{ Form::open(['route' => ['dashboard.administrators.profile.update', $user->id],  'method' => 'put', 'files' => true ,'id' => 'administrator-form-edit', 'class' => 'smart-form', 'novalidate' => 'novalidate' ] ) }}
                        <!--                            <header>-->
                        <!--                                Order services-->
                        <!--                            </header>-->

                        <fieldset>

                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">First Name</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        {{ Form::text('firstname', $user->userable->firstname) }}
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Last Name</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        {{ Form::text('lastname', $user->userable->lastname) }}
                                    </label>
                                </section>

                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Username</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        {{ Form::text('username', $user->username) }}
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Personal Email</label>
                                    <label class="input"> <i class="icon-append fa fa-envelope"></i>
                                        {{ Form::email('personal_email', $user->userable->personal_email, ['id'=>'personal_email'] ) }}
                                </section>

                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Password</label>
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        <input type="password" name="password" placeholder="Password" id="password">
                                        <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                                </section>

                                <section class="col col-6">
                                    <label class="label">Confirm password</label>
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        <input type="password" name="passwordConfirm" placeholder="Confirm password">
                                        <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Phone</label>
                                    <label class="input"> <i class="icon-append fa fa-phone"></i>
                                        {{ Form::text('phone', $user->userable->phone, ['id'=>'phone'] ) }}
                                </section>
                                <section class="col col-6">
                                    <label class="label">Personal Phone</label>
                                    <label class="input"> <i class="icon-append fa fa-phone"></i>
                                        {{ Form::text('personal_phone', $user->userable->personal_phone, ['id'=>'personal_phone'] ) }}
                                </section>


                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Profile Image</label>
                                    <label class="input-file">
<!--                                        <i class="icon-append fa fa-picture"></i>-->
                                        {{ Form::file('image') }}
                                    </label>
                                </section>

<!--                                <section class="col col-6">-->
<!--                                    <label class="label">Profile Picture</label>-->
<!--                                    <label class="input" for="file">-->
<!--                                        <div class="input input-file">-->
<!--                                            <span class="button">-->
<!--                                                <input  type="file" id="file" name="file" onchange="this.parentNode.nextSibling.value = this.value">-->
<!--                                                Browse-->
<!--                                            </span>-->
<!--                                            <input  type="text" name="image" placeholder="Upload" readonly="">-->
<!--                                        </div>-->
<!--                                    </label>-->
<!--                                </section>-->

                                <section class="col col-6">
                                    <label class="label">About me</label>
                                    <label class="textarea"><i class="icon-append fa fa-pencil"></i>
                                        {{ Form::textarea('about_me', $user->userable->about_me, ['id'=>'about_me', 'rows'=>6] ) }}
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
                                Update
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
<script src="/admin/js/plugin/jquery-form/jquery-form.min.js"></script>
<script>
    $( document ).ready(function() {
        var $registerForm = $("#administrator-form-edit").validate({

            // Rules for form validation
            rules : {
//                username : {
//                    remote: "/dashboard/checkUsername"
//                },
                email : {
                    required : true,
                    email : true
                },
                password : {
                    minlength : 3,
                    maxlength : 20
                },
                passwordConfirm : {
                    minlength : 3,
                    maxlength : 20,
                    equalTo : '#password'
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
                login : {
                    required : 'Please enter your login'
                },
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                password : {
                    required : 'Please enter your password'
                },
                passwordConfirm : {
                    required : 'Please enter your password one more time',
                    equalTo : 'Please enter the same password as above'
                },
                firstname : {
                    required : 'Please select your first name'
                },

//                username : {
//                    remote : 'This username is already taken'
//                }

            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    });
</script>
@stop