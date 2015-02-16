@extends('site.layouts.master')


@section('content')
	@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.services.undergrad_programs')])
	
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
                    {{ link_to_route('services.bonus', Lang::get('menu.services.bonus_semester_at_sea'),[], ['class' => 'element']) }}
					{{ link_to_route('services.undergrad', Lang::get('menu.services.undergrad_programs'),[], ['class' => 'element active']) }}


                </div>
                 <br/><br/>
                @include('site.pages.home.partials.apply-link')
            </div>

            <div style="text-align: justify"  class="col-md-9 main-el">
			
			    <h3>{{ Lang::get('services.undergrad_programs.title') }}</h3>
			
			
			
			
				<div class="panel-group accordion" id="accordion-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h6 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapseOne">
									<i class="fa "></i>
									{{ Lang::get('services.undergrad_programs.subtitle1') }}
								</a>
							</h6>
							<h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapseOne">
									<i class="fa "></i>
									{{ Lang::get('services.undergrad_programs.subtitle2') }}
								</a>
							</h4>
							<h3 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapseOne">
									<i class="fa "></i>
									{{ Lang::get('services.undergrad_programs.subtitle3') }}
								</a>
							</h3>
							<h6 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapseOne">
									<i class="fa "></i>
									{{ Lang::get('services.undergrad_programs.subtitle4') }}
								</a>
							</h6>							
						</div>
						
						<div id="collapseOne" class="panel-collapse collapse">
							<div class="panel-body">
								<p>
									Panel Body
								</p>
							</div>
						</div>
					</div>
				</div>
							
			
			
			


                <h4>{{ Lang::get('services.academic_scholarships.subtitle1') }}</h4>
                <p>{{ Lang::get('services.academic_scholarships.p1') }} </p>
                <div class="dividing sep-line"></div>


                <h4>{{ Lang::get('services.academic_scholarships.subtitle2') }}</h4>
                <p>{{ Lang::get('services.academic_scholarships.p2') }} </p>

                <div class="dividing sep-line"></div>

                <h4>{{ Lang::get('services.academic_scholarships.subtitle3') }}</h4>
                <p>{{ Lang::get('services.academic_scholarships.p3') }} </p>
                <p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.academic_scholarships.li1') }} </p>
                <p><i class="fa fa-ellipsis-v"></i>{{ Lang::get('services.academic_scholarships.p4') }} </p>

                <p class="bold"> <i class="fa fa-check-square-o"></i>{{ Lang::get('services.academic_scholarships.li2') }} </p>
                <p><i class="fa fa-ellipsis-v"></i>{{ Lang::get('services.academic_scholarships.p5') }} </p>
                <p class="small"><cite>{{ Lang::get('services.academic_scholarships.note1') }}</cite></p>
                <div class="dividing sep-line"></div>


                <h4>{{ Lang::get('services.academic_scholarships.subtitle4') }}</h4>
                <p class="bold"> {{ Lang::get('services.academic_scholarships.p6') }} </p>
                <p class="small"><cite>{{ Lang::get('services.academic_scholarships.note2') }}</cite></p>
                <div class="dividing sep-line"></div>

                <h4>{{ Lang::get('services.academic_scholarships.subtitle5') }}</h4>
                <p>{{ Lang::get('services.academic_scholarships.p7') }} </p>
                <p>{{ Lang::get('services.academic_scholarships.p8') }} </p>
                       <!--  <div class="features-image-wrap full">
                            <div class="features-image">
                                <img src="/site/img/services/mission.jpg" class="center-block img-responsive" alt="">
                            </div>
                        </div> -->      
            </div>
        </div>
    </div>
	
@stop