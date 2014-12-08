@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Posts', 'Create']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'Posts', 'subtitle' => '> Create', 'icon' => 'pencil'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-13" data-widget-editbutton="false"  data-widget-deletebutton="false">

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
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        {{ Form::file('image', null, ['class' => 'btn btn-default']) }}
                                                <span class="help-text">1140 x 460px</span>
                                    </section>


                                </div>
                                <div class="row">
                                    <section class="col col-12">
                                            <textarea  id="post-body" name="body" class="wysiwyg"> </textarea>


                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="select">
                                        {{ Form::select('lang', select_lang_options()) }}
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
<script src="/backend/js/plugin/jquery-form/jquery-form.min.js"></script>

<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
    $( document ).ready(function() {

        tinymce.init({selector:'textarea'});

//        $('.wysiwyg').raptor();

//        var bodyPost = $('#post-body');

//        $('.note-editable').bind("DOMSubtreeModified",function(){
//            bodyPost.text($(this).html());
//        });
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
