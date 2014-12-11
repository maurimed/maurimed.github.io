<div class="form login-form">
    <!--                    <div class="head main-text-color">-->
    <!--                        I'm a returning customer-->
    <!--                    </div>-->
    <br/>
    {{ Form::open(['route' => 'sessions.store']) }}
    <fieldset>
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null ,[ 'class' => 'form-control', 'required' => 'required', 'id' => 'email', 'autofocus' ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', [ 'class' => 'form-control', 'required' => 'required', 'id' => 'password' ]) }}
            <small><a href="#">Forgot your password?</a></small>

        </div>
        <!--                            <div class="form-group">-->
        <!--                                <label for="remember" class="checkbox"></label>-->
        <!--                            </div>-->

        <div class="form-group">
            {{ Form::submit('Login', [ 'class' => 'button solid blue md full form-control' ]) }}
        </div>
    </fieldset>
    {{ Form::close() }}

</div>