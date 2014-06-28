@extends('site.layouts.master')

@section('content')

@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.about.mission_and_vision')])

    <div style="padding-top:0"  class="container only">
        <div class="row">
            <div class="col-md-3 main-el">
                <div class="side-menu" id="side-menu-1">

                    {{ link_to_route('about.message', Lang::get('menu.about.message_from_co_founders'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.mission', Lang::get('menu.about.mission_and_vision'),[], ['class' => 'element active']) }}
                    {{ link_to_route('about.glance', Lang::get('menu.about.epro_360_at_a_glance'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.apart', Lang::get('menu.about.what_set_us_apart'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.team', Lang::get('menu.about.epro_360_team'),[], ['class' => 'element']) }}

                </div>
            </div>

            <div style="text-align: justify"  class="col-md-9 main-el">
                <div class="row">
                     <div class="col-md-7">
                        
                        <h4>{{ Lang::get('about.mission_and_vision.title') }}</h4>

                        <p>{{ Lang::get('about.mission_and_vision.p1') }} </p>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('about.mission_and_vision.li1') }}</p>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('about.mission_and_vision.li2') }}</p>
                        <p class="list "><i class="fa fa-check"></i>{{ Lang::get('about.mission_and_vision.li3') }}</p>
                    </div>
                    <div class="col-md-5">
                        <div class="features-image-wrap full">
                            <div class="features-image">
                                <img src="/site/img/about/mission.jpg" class="center-block img-responsive" alt="">
                            </div>
                        </div>      
                    </div>   
                </div>



                <h4>{{ Lang::get('about.mission_and_vision.subtitle') }}</h4>
                <p> {{ Lang::get('about.mission_and_vision.p2') }} </p>
                <p> {{ Lang::get('about.mission_and_vision.p3') }} </p>
                <p> {{ Lang::get('about.mission_and_vision.p4') }} </p>
                <p> {{ Lang::get('about.mission_and_vision.p5') }} </p>

            </div>
        </div>
    </div>





@stop