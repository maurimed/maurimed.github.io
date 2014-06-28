@extends('site.layouts.master')

@section('content')

@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.about.what_set_us_apart')])

    <div  style="padding-top:0" class="container only">
        <div class="row">
            <div class="col-md-3 main-el">
                <div class="side-menu" id="side-menu-1">

                    {{ link_to_route('about.message', Lang::get('menu.about.message_from_co_founders'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.mission', Lang::get('menu.about.mission_and_vision'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.glance', Lang::get('menu.about.epro_360_at_a_glance'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.apart', Lang::get('menu.about.what_set_us_apart'),[], ['class' => 'element active']) }}
                    {{ link_to_route('about.team', Lang::get('menu.about.epro_360_team'),[], ['class' => 'element']) }}

                </div>
            </div>

            <div style="text-align: justify" class="col-md-9 main-el">
                <div class="row">
                    <div class="col-md-7">
                        <h3>{{ Lang::get('about.what_set_us_apart.title') }}</h3>
                        <div class="icon-list-4">
                            <div class="element">
                                <i class="main-text-color pull-left">1.</i>
                                <p class="bold alt-text-color2">{{ Lang::get('about.what_set_us_apart.subtitle1') }}</p>
                            </div>
                        </div>
                        <p>{{ Lang::get('about.what_set_us_apart.p1') }}</p> <br> 
                        <div class="icon-list-4">
                            <div class="element">
                                <i class="main-text-color pull-left">2.</i>
                                <p class="bold alt-text-color2">{{ Lang::get('about.what_set_us_apart.subtitle2') }}</p>
                            </div>
                        </div>
                        <p>{{ Lang::get('about.what_set_us_apart.p2') }}</p><br> 
                    </div>
                    <div class="col-md-5">
                        <div class="features-image-wrap full">
                            <div class="features-image">
                                <img src="/site/img/about/international_business.jpg" class="center-block img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Item -->
                <div class="icon-list-4">
                    <div class="element">
                        <i class="main-text-color pull-left">3.</i>
                        <p class="bold alt-text-color2">{{ Lang::get('about.what_set_us_apart.subtitle3') }}</p>
                    </div>
                </div>
                <p>{{ Lang::get('about.what_set_us_apart.p3') }}</p><br> <br>

                <!-- Item -->
                <div class="icon-list-4">
                    <div class="element">
                        <i class="main-text-color pull-left">4.</i>
                        <p class="bold alt-text-color2">{{ Lang::get('about.what_set_us_apart.subtitle4') }}</p>
                    </div>
                </div>
                <p>{{ Lang::get('about.what_set_us_apart.p4') }}</p>
                <p>{{ Lang::get('about.what_set_us_apart.p5') }}</p><br> <br>

                <!-- Item -->
                <div class="icon-list-4">
                    <div class="element">
                        <i class="main-text-color pull-left">5.</i>
                        <p class="bold alt-text-color2">{{ Lang::get('about.what_set_us_apart.subtitle5') }}</p>
                    </div>
                </div>
                <p>{{ Lang::get('about.what_set_us_apart.p6') }}</p><br> <br>

            </div>

        </div>
    </div>





@stop