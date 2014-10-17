@extends('site.layouts.master')

@section('content')

@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.epro_360_network.mentorship')])

 <div class="classic portfolio">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-4 main-el">
                    <div class="side-menu" id="side-menu-1">

                        {{ link_to_route('network', Lang::get('menu.epro_360_network.what_is'),[], ['class' => 'element']) }}
                        {{ link_to_route('network.mentorship', Lang::get('menu.epro_360_network.mentorship'),[], ['class' => 'element active']) }}
                        {{ link_to_route('network.coaching', Lang::get('menu.epro_360_network.coaching'),[], ['class' => 'element ']) }}

                    </div>

                    @include('site.pages.network.network-link')


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
                                <h5 class="medium">{{ Lang::get('network.mentorship.blockquotes.1.title') }}</h5>
                                <p >{{ Lang::get('network.mentorship.blockquotes.1.text') }}</p>
                            </div>
                        </div>

                        <div class="col-sm-6 main-el">
                            <div class="img-box">
                                <div class="thumb">
                                    <img src="/site/img/network/educational_mentorship/self_discovery.jpg" class="img-responsive" alt="">
                                </div>
                                <h5 class="medium">{{ Lang::get('network.mentorship.blockquotes.2.title') }}</h5>
                                <p>{{ Lang::get('network.mentorship.blockquotes.2.text') }}</p>
                            </div>
                        </div>

                        <div class="col-sm-6 main-el">
                            <div class="img-box">
                                <div class="thumb">
                                    <img src="/site/img/network/educational_mentorship/entrepreneurship.jpg" class="img-responsive" alt="">
                                </div>
                                <h5 class="medium">{{ Lang::get('network.mentorship.blockquotes.3.title') }}</h5>
                                <p >{{ Lang::get('network.mentorship.blockquotes.3.text') }}</p>
                            </div>
                        </div>

                        <div class="col-sm-6 main-el">
                            <div class="img-box">
                                <div class="thumb">
                                    <img src="/site/img/network/educational_mentorship/women_empowerment.jpg" class="img-responsive" alt="">
                                </div>
                                <h5 class="medium">{{ Lang::get('network.mentorship.blockquotes.4.title') }}</h5>
                                <p >{{ Lang::get('network.mentorship.blockquotes.4.text') }}</p>
                            </div>
                        </div>

               
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@stop