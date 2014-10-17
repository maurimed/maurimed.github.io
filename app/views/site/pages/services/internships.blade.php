@extends('site.layouts.master')

@section('content')
	@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.services.internships')])

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
                    {{ link_to_route('services.internships', Lang::get('menu.services.internships'),[], ['class' => 'element active']) }}
                    {{ link_to_route('services.bonus', Lang::get('menu.services.bonus_semester_at_sea'),[], ['class' => 'element']) }}

                </div>
                 <br/><br/>
                @include('site.pages.home.partials.apply-link')
            </div>
            <div style="text-align: justify"  class="col-md-9 main-el">
                <h3>{{ Lang::get('services.internships.title') }}</h3>

                <h4>{{ Lang::get('services.internships.subtitle1') }}</h4>
                <p>{{ Lang::get('services.internships.p1') }} </p>

			
                <div class="dividing sep-line"></div>


				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.internships.li1') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.internships.li2') }} </p>
				<p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.internships.li3') }} </p>
	
                <p class="small"><cite>{{ Lang::get('services.internships.note1') }}</cite></p>


                <div class="dividing sep-line"></div>



                       <!--  <div class="features-image-wrap full">
                            <div class="features-image">
                                <img src="/site/img/services/mission.jpg" class="center-block img-responsive" alt="">
                            </div>
                        </div> -->      
            </div>
        </div>
    </div>
	
@stop