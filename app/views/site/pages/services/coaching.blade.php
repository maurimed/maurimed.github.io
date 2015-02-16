@extends('site.layouts.master')

@section('content')
	@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.services.career_coaching')])

	<div style="padding-top:0"  class="container only">
        <div class="row">
            <div class="col-md-3 main-el">
                <div class="side-menu" id="side-menu-1">

                    {{ link_to_route('services', Lang::get('menu.services.index'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.academic', Lang::get('menu.services.academic_scholarships'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.athletic', Lang::get('menu.services.athletic_scholarships'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.english', Lang::get('menu.services.english_courses_esl'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.mentors', Lang::get('menu.services.educational_mentors'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.coaching', Lang::get('menu.services.career_coaching'),[], ['class' => 'element active']) }}
                    {{ link_to_route('services.internships', Lang::get('menu.services.internships'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.bonus', Lang::get('menu.services.bonus_semester_at_sea'),[], ['class' => 'element']) }}
					{{ link_to_route('services.undergrad', Lang::get('menu.services.undergrad_programs'),[], ['class' => 'element']) }}					

                </div>
                 <br/><br/>
                @include('site.pages.home.partials.apply-link')
            </div>
            <div style="text-align: justify"  class="col-md-9 main-el">
                <h3>{{ Lang::get('services.career_coaching.title') }}</h3>

                <h4>{{ Lang::get('services.career_coaching.subtitle1') }}</h4>
                <p>{{ Lang::get('services.career_coaching.p1') }} </p>
                <p>{{ Lang::get('services.career_coaching.p2') }} </p>
                <p>{{ Lang::get('services.career_coaching.p3') }} </p>
                <p>{{ Lang::get('services.career_coaching.p4') }} </p>

			
                <div class="dividing sep-line"></div>

                <h4>{{ Lang::get('services.career_coaching.subtitle2') }}</h4>
                <p>{{ Lang::get('services.career_coaching.p5') }} </p>

				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.career_coaching.li1') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.career_coaching.li2') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.career_coaching.li3') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.career_coaching.li4') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.career_coaching.li5') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.career_coaching.li6') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.career_coaching.li7') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.career_coaching.li8') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.career_coaching.li9') }} </p>
				@if(Lang::get('services.career_coaching.li10') !== "")
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.career_coaching.li10') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.career_coaching.li11') }} </p>
				@endif


                <div class="dividing sep-line"></div>

                <h4>{{ Lang::get('services.career_coaching.subtitle3') }}</h4>
                <p>{{ Lang::get('services.career_coaching.p6') }} </p>

                       <!--  <div class="features-image-wrap full">
                            <div class="features-image">
                                <img src="/site/img/services/mission.jpg" class="center-block img-responsive" alt="">
                            </div>
                        </div> -->      
            </div>
        </div>
    </div>
	
@stop