{{ Form::hidden('zip') }}

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
        <label class="label">Profile Image</label>
        <label class="input-file">
            {{ Form::file('image') }}
        </label>
    </section>

</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Password</label>
        <label class="input"> <i class="icon-append fa fa-lock"></i>
            <input type="password" name="password" placeholder="Password" id="password">
            <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
        </label>
    </section>

    <section class="col col-6">
        <label class="label">Confirm password</label>
        <label class="input"> <i class="icon-append fa fa-lock"></i>
            <input type="password" name="passwordConfirm" placeholder="Confirm password">
            <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
        </label>
    </section>
</div>
<div class="row">
    <section class="col col-3">
        <div class="btn btn-success btn-xs" id="ChangeLocation">Change Location</div>
    </section>
</div>
<div class="row">
    <section class="col col-3">
        <label class="label">Country</label>
        <label class="select">
            <div id="locationContainer">

                {{ Form::select('country', $countries, [], ['id'=>'country', 'style' => 'width:100%'] ) }}
            </div>
            @if(isset($user->userable->city->city_name))
            <div id="countryContainer">
                {{ $user->userable->city->state->country->country_name  }}
            </div>
            @endif
        </label>
    </section>
    <section class="col col-3" >
        <label class="label">State</label>
        <label id="statesLists" class="select">
            @if(isset($user->userable->city->city_name))
                {{ $user->userable->city->state->state_name }}
            @endif

        </label>
    </section>
    <section class="col col-3">
        <label class="label">City</label>
        <label id="citiesLists" class="select">
            @if(isset($user->userable->city->city_name))
                {{ $user->userable->city->city_name  }}
            @endif
        </label>
    </section>


</div>