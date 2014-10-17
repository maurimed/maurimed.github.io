@extends('site.layouts.master')

@section('content')

@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.epro_360_network.coaching')])

 <div class="classic portfolio">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <ol class="breadcrumb portfolio-isotope-filters main-el">
                        <li class="filter active" data-filter="*"><a>All</a></li>
                        @foreach($tags as $tag)
                            <li class="filter" data-filter=".{{ $tag->slug }}"><a>{{ $tag->name }}</a></li>
                        @endforeach
                    </ol>
                </div>

                <div class="col-lg-3 col-md-4 main-el">
                    <div class="side-menu" id="side-menu-1">

                        {{ link_to_route('network', Lang::get('menu.epro_360_network.what_is'),[], ['class' => 'element']) }}
                        {{ link_to_route('network.mentorship', Lang::get('menu.epro_360_network.mentorship'),[], ['class' => 'element ']) }}
                        {{ link_to_route('network.coaching', Lang::get('menu.epro_360_network.coaching'),[], ['class' => 'element active']) }}

                    </div>
                    @include('site.pages.network.network-link')

                </div>
                <div class="col-lg-9 col-md-8 md">
                    <div class="ajax-page-preloader" style="position: relative;">
                        <div class="loader spinner">
                            <img src="/site/img/loader.gif" width="24" height="24">
                            <div class="dot1"></div>
                            <div class="dot2"></div>
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="portfolio-isotope isotope-container">
                        
                            @foreach($majors as $major)
                            <div class="col-lg-4 col-sm-6 main-el isotope-element {{ $major->present()->schools }}">
                                <div class="portfolio item">
                                    <div class="top">
                                        <img class="img-responsive" src="/site/img/network/career_coaching/{{ $major->image }}" alt="{{ $major->name }}">
                                    </div>
                                    <div class="bot">
                                        <h5><a href="#">{{ $major->name }}</a> </h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    
                    </div>
                </div>

            </div>
        </div>
    </div>



@stop