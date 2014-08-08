<div class="hidden-xs hidden-sm">
    <div class="landing-form-container">
        <div class="menu-services left-menu">
            <div class="element alt-text-color op1"> {{ link_to_route('services.academic',
                trans('menu.services.academic_scholarships') ) }}
            </div>
            <div class="element alt-text-color op1">{{ link_to_route('services.athletic',
                trans('menu.services.athletic_scholarships')) }}
            </div>
            <div class="element alt-text-color op1">{{ link_to_route('services.english',
                trans('menu.services.english_courses_esl')) }}
            </div>
            <div class="element alt-text-color op1">{{ link_to_route('services.mentors',
                trans('menu.services.educational_mentors')) }}
            </div>
            <div class="element alt-text-color op1">{{ link_to_route('services.coaching',
                trans('menu.services.career_coaching')) }}
            </div>
            <div class="element alt-text-color op1">{{ link_to_route('services.internships',
                trans('menu.services.internships')) }}
            </div>
            <div class="element alt-text-color op1">{{ link_to_route('services.bonus',
                trans('menu.services.bonus_semester_at_sea')) }}
            </div>
        </div>
        <div class="form form-2 landing-form">
            <div class="loading-locations">
                <img src="/site/img/loader.gif">
            </div>
            <div class="head bold landing-form-text">
                <p> {{ trans('home.form.title') }} </p>
            </div>
            {{ Form::open(['route' => 'subscribers.store']) }}

            {{$errors->first('name', '<span style="width:100%" class="alert-danger">:message</span>')}}
            <div class="input-group col-md-6 col-sm-6 pull-left">
                {{ Form::text('firstname', null, [ 'placeholder' =>
                trans('home.form.placeholders.firstname'), 'class' => 'form-control' ]) }}
            </div>

            {{$errors->first('name', '<span style="width:100%" class="alert-danger">:message</span>')}}
            <div class="input-group col-md-6 col-sm-6 pull-left">
                {{ Form::text('lastname', null, [ 'placeholder' => trans('home.form.placeholders.lastname'),
                'class' => 'form-control' ]) }}
            </div>

            {{$errors->first('email', '<span style="width:100%" class="alert-danger">:message</span>')}}
            <div class="input-group col-md-12 col-sm-12 c-border-top">
                {{ Form::email('email', null, [ 'placeholder' => trans('home.form.placeholders.email'),
                'class' => 'form-control' ]) }}
            </div>

            {{$errors->first('phone', '<span style="width:100%" class="alert-danger">:message</span>')}}
            <div class="input-group col-md-12 col-sm-12 c-border-top">
                {{ Form::text('phone', null, [ 'placeholder' => trans('home.form.placeholders.phone'),
                'class' => 'form-control' ]) }}
            </div>

            <div id="countries">

            </div>

            <div class="input-group col-md-12 col-sm-12 c-border-top" id="statesLists">
                <select class="form-control">
                    <option value="">{{ trans('home.form.placeholders.state') }}</option>
                </select>
            </div>

            <div class="input-group col-md-12 col-sm-12 c-border-top" id="citiesLists">
                <select class="form-control">
                    <option value="">{{ trans('home.form.placeholders.city') }}</option>
                </select>
            </div>
            <div class="input-group col-md-12 col-sm-12 c-border-top">
                <select name="interest" class="form-control">
                    <option value="">{{ trans('home.form.placeholders.interest.title') }}</option>
                    <option value="{{ Str::slug(trans('home.form.placeholders.interest.opt1')) }}">
                        {{ trans('home.form.placeholders.interest.opt1') }}
                    </option>
                    <option value="{{ Str::slug(trans('home.form.placeholders.interest.opt2')) }}">
                        {{ trans('home.form.placeholders.interest.opt2') }}
                    </option>
                    <option value="{{ Str::slug(trans('home.form.placeholders.interest.opt3')) }}">
                        {{ trans('home.form.placeholders.interest.opt3') }}
                    </option>
                    <option value="{{ Str::slug(trans('home.form.placeholders.interest.opt4')) }}">
                        {{ trans('home.form.placeholders.interest.opt4') }}
                    </option>
                    <option value="{{ Str::slug(trans('home.form.placeholders.interest.opt5')) }}">
                        {{ trans('home.form.placeholders.interest.opt5') }}
                    </option>
                    <option value="{{ Str::slug(trans('home.form.placeholders.interest.opt6')) }}">
                        {{ trans('home.form.placeholders.interest.opt6') }}
                    </option>
                </select>
            </div>
            <div class="input-group col-md-12 col-sm-12 c-border-top">
                <select name="find_us" class="form-control">
                    <option value="">{{ trans('home.form.placeholders.find_us.title') }}</option>
                    <optgroup label="{{ trans('home.form.placeholders.find_us.opt1.label') }}">
                        <option
                            value="{{ Str::slug(trans('home.form.placeholders.find_us.opt1.opt1')) }}">
                            {{ trans('home.form.placeholders.find_us.opt1.opt1') }}
                        </option>
                        <option
                            value="{{ Str::slug(trans('home.form.placeholders.find_us.opt1.opt2')) }}">
                            {{ trans('home.form.placeholders.find_us.opt1.opt2') }}
                        </option>
                        <option
                            value="{{ Str::slug(trans('home.form.placeholders.find_us.opt1.opt3')) }}">
                            {{ trans('home.form.placeholders.find_us.opt1.opt3') }}
                        </option>
                        <option
                            value="{{ Str::slug(trans('home.form.placeholders.find_us.opt1.opt4')) }}">
                            {{ trans('home.form.placeholders.find_us.opt1.opt4') }}
                        </option>
                    </optgroup>
                    <option value="{{ Str::slug(trans('home.form.placeholders.find_us.opt2')) }}">
                        {{ trans('home.form.placeholders.find_us.opt2') }}
                    </option>
                    <option value="{{ Str::slug(trans('home.form.placeholders.find_us.opt3')) }}">
                        {{ trans('home.form.placeholders.find_us.opt3') }}
                    </option>
                    <option value="{{ Str::slug(trans('home.form.placeholders.find_us.opt4')) }}">
                        {{ trans('home.form.placeholders.find_us.opt4') }}
                    </option>
                </select>
            </div>
            <div class="input-group col-md-12 col-sm-12 c-border-top">
                <select name="age" class="form-control">
                    <option value="">{{ trans('home.form.placeholders.age.title') }}</option>
                    <option
                        value="{{ Str::slug(trans('home.form.placeholders.age.opt1')) }}">
                        {{ trans('home.form.placeholders.age.opt1') }}
                    </option>
                    <option
                        value="{{ Str::slug(trans('home.form.placeholders.age.opt2')) }}">
                        {{ trans('home.form.placeholders.age.opt2') }}
                    </option>
                    <option
                        value="{{ Str::slug(trans('home.form.placeholders.age.opt3')) }}">
                        {{ trans('home.form.placeholders.age.opt3') }}
                    </option>
                    <option
                        value="{{ Str::slug(trans('home.form.placeholders.age.opt4')) }}">
                        {{ trans('home.form.placeholders.age.opt4') }}
                    </option>
                    <option
                        value="{{ Str::slug(trans('home.form.placeholders.age.opt5')) }}">
                        {{ trans('home.form.placeholders.age.opt5') }}
                    </option>
                    <option
                        value="{{ Str::slug(trans('home.form.placeholders.age.opt6')) }}">
                        {{ trans('home.form.placeholders.age.opt6') }}
                    </option>
                </select>
            </div>
            <div class="btns">

                {{ Form::submit(trans('home.form.text_button'), [ 'class' => 'button solid blue submit md form-control'
                ]) }}
            </div>
            <div class="shadow"></div>
            {{ Form::close() }}
        </div>
    </div>
</div>

