@extends('site.layouts.master')

@section('content')

@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.about.epro_360_team')])

    <div  style="padding-top:0" class="container only">
        <div class="row">
            <div class="col-md-3 main-el">
                <div class="side-menu" id="side-menu-1">

                    {{ link_to_route('about.message', Lang::get('menu.about.message_from_co_founders'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.mission', Lang::get('menu.about.mission_and_vision'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.glance', Lang::get('menu.about.epro_360_at_a_glance'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.apart', Lang::get('menu.about.what_set_us_apart'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.team', Lang::get('menu.about.epro_360_team'),[], ['class' => 'element active']) }}

                </div>
            </div>

            <div style="text-align:justify" class="col-md-9 main-el">
              <!--   <div class="features-image-wrap full">
                    <div class="features-image">
                        <img src="/site/img/about/international_business.jpg" class="center-block img-responsive" alt="">
                    </div>
                </div> -->
                <h3> {{ Lang::get('about.epro_360_team.title') }} </h3>
                <div class="dividing sep-line"></div>
                <p>{{ Lang::get('about.epro_360_team.p1') }}</p>
                <div class="row">
                    <div class="col-md-3 col-sm-6 main-el">
                        <div class="person">
                            <div class="photo">
<!--                                <div class="overlay">-->
<!--                                    <div class="socials">-->
<!--                                        <a data-toggle="tooltip" title="Facebook" class="facebook" href="#"> <i class="fa fa-facebook"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Twitter" class="twitter" href="#"> <i class="fa fa-twitter"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Google Plus" class="gplus" href="#"> <i class="fa fa-google-plus"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Dribble" class="dribbble" href="#"> <i class="fa fa-dribbble"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Linkedin" class="linkedin" href="#"> <i class="fa fa-linkedin"></i> </a>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <img src="/site/img/ambassadors/Xabier-Loor.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="details">
                                <h5 class="medium name">Xabier Loor</h5>
                                <p class="italic title"> <i class="fa fa-flag"></i> Ecuador </p>
                                <p class="italic title"> <i class="fa fa-envelope"></i> xabierloor@epro360.com</p>
                                <p class="italic title"> <i class="fa fa-phone"></i> (+593) 985 176 257</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 main-el">
                        <div class="person">
                            <div class="photo">
<!--                                <div class="overlay">-->
<!--                                    <div class="socials">-->
<!--                                        <a data-toggle="tooltip" title="Facebook" class="facebook" href="#"> <i class="fa fa-facebook"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Twitter" class="twitter" href="#"> <i class="fa fa-twitter"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Google Plus" class="gplus" href="#"> <i class="fa fa-google-plus"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Dribble" class="dribbble" href="#"> <i class="fa fa-dribbble"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Linkedin" class="linkedin" href="#"> <i class="fa fa-linkedin"></i> </a>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <img src="/site/img/ambassadors/Frank-Monge.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="details">
                                <h5 class="medium name">Frank Monge</h5>
                                <p class="italic title"> <i class="fa fa-flag"></i> Ecuador </p>
                                <p style="font-size: 1em;" class="italic title"> <i class="fa fa-envelope"></i> frankmonge@epro360.com</p>
                                <p class="italic title"> <i class="fa fa-phone"></i>  (+593) 994 055 115 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 main-el">
                        <div class="person">
                            <div class="photo">
<!--                                <div class="overlay">-->
<!--                                    <div class="socials">-->
<!--                                        <a data-toggle="tooltip" title="Facebook" class="facebook" href="#"> <i class="fa fa-facebook"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Twitter" class="twitter" href="#"> <i class="fa fa-twitter"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Google Plus" class="gplus" href="#"> <i class="fa fa-google-plus"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Dribble" class="dribbble" href="#"> <i class="fa fa-dribbble"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Linkedin" class="linkedin" href="#"> <i class="fa fa-linkedin"></i> </a>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <img src="/site/img/ambassadors/Israel-Papiol.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="details">
                                <h5 class="medium name">Israel Papiol</h5>
                                <p class="italic title"> <i class="fa fa-flag"></i> Spain </p>
                                <p class="italic title"> <i class="fa fa-envelope"></i> ipapiol@epro360.com</p>
                                <p class="italic title"> <i class="fa fa-phone"></i>  (+34) 682 890 170 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 main-el">
                        <div class="person">
                            <div class="photo">
<!--                                <div class="overlay">-->
<!--                                    <div class="socials">-->
<!--                                        <a data-toggle="tooltip" title="Facebook" class="facebook" href="#"> <i class="fa fa-facebook"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Twitter" class="twitter" href="#"> <i class="fa fa-twitter"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Google Plus" class="gplus" href="#"> <i class="fa fa-google-plus"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Dribble" class="dribbble" href="#"> <i class="fa fa-dribbble"></i> </a>-->
<!--                                        <a data-toggle="tooltip" title="Linkedin" class="linkedin" href="#"> <i class="fa fa-linkedin"></i> </a>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <img src="/site/img/ambassadors/Narku-Naranbaatar.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="details">
                                <h5 class="medium name">Narku Naranbaatar</h5>
                                <p class="italic title"> <i class="fa fa-flag"></i> Mongolia </p>
                                <p style="font-size: 1em;" class="italic title"> <i class="fa fa-envelope"></i> naranbaataro@epro360.com</p>
                                <p class="italic title"> <i class="fa fa-phone"></i> (+1) 636 634 5068 </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dividing sep-line"></div>
                
                <h4 class="bold">{{ Lang::get('about.epro_360_team.subtitle1') }}</h4>
                <h5 class="bold">{{ Lang::get('about.epro_360_team.subtitle2') }}</h5>
                 <!-- Item -->
                <div class="icon-list-4">
                    <div class="element">
                        <i class="main-text-color pull-left">1.</i>
                        <p class="bold alt-text-color1">{{ Lang::get('about.epro_360_team.p2') }}</p>
                        <p class="bold alt-text-color1">{{ Lang::get('about.epro_360_team.p3') }}</p>
                    </div>
                </div>
                <div class="icon-list-4">
                    <div class="element">
                        <i class="main-text-color pull-left">2.</i>
                        <p class="bold alt-text-color1">{{ Lang::get('about.epro_360_team.p4') }}</p>
                    </div>
                </div>
                <div class="icon-list-4">
                    <div class="element">
                        <i class="main-text-color pull-left">3.</i>
                        <p class="bold alt-text-color1">{{ Lang::get('about.epro_360_team.p5') }}</p>
                    </div>
                </div>
                <p>{{ Lang::get('about.epro_360_team.p6') }}</p>
            </div>
        </div>
    </div>





@stop