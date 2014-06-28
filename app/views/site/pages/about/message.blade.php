@extends('site.layouts.master')

@section('content')

    @include('site.layouts.partials.components.breadcums', ['title' => Lang::get('about.message_from_co_founders.title')])

    <div  style="padding-top:0" class="container only">
        <div class="row">
            <div  class="col-md-3 main-el">
                <div  class="side-menu" id="side-menu-1">

                    {{ link_to_route('about.message', Lang::get('menu.about.message_from_co_founders'),[], ['class' => 'element active']) }}
                    {{ link_to_route('about.mission', Lang::get('menu.about.mission_and_vision'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.glance', Lang::get('menu.about.epro_360_at_a_glance'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.apart', Lang::get('menu.about.what_set_us_apart'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.team', Lang::get('menu.about.epro_360_team'),[], ['class' => 'element']) }}

                </div>
            </div>

            <div style="text-align: justify"  class="col-md-9 main-el">
                <div class="features-image-wrap full">
                    <div class="features-image">
                        <img src="/site/img/about/cofounders.jpg" class="center-block img-responsive" alt="">
                    </div>
                </div>
                <h4>{{ Lang::get('about.message_from_co_founders.subtitle1') }}</h4>

                <p>
                    <!-- <span class="main-text-color bold"> Vestibulum in lacus </span> -->
                    {{ Lang::get('about.message_from_co_founders.p1') }}
                </p>
                
                <h4>{{ Lang::get('about.message_from_co_founders.subtitle2') }}</h4>

                <p> {{ Lang::get('about.message_from_co_founders.p2') }} </p>

                <p> {{ Lang::get('about.message_from_co_founders.p3') }} </p>

                <h4> {{ Lang::get('about.message_from_co_founders.subtitle3') }} </h4>

                <p> {{ Lang::get('about.message_from_co_founders.p4') }} </p>


                <h4> {{ Lang::get('about.message_from_co_founders.subtitle4') }} </h4>

                <p> {{ Lang::get('about.message_from_co_founders.p5') }} </p>

                <p> {{ Lang::get('about.message_from_co_founders.p6') }} </p>
                <br>
                <br>
                <br>
                <br>
                <div class="col-md-4 col-sm-5">
                    <p class="text-center black-text-color">Francisco Galvez, CPA, MBA, MSA.
                    <br>
                    <small>Co-Founder</small>
                    </p>
                </div>
                <div class="col-md-4 col-sm-3">
                    <p class="text-center black-text-color">Oswaldo Chavez
                    <br>
                    <small>Co-Founder</small>
                    </p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p class="text-center black-text-color">Jonas Kehrbaum, BA.
                    <br>
                    <small>Co-Founder</small>
                    </p>
                </div>

<!--                <p class="list"><i class="fa fa-check"></i>Sed nunc tortor, sagittis quis viverra id, molestie vitae nibh. Donec vitae lacus sed risus </p>-->



            </div>
        </div>
    </div>





@stop