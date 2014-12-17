@extends('site.layouts.master')

@section('content')

@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.epro_360_network.index')])

<div style="padding-top:0"  class="container only">
    <div class="row">
        <div class="col-md-3 main-el">
            <div class="side-menu" id="side-menu-1">
                {{ link_to_route('network', Lang::get('menu.epro_360_network.what_is'),[], ['class' => 'element active']) }}
                {{ link_to_route('network.mentorship', Lang::get('menu.epro_360_network.mentorship'),[], ['class' => 'element ']) }}
                {{ link_to_route('network.coaching', Lang::get('menu.epro_360_network.coaching'),[], ['class' => 'element']) }}

            </div>
            @include('site.pages.network.network-link')

        </div>

        <div style="text-align: justify" class="col-md-9 main-el">
            <div class="row">
                <div class="col-md-7">

                    <h3>{{ Lang::get('menu.epro_360_network.index')  }}</h3>
                    <p> {{ Lang::get('network.what_is.p1') }} </p>
                    <p> {{ Lang::get('network.what_is.p2') }} </p>
                    <p> {{ Lang::get('network.what_is.p3') }} </p>
                </div>
                <div class="col-md-5">
                    <div class="features-image-wrap full">
                        <div class="features-image">
                            <img src="/site/img/network/network.jpg" class="img-responsive" alt="{{ Lang::get('menu.epro_360_network.index') }}">
                        </div>
                    </div>
                    <blockquote> {{ Lang::get('network.what_is.blockquote') }}
                       <cite class="note"> {{ Lang::get('network.what_is.author') }}  </cite>
                    </blockquote>
                </div>
            </div>





        </div>
    </div>
</div>
@stop