<div class="row">
    <section class="col col-6">
        <label class="label">Phone</label>
        <label class="input"> <i class="icon-append fa fa-phone"></i>
            {{ Form::text('phone', $user->userable->phone, ['id'=>'phone'] ) }}
        </label>
    </section>

    <section class="col col-6">
        <label class="label">Personal Email</label>
        <label class="input"> <i class="icon-append fa fa-envelope"></i>
            {{ Form::email('personal_email', $user->userable->personal_email, ['id'=>'personal_email'] ) }}
        </label>

    </section>



</div>

<div class="row">
    <section class="col col-6">
        <label class="label">Personal Phone</label>
        <label class="input"> <i class="icon-append fa fa-phone"></i>
            {{ Form::text('personal_phone', $user->userable->personal_phone, ['id'=>'personal_phone'] ) }}
        </label>

    </section>

    <section class="col col-6">
        <label class="label">About me</label>
        <label class="textarea"><i class="icon-append fa fa-pencil"></i>
            {{ Form::textarea('about_me', $user->userable->about_me, ['id'=>'about_me', 'rows'=>6] ) }}
    </section>
</div>