@extends('site.layouts.master')

@section('content')
	@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.services.bonus_semester_at_sea')])

	<div style="padding-top:0"  class="container only">
        <div class="row">
            <div class="col-md-3 main-el">
                <div class="side-menu" id="side-menu-1">

                    {{ link_to_route('services', Lang::get('menu.services.index'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.academic', Lang::get('menu.services.academic_scholarships'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.athletic', Lang::get('menu.services.athletic_scholarships'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.english', Lang::get('menu.services.english_courses_esl'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.mentors', Lang::get('menu.services.educational_mentors'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.coaching', Lang::get('menu.services.career_coaching'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.internships', Lang::get('menu.services.internships'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.bonus', Lang::get('menu.services.bonus_semester_at_sea'),[], ['class' => 'element active']) }}

                </div>
            </div>
                 <br/><br/>
                @include('site.pages.home.partials.apply-link')
            <div style="text-align: justify"  class="col-md-9 main-el">
                <h3>{{ Lang::get('services.bonus_semester_at_sea.title') }}</h3>
                <div class="image">
                    <div class="video-frame">
                        <iframe src="http://player.vimeo.com/video/30319133?title=0&amp;byline=0" width="1140" height="641" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <br><br>
                <h4>{{ Lang::get('services.bonus_semester_at_sea.subtitle1') }}</h4>
                <p>{{ Lang::get('services.bonus_semester_at_sea.p1') }} </p>

                <div class="dividing sep-line"></div>

                <h4>{{ Lang::get('services.bonus_semester_at_sea.subtitle2') }}</h4>
                <p>{{ Lang::get('services.bonus_semester_at_sea.p2') }} </p>
			
                <div class="dividing sep-line"></div>

                <h4>{{ Lang::get('services.bonus_semester_at_sea.subtitle3') }}</h4>


				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li1') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li2') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li3') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li4') }} </p>
	
                <p>{{ Lang::get('services.bonus_semester_at_sea.p3') }} </p>

                <div class="dividing sep-line"></div>
	
				<h4>{{ Lang::get('services.bonus_semester_at_sea.subtitle4') }}</h4>

				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li5') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li6') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li7') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li8') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li9') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li10') }} </p>

                <p>{{ Lang::get('services.bonus_semester_at_sea.p4') }} </p>

                <div class="dividing sep-line"></div>

				<h4>{{ Lang::get('services.bonus_semester_at_sea.subtitle5') }}</h4>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li11') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li12') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li13') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li14') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.bonus_semester_at_sea.li15') }} 
				<a class="bold " href="http://www.semesteratsea.org/admission-aid/prospective/requirements/#sthash.mLPRfs1U.dpuf" target="_blank">www.semestreatsea.org </a>
				</p>

				




                       <!--  <div class="features-image-wrap full">
                            <div class="features-image">
                                <img src="/site/img/services/mission.jpg" class="center-block img-responsive" alt="">
                            </div>
                        </div> -->      
            </div>
        </div>
    </div>
	
@stop