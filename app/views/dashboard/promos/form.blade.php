<fieldset>
    <div class="row">
        <section class="col col-md-6">
            <label class="label">Title</label>
            <label class="input">
                <i class="icon-append fa fa-pencil"></i>
                {{ Form::text('title', null, ['placeholder' => 'Promo Title']) }}
            </label>
        </section>
        <section class="col col-md-6">
            <label class="label">Video</label>
            <label class="input">
                <i class="icon-append fa fa-pencil"></i>
                {{ Form::text('video', null, ['placeholder' => 'Video Url']) }}
            </label>
                <span class="help-block">Youtube and Vimeo Supported   </span>
        </section>
    </div>
    <div class="row">
        <section class="col col-md-6">
            <label class="label">Image</label>
            {{ Form::file('image', null, ['class' => 'btn btn-default']) }}
            <span class="help-text">600 x 300px</span>
        </section>
        <section class="col col-4">
            <label class="label">Language</label>
            <label class="select">
                {{ Form::select('lang', select_lang_options()) }}
                <i></i>
            </label>
        </section>
        <section class="col col-4" >
            <label class="checkbox">
                {{ Form::checkbox('published') }}
                <i></i>I want to publish this promo
            </label>
        </section>
    </div>
</fieldset>
 