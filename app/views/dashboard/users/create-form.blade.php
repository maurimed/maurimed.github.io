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
            </label>
        </section>
    </div>

</fieldset>