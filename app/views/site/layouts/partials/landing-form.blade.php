<div class="hidden-xs">
    <div style="padding-top:0; height:0px" class="row fixed">
        <div class="col-md-2 col-sm-3 col-xs-12 ">
            <div class="sep-heading-container shc4 clearfix">
                <!-- <h3>Services</h3> -->
                <!-- <div class="sep-container">
                    <div class="the-sep"></div>
                </div> -->
            </div>
            <div class="liked-posts left-menu">
                <div class="element alt-text-color op1"> {{ link_to_route('services.academic', Lang::get('menu.services.academic_scholarships') ) }} </div>
                <div class="element alt-text-color op1">{{ link_to_route('services.athletic', Lang::get('menu.services.athletic_scholarships')) }}</div>
                <div class="element alt-text-color op1">{{ link_to_route('services.english', Lang::get('menu.services.english_courses_esl')) }}</div>
                <div class="element alt-text-color op1">{{ link_to_route('services.mentors', Lang::get('menu.services.educational_mentors')) }}</div>
                <div class="element alt-text-color op1">{{ link_to_route('services.coaching', Lang::get('menu.services.career_coaching')) }}</div>
                <div class="element alt-text-color op1">{{ link_to_route('services.internships', Lang::get('menu.services.internships')) }}</div>
                <div class="element alt-text-color op1">{{ link_to_route('services.bonus', Lang::get('menu.services.bonus_semester_at_sea')) }}</div>
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12 col-sm-offset-6  col-md-offset-8">
            <div class="form form-2 landing-form">
                <div style="font-size: 1em;" class="head bold main-text-color">
                    @if(Session::has('success_message'))
                        {{ Session::get('success_message') }}
                    @elseif(Session::has('danger_message'))
                        {{ Session::get('danger_message') }}
                    @else
                        {{ Lang::get('home.landing_title') }}
                    @endif
                </div>
                {{ Form::open(['route' => 'subscribers.store']) }}
                {{$errors->first('name', '<span style="width:100%" class="alert-danger">:message</span>')}}
                <div class="input-group">
                    {{ Form::text('name', null, [ 'placeholder' => 'Name *', 'class' => 'form-control' ]) }}
                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                </div>
                {{$errors->first('email', '<span style="width:100%" class="alert-danger">:message</span>')}}
                <div class="input-group c-border-top">
                    {{ Form::email('email', null, [ 'placeholder' => 'Email *', 'class' => 'form-control' ]) }}
                    <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                </div>
                {{$errors->first('phone', '<span style="width:100%" class="alert-danger">:message</span>')}}
                <div class="input-group c-border-top">
                    {{ Form::text('phone', null, [ 'placeholder' => 'Phone *', 'class' => 'form-control' ]) }}
                    <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                </div>
                <div class="btns">


                {{ Form::submit(Lang::get('home.text_button'), [ 'class' => 'button solid blue md form-control' ]) }}

                </div>
                <div class="shadow"></div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>