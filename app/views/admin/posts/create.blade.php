@extends('admin.layouts.master')

@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => ['Posts', 'Create']])
@stop

@section('title')
@include('admin.layouts.partials.page-title',['title' => 'Posts', 'subtitle' => '> Create', 'icon' => 'pencil'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
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
                    <h2>Posts</h2>

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
                        {{ Form::open(['route' => 'dashboard.posts.store' ,'id' => 'post-form', 'class' => 'smart-form',  'novalidate' => 'novalidate', 'files' => true ] ) }}
<!--                            <header>-->
<!--                                Order services-->
<!--                            </header>-->

                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="input">
                                            <i class="icon-append fa fa-pencil"></i>
                                            {{ Form::text('title', null, ['placeholder' => 'Post Title']) }}
                                            {{$errors->first('title', '<span style="width:100%" class="alert-danger">:message</span>')}}
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                            {{ Form::file('image', null, ['class' => 'btn btn-default']) }}
                                            {{$errors->first('image', '<span style="width:100%" class="alert-danger">:message</span>')}}
                                                <span class="help-text">1140 x 460px</span>
                                    </section>


                                </div>
                                <div class="row">
                                    <section class="col col-12">
                                            <textarea id="post-body" name="body" class="summernote"></textarea>
                                            {{$errors->first('body', '<span style="width:100%" class="alert-danger">:message</span>')}}

                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="select">
                                        {{ Form::select('lang', [ "es" => "Español", "en" => "English" ]) }}
                                            <i></i>
                                        </label>

                                    </section>
                                    <section class="col col-4" >
                                        <label class="checkbox">
                                            {{ Form::hidden('published', 0) }}
                                            {{ Form::checkbox('published', true) }}
                                            <i></i>I want to publish this post
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
<script src="/admin/js/plugin/jquery-form/jquery-form.min.js"></script>
<script src="/admin/js/plugin/summernote/summernote.min.js"></script>
<script>
    $( document ).ready(function() {

        $('.summernote').summernote({
            height : 180,
            focus : false,
            tabsize : 2
        });

        var bodyPost = $('#post-body');

        $('.note-editable').bind("DOMSubtreeModified",function(){
            bodyPost.text($(this).html());
        });
        var $postForm = $("#post-form").validate({

            // Rules for form validation
            rules : {
                title : { required : true},
                body : {required : true}
            },

            // Messages for form validation
            messages : {

                title : { required : 'Please enter the title for your post'},
                body : { required : 'Please enter the body of your post'}

            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    });
</script>
@stop
