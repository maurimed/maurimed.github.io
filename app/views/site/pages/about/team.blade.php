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
                @foreach(array_chunk($ambassadors->all(), 4) as $chunks )
                <div class="row">
                    @foreach($chunks as $ambassador)
                    <div class="col-md-3 col-sm-6 main-el">
                        <div class="person">
                            <div class="photo">
                                @include('dashboard.users.partials.avatar',['user' => $ambassador->profile, 'size' => 'xl'])
                            </div>
                            <div class="details">
                                <h5 class="medium name">{{ $ambassador->present()->fullName }}</h5>
                                <p class="italic title"> <i class="fa fa-map-marker"></i>  {{ $ambassador->city->state->country->country_name }}</p>
                                <p class="italic title"> <i class="fa fa-envelope"></i> {{ $ambassador->profile->email }} </p>
                                <p class="italic title"> <i class="fa fa-phone"></i> {{ $ambassador->phone }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach

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