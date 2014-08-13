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
            {{ Form::open(['route' => 'subscribers.store', 'id' => 'landing-form']) }}

            {{$errors->first('firstname', '<em class="invalid">:message</em>')}}
            <div class="input-group col-md-6 col-sm-6 pull-left">
                {{ Form::text('firstname', null, [ 'placeholder' =>
                trans('home.form.inputs.firstname'), 'class' => 'form-control', 'id' => 'firstname', 'data-error' => trans('home.form.errors.firstname') ]) }}
            </div>

            <div class="input-group col-md-6 col-sm-6 pull-left">
                {{ Form::text('lastname', null, [ 'placeholder' => trans('home.form.inputs.lastname'),
                'class' => 'form-control' , 'id' => 'lastname', 'data-error' => trans('home.form.errors.lastname')]) }}
            </div>
            {{$errors->first('lastname', '<em class="invalid">:message</em>')}}

            {{$errors->first('email', '<em class="invalid">:message</em>')}}
            <div class="input-group col-md-12 col-sm-12 c-border-top">
                {{ Form::email('email', null, [ 'placeholder' => trans('home.form.inputs.email'),
                'class' => 'form-control' , 'id' => 'e-mail', 'data-error' => trans('home.form.errors.email.required'), 'data-invalid' => trans('home.form.errors.email.invalid')  ]) }}
            </div>

            {{$errors->first('phone', '<em class="invalid">:message</em>')}}
            <div class="input-group col-md-12 col-sm-12 c-border-top">
                {{ Form::text('phone', null, [ 'placeholder' => trans('home.form.inputs.phone'),
                'class' => 'form-control' , 'id' => 'phone', 'data-error' => trans('home.form.errors.phone.required') , 'data-number' => trans('home.form.errors.phone.number') ]) }}
            </div>
            {{$errors->first('country', '<em class="invalid">:message</em>')}}


            <div id="countries" data-error="{{trans('home.form.errors.country')}}" ></div>



            {{$errors->first('state', '<em style="margin-top: 40px" class="invalid">:message</em>')}}
            <div class="input-group col-md-12 col-sm-12 c-border-top" id="statesLists">
                <select class="form-control" id="states"  data-error="{{trans('home.form.errors.state')}}" >
                    <option value="">{{ trans('home.form.inputs.state') }}</option>
                </select>
            </div>


            {{$errors->first('interest', '<em class="invalid">:message</em>')}}

            <div class="input-group col-md-12 col-sm-12 c-border-top">

                {{ Form::select('interest', [
                        '' => trans('home.form.inputs.interest.title'),
                        Str::slug(trans('home.form.inputs.interest.opt1')) =>  trans('home.form.inputs.interest.opt1'),
                        Str::slug(trans('home.form.inputs.interest.opt2')) =>  trans('home.form.inputs.interest.opt2'),
                        Str::slug(trans('home.form.inputs.interest.opt3')) =>  trans('home.form.inputs.interest.opt3'),
                        Str::slug(trans('home.form.inputs.interest.opt4')) =>  trans('home.form.inputs.interest.opt4'),
                        Str::slug(trans('home.form.inputs.interest.opt5')) =>  trans('home.form.inputs.interest.opt5'),
                        Str::slug(trans('home.form.inputs.interest.opt6')) =>  trans('home.form.inputs.interest.opt6'),
                        Str::slug(trans('home.form.inputs.interest.opt7')) =>  trans('home.form.inputs.interest.opt7'),

                        ], null, ['class' => 'form-control', 'id' => 'interest', 'data-error' => trans('home.form.errors.interest')] ) }}


            </div>
            {{$errors->first('find_us', '<em class="invalid">:message</em>')}}

            <div class="input-group col-md-12 col-sm-12 c-border-top">
                {{ Form::select('find_us', [
                            '' => trans('home.form.inputs.find_us.title'),
                            trans('home.form.inputs.find_us.opt1.label') => [
                                Str::slug(trans('home.form.inputs.find_us.opt1.opt1')) =>  trans('home.form.inputs.find_us.opt1.opt1'),
                                Str::slug(trans('home.form.inputs.find_us.opt1.opt2')) =>  trans('home.form.inputs.find_us.opt1.opt2'),
                                Str::slug(trans('home.form.inputs.find_us.opt1.opt3')) =>  trans('home.form.inputs.find_us.opt1.opt3'),
                                Str::slug(trans('home.form.inputs.find_us.opt1.opt4')) =>  trans('home.form.inputs.find_us.opt1.opt4'),
                            ],
                            Str::slug(trans('home.form.inputs.find_us.opt2')) =>  trans('home.form.inputs.find_us.opt2'),
                            Str::slug(trans('home.form.inputs.find_us.opt3')) =>  trans('home.form.inputs.find_us.opt3'),
                            Str::slug(trans('home.form.inputs.find_us.opt4')) =>  trans('home.form.inputs.find_us.opt4'),

                            ], null, ['class' => 'form-control', 'id' => 'find_us', 'data-error' => trans('home.form.errors.find_us')] ) }}

            </div>
            {{$errors->first('age', '<em class="invalid">:message</em>')}}

            <div class="input-group col-md-12 col-sm-12 c-border-top">

                {{ Form::select('age', [
                                    '' => trans('home.form.inputs.age.title'),
                                    Str::slug(trans('home.form.inputs.age.opt1')) =>  trans('home.form.inputs.age.opt1'),
                                    Str::slug(trans('home.form.inputs.age.opt2')) =>  trans('home.form.inputs.age.opt2'),
                                    Str::slug(trans('home.form.inputs.age.opt3')) =>  trans('home.form.inputs.age.opt3'),
                                    Str::slug(trans('home.form.inputs.age.opt4')) =>  trans('home.form.inputs.age.opt4')

                                ], null, ['class' => 'form-control', 'id' => 'age', 'data-error' => trans('home.form.errors.age') ] ) }}

            </div>
            <div class="btns">

                {{ Form::submit(trans('home.form.text_button'), [ 'class' => 'button solid blue submit md form-control' ]) }}
            </div>
            <div class="shadow"></div>
            {{ Form::close() }}
        </div>
    </div>
</div>

