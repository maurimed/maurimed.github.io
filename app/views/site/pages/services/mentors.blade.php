@extends('site.layouts.master')

@section('content')
	@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.services.educational_mentors')])

	<div style="padding-top:0"  class="container only">
        <div class="row">
            <div class="col-md-3 main-el">
                <div class="side-menu" id="side-menu-1">

                    {{ link_to_route('services', Lang::get('menu.services.index'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.academic', Lang::get('menu.services.academic_scholarships'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.athletic', Lang::get('menu.services.athletic_scholarships'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.english', Lang::get('menu.services.english_courses_esl'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.mentors', Lang::get('menu.services.educational_mentors'),[], ['class' => 'element active']) }}
                    {{ link_to_route('services.coaching', Lang::get('menu.services.career_coaching'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.internships', Lang::get('menu.services.internships'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.bonus', Lang::get('menu.services.bonus_semester_at_sea'),[], ['class' => 'element']) }}

                </div>
            </div>

            <div style="text-align: justify"  class="col-md-9 main-el">
                <h3>{{ Lang::get('services.educational_mentors.title') }}</h3>

                <h4>{{ Lang::get('services.educational_mentors.subtitle1') }}</h4>
                <p>{{ Lang::get('services.educational_mentors.p1') }} </p>
                <p>{{ Lang::get('services.educational_mentors.p2') }} </p>

				<h4>{{ Lang::get('services.educational_mentors.subtitle2') }}</h4>
                <p>{{ Lang::get('services.educational_mentors.p3') }} </p>

			
                <div class="dividing sep-line"></div>

                <h4>{{ Lang::get('services.educational_mentors.subtitle2') }}</h4>

				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.educational_mentors.li1') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.educational_mentors.li2') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.educational_mentors.li3') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.educational_mentors.li4') }} </p>

                <div class="dividing sep-line"></div>

                <h4>{{ Lang::get('services.educational_mentors.subtitle3') }}</h4>
                <p>{{ Lang::get('services.educational_mentors.p4') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.educational_mentors.li5') }} </p>

                <p>{{ Lang::get('services.educational_mentors.p5') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.educational_mentors.li6') }} </p>
                <p>{{ Lang::get('services.educational_mentors.p6') }} </p>


                <h4>{{ Lang::get('services.educational_mentors.subtitle4') }}</h4>
                <p>{{ Lang::get('services.educational_mentors.p7') }} </p>
                       <!--  <div class="features-image-wrap full">
                            <div class="features-image">
                                <img src="/site/img/services/mission.jpg" class="center-block img-responsive" alt="">
                            </div>
                        </div> -->      
            </div>
        </div>
    </div>
	
@stop