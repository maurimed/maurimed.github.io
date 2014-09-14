 <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-200" data-widget-editbutton="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-lock"></i> </span>
                    <h2>Account Settings</h2>
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
                        {{ Form::open(['route' => ['dashboard.users.update', $user->id],  'method' => 'put','id' => 'user-form-edit', 'class' => 'smart-form', 'novalidate' => 'novalidate' ] ) }}
                        {{--{{ Form::open(['route' => ['dashboard.users.update', $user->id],  'method' => 'put', 'files' => true ,'id' => 'administrator-form-edit', 'class' => 'smart-form', 'novalidate' => 'novalidate' ] ) }}--}}
                        {{--<header> Order services </header>--}}

                        <fieldset>



{{--<div class="row">--}}
    {{--<section class="col col-12">--}}
        {{--<label class="label">Profile Image</label>--}}
        {{--<label class="input-file">--}}
            {{--{{ Form::file('image') }}--}}
        {{--</label>--}}
    {{--</section>--}}


    {{--<section class="col col-6">--}}
        {{--<label class="label">First Name</label>--}}
        {{--<label class="input">--}}
            {{--<i class="icon-prepend fa fa-user"></i>--}}
            {{--{{ Form::text('firstname', $user->userable->firstname) }}--}}
        {{--</label>--}}
    {{--</section>--}}
    {{--<section class="col col-6">--}}
        {{--<label class="label">Last Name</label>--}}
        {{--<label class="input">--}}
            {{--<i class="icon-prepend fa fa-user"></i>--}}
            {{--{{ Form::text('lastname', $user->userable->lastname) }}--}}
        {{--</label>--}}
    {{--</section>--}}

{{--</div>--}}
<div class="row">
    <section class="col col-6 ">
        <label class="label">Email</label>
        <label class="input">
            <i class="icon-prepend fa fa-envelope"></i>
            {{ Form::email('email', $user->email) }}
        </label>
    </section>
    <section class="col col-6">
        <label class="label">Username</label>
        <label class="input">
            <i class="icon-prepend fa fa-user"></i>
            {{ Form::text('username', $user->username) }}
        </label>
    </section>


</div>
<div class="row">
    <section class="col col-4">
        <label class="label">Old Password</label>
        <label class="input"> <i class="icon-prepend fa fa-lock"></i>
            <input type="password" name="old_password" placeholder="Old Password" id="old_password">
            <b class="tooltip tooltip-bottom-right">Your old password if you want to change it, otherwise left blank</b>
        </label>
    </section>

    <section class="col col-4">
        <label class="label">New Password</label>
        <label class="input"> <i class="icon-prepend fa fa-lock"></i>
            <input type="password" name="password" placeholder="New Password" id="new_password">
            <b class="tooltip tooltip-bottom-right">Your new password</b>
        </label>
    </section>

    <section class="col col-4">
        <label class="label">Confirm password</label>
        <label class="input"> <i class="icon-prepend fa fa-lock"></i>
            <input type="password" name="password_confirmation" placeholder="Confirm password" id="confirm_password">
            <b class="tooltip tooltip-bottom-right">Confirm your new password</b>
        </label>
    </section>
</div>
{{--<div class="row">--}}
    {{--<section class="col col-3">--}}
        {{--<div class="btn btn-success btn-xs" id="ChangeLocation">Change Location</div>--}}
    {{--</section>--}}
{{--</div>--}}
{{--<div class="row">--}}
    {{--<section class="col col-3">--}}
        {{--<label class="label">Country</label>--}}
        {{--<label class="select">--}}
            {{--<div id="locationContainer">--}}

                {{--{{ Form::select('country', $countries, [], ['id'=>'country', 'style' => 'width:100%'] ) }}--}}
            {{--</div>--}}
            {{--@if(isset($user->userable->city->city_name))--}}
            {{--<div id="countryContainer">--}}
                {{--{{ $user->userable->city->state->country->country_name  }}--}}
            {{--</div>--}}
            {{--@endif--}}
        {{--</label>--}}
    {{--</section>--}}
    {{--<section class="col col-3" >--}}
        {{--<label class="label">State</label>--}}
        {{--<label id="statesLists" class="select">--}}
            {{--@if(isset($user->userable->city->city_name))--}}
                {{--{{ $user->userable->city->state->state_name }}--}}
            {{--@endif--}}

        {{--</label>--}}
    {{--</section>--}}
    {{--<section class="col col-3">--}}
        {{--<label class="label">City</label>--}}
        {{--<label id="citiesLists" class="select">--}}
            {{--@if(isset($user->userable->city->city_name))--}}
                {{--{{ $user->userable->city->city_name  }}--}}
            {{--@endif--}}
        {{--</label>--}}
    {{--</section>--}}


{{--</div>--}}





















                            {{--<div class="row">--}}
                                {{--<section class="col col-6">--}}
                                    {{--<label class="label">Phone</label>--}}
                                    {{--<label class="input"> <i class="icon-append fa fa-phone"></i>--}}
                                        {{--{{ Form::text('phone', $user->userable->phone, ['id'=>'phone'] ) }}--}}
                                    {{--</label>--}}
                                {{--</section>--}}

                                {{--<section class="col col-6">--}}
                                    {{--<label class="label">Personal Email</label>--}}
                                    {{--<label class="input"> <i class="icon-append fa fa-envelope"></i>--}}
                                        {{--{{ Form::email('personal_email', $user->userable->personal_email, ['id'=>'personal_email'] ) }}--}}
                                    {{--</label>--}}

                                {{--</section>--}}
                            {{--</div>--}}

                            {{--<div class="row">--}}
                                {{--<section class="col col-6">--}}
                                    {{--<label class="label">Personal Phone</label>--}}
                                    {{--<label class="input"> <i class="icon-append fa fa-phone"></i>--}}
                                        {{--{{ Form::text('personal_phone', $user->userable->personal_phone, ['id'=>'personal_phone'] ) }}--}}
                                    {{--</label>--}}
                                {{--</section>--}}

                                {{--<section class="col col-6">--}}
                                    {{--<label class="label">About me</label>--}}
                                    {{--<label class="textarea"><i class="icon-append fa fa-pencil"></i>--}}
                                        {{--{{ Form::textarea('about_me', $user->userable->about_me, ['id'=>'about_me', 'rows'=>6] ) }}--}}
                                    {{--</label>--}}
                                {{--</section>--}}
                            {{--</div>--}}

                        </fieldset>

                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Update Account Settings
                            </button>
                        </footer>
                        {{ Form::close() }}
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div>
            <!-- end widget -->



