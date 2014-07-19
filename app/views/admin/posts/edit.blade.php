<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        &times;
    </button>
    <h4 class="modal-title" id="myModalLabel">Update Post</h4>
</div>
{{ Form::model($post, ['url' => 'dashboard/posts/'.$post->id, 'method' => 'put']) }}

<div class="modal-body">
<fieldset>
    <div class="row">
        <section class="col-md-6">
            <div class="form-group">
                {{ Form::label('title', 'Post Title') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
                {{ $errors->first('title', '<span style="width:100%" class="alert-danger">:message</span>')}}
            </div>
        </section>
        <section class="col-md-6">
            <label class="checkbox">
                {{ Form::hidden('published', 0) }}
                {{ Form::checkbox('published', true) }}
                <i></i>Published
            </label>
        </section>
    </div>
    <div class="row">
        <section class="col col-12">
            <textarea id="post-body" name="body" > {{ $post->body }} </textarea>
            {{$errors->first('body', '<span style="width:100%" class="alert-danger">:message</span>')}}

        </section>
        <br/>
        <section class="col-md-6">
            <div class="form-group">
                {{ Form::hidden('image', '') }}
                {{ Form::file('image', null, ['class' => 'btn btn-default']) }}
                {{$errors->first('image', '<span style="width:100%" class="alert-danger">:message</span>')}}
                <span class="help-text">1140 x 460px</span>
            </div>
        </section>
        <section class="col col-4">
            <label  class="select pull-right">
                {{ Form::select('lang', [ "es" => "Español", "en" => "English" ], $post->lang ) }}
                <i></i>
            </label>

        </section>
    </div>

</fieldset>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">
        Cancel
    </button>
    <button type="submit" class="btn btn-primary">
        Update Post

    </button>
</div>

<script>

    $(".modal-body").on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
    $(".modal-body").on("shown.bs.modal", function(){
    });
</script>

<script>
    $( document ).ready(function() {

        tinymce.init({selector:'textarea'});


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
{{ Form::close() }}