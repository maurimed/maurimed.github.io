@extends('site.layouts.master')

@section('content')
	@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.services.index')])

	<div style="padding-top:0"  class="container only">
        <div class="row">
            <div class="col-md-3 main-el">
                <div class="side-menu" id="side-menu-1">

                    {{ link_to_route('services', Lang::get('menu.services.index'),[], ['class' => 'element  active']) }}
                    {{ link_to_route('services.academic', Lang::get('menu.services.academic_scholarships'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.athletic', Lang::get('menu.services.athletic_scholarships'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.english', Lang::get('menu.services.english_courses_esl'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.mentors', Lang::get('menu.services.educational_mentors'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.coaching', Lang::get('menu.services.career_coaching'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.internships', Lang::get('menu.services.internships'),[], ['class' => 'element']) }}
                    {{ link_to_route('services.bonus', Lang::get('menu.services.bonus_semester_at_sea'),[], ['class' => 'element']) }}


                </div>
            </div>

            <div style="text-align: justify"  class="col-md-9 main-el">


                <div class="row">
                     <div class="col-md-7">
                        <h3>{{ Lang::get('services.index.title') }}</h3>
                        <p>{{ Lang::get('services.index.p1') }} </p>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('services.index.li1') }}</p>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('services.index.li2') }}</p>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('services.index.li3') }}</p>
                    </div>
                    <div class="col-md-5">
                        <div class="features-image-wrap full">
                            <div class="features-image">
                                <img src="/site/img/services/keyboard_us_flag_enter.jpg" class="center-block img-responsive" alt="">
                            </div>
                        </div>      
                    </div>   
                </div>



                <div class="dividing sep-line"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="features-image-wrap full">
                            <div class="features-image">
                                <img src="/site/img/services/open_door.jpg" class="center-block img-responsive" alt="">
                            </div>
                        </div>      
                    </div>                        
                    <div class="col-md-8">
                        <h4>{{ Lang::get('services.index.p2') }} </h4>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('services.index.li4') }}</p>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('services.index.li5') }}</p>
                    </div>

                </div>



                <div class="dividing sep-line"></div>
                <div class="row">
                    <div class="col-md-7">
                        <h4>{{ Lang::get('services.index.p3') }} </h4>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('services.index.li6') }}</p>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('services.index.li7') }}</p>
                    </div>
                    <div class="col-md-5">
                        <div class="features-image-wrap full">
                            <div class="features-image">
                                <img src="/site/img/services/flag_students.jpg" class="center-block img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="dividing sep-line"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="features-image-wrap full">
                            <div class="features-image">
                                <img src="/site/img/services/one_to_one.jpg" class="center-block img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>{{ Lang::get('services.index.p4') }} </h4>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('services.index.li8') }}</p>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('services.index.li9') }}</p>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('services.index.li10') }}</p>
                    </div>
                </div>


                <div class="dividing sep-line"></div>
                <div class="row">
                    <div class="col-md-7">
                        <h4>{{ Lang::get('services.index.p5') }} </h4>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('services.index.li11') }}</p>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('services.index.li12') }}</p>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('services.index.li13') }}</p>
                    </div>
                    <div class="col-md-5">
                        <div class="features-image-wrap full">
                            <div class="features-image">
                                <img src="/site/img/services/graduated_studets.jpg" class="center-block img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@stop