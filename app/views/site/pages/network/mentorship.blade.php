@extends('site.layouts.master')

@section('content')

@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.epro_360_network.mentorship')])

 <div class="classic portfolio">
        <div class="container">
            <div class="row">

                <!-- <div class="col-md-12">
                    <ol class="breadcrumb portfolio-isotope-filters main-el">
                        <li class="filter active" data-filter="*"><a>All</a></li>
                        <li class="filter" data-filter=".leadership"><a>Leadership</a></li>

                    </ol>
                </div> -->
                <div class="col-lg-3 col-md-4 main-el">
                    <div class="side-menu" id="side-menu-1">

                        {{ link_to_route('network', Lang::get('menu.epro_360_network.what_is'),[], ['class' => 'element']) }}
                        {{ link_to_route('network.mentorship', Lang::get('menu.epro_360_network.mentorship'),[], ['class' => 'element active']) }}
                        {{ link_to_route('network.coaching', Lang::get('menu.epro_360_network.coaching'),[], ['class' => 'element ']) }}

                    </div>
                </div>
                <div class="col-lg-9 col-md-8 md">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="sep-heading-container shc4 clearfix">
                                <h4>{{ Lang::get('menu.epro_360_network.mentorship') }}</h4>
                                <div class="sep-container">
                                    <div class="the-sep"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-sm-6 main-el">
                            <div class="img-box">
                                <div class="thumb">
                                    <img src="/site/img/network/educational_mentorship/leadership.jpg" class="img-responsive" alt="">
                                </div>
                                <h5 class="medium">Leadership</h5>
                                <p > “He who cannot be a good follower cannot be a good leader.” ― Aristotle </p>
                            </div>
                        </div>

                        <div class="col-sm-6 main-el">
                            <div class="img-box">
                                <div class="thumb">
                                    <img src="/site/img/network/educational_mentorship/self_discovery.jpg" class="img-responsive" alt="">
                                </div>
                                <h5 class="medium">Self-discovery</h5>
                                <p > “There is nothing like returning to a place that remains unchanged to find the ways in which you yourself have altered.” ― Nelson Mandela </p> 
                            </div>
                        </div>

                        <div class="col-sm-6 main-el">
                            <div class="img-box">
                                <div class="thumb">
                                    <img src="/site/img/network/educational_mentorship/entrepreneurship.jpg" class="img-responsive" alt="">
                                </div>
                                <h5 class="medium">Entrepreneurship</h5>
                                <p >“The choice isn't between success and failure; it's between choosing risk and striving for greatness, or risking nothing and being certain of mediocrity.” ― Keith farrazzi </p>
                            </div>
                        </div>

                        <div class="col-sm-6 main-el">
                            <div class="img-box">
                                <div class="thumb">
                                    <img src="/site/img/network/educational_mentorship/women_empowerment.jpg" class="img-responsive" alt="">
                                </div>
                                <h5 class="medium">Women Empowerment</h5>
                                <p >“The thing women have yet to learn is nobody gives you power. You just take it.” ~Roseanne Barr –</p>
                            </div>
                        </div>

               
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@stop