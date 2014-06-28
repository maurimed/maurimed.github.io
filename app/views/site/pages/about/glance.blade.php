@extends('site.layouts.master')

@section('content')

@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('about.epro_360_at_a_glance.title')])

    <div  style="padding-top:0" class="container only">

        <div class="row">
            <div class="col-md-3 main-el">
                <div class="side-menu" id="side-menu-1">

                    {{ link_to_route('about.message', Lang::get('menu.about.message_from_co_founders'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.mission', Lang::get('menu.about.mission_and_vision'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.glance', Lang::get('menu.about.epro_360_at_a_glance'),[], ['class' => 'element active']) }}
                    {{ link_to_route('about.apart', Lang::get('menu.about.what_set_us_apart'),[], ['class' => 'element']) }}
                    {{ link_to_route('about.team', Lang::get('menu.about.epro_360_team'),[], ['class' => 'element']) }}

                </div>
            </div>

            <div style="text-align: justify"  class="col-md-9 main-el">
                <div class="row">
                    <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <p class="epro-at-glance">
                                <span class="main-text-color bold text-muted" >E</span>ffective <br>
                                <span class="main-text-color bold text-muted" >P</span>assionate <br>
                                <span class="main-text-color bold text-muted" >R</span>eachable <br>
                                <span class="main-text-color bold text-muted" >O</span>pen 
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <p class="epro-at-glance">
                                <span class="main-text-color bold text-muted" >E</span>mpowering <br>
                                <span class="main-text-color bold text-muted" >P</span>ersonable <br>
                                <span class="main-text-color bold text-muted" >R</span>eliable <br>
                                <span class="main-text-color bold text-muted" >O</span>ptimistic <br>
                            </p>
                        </div>  
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <p class="epro-at-glance">
                                <span class="main-text-color bold text-muted" >E</span>nthusiastic <br/>
                                <span class="main-text-color bold text-muted" >P</span>rofessional <br/>
                                <span class="main-text-color bold text-muted" >R</span>esults-oriented <br/>
                                <span class="main-text-color bold text-muted" >O</span>riginal <br/>
                            </p>
                        </div>
                    </div>
                    <p style="font-size: 1.4em; line-height:1.5em;">
                        <span class="main-text-color bold text-muted" >360</span> days a year always with a global perspective and mindset.<br/>
                    </p>
                    <p> {{ Lang::get('about.epro_360_at_a_glance.p1') }} </p>
                    </div>
                    <div class="col-md-5">
                        <div class="features-image-wrap full">
                            <div class="features-image">
                                <img src="/site/img/about/at_glance.jpg" class="center-block img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center" style="font-size: 1.5em;">{{ Lang::get('about.epro_360_at_a_glance.subtitle') }}</h4>
                    <div class="event">
                        <div class="details">
                            <div class="date bold pull-left">
                                <div class="day main-text-color">Feb</div>
                                <div class="month main-bg-color alt-text-color">2013</div>
                            </div>
                            <div class="text">
                                <h5 class="title medium">Foundation</h5>
                                <p >In Portoviejo, Ecuador by Oswaldo and Christian Chavez.</p>
                                <div class="time main-text-color"> &nbsp; </div>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <div class="details">
                            <div class="date bold pull-left">
                                <div class="day main-text-color">Jul</div>
                                <div class="month main-bg-color alt-text-color">2013</div>
                            </div>
                            <div class="text">
                                <h5 class="title medium">First Presentation</h5>
                                <p >Provided to high schools students in the Portoviejo area, Ecuador.</p>
                                <div class="time main-text-color"> &nbsp; </div>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <div class="details">
                            <div class="date bold pull-left">
                                <div class="day main-text-color">Nov</div>
                                <div class="month main-bg-color alt-text-color">2013</div>
                            </div>
                            <div class="text">
                                <h5 class="title medium">Expansion </h5>
                                <p >Expanded from sheer study abroad services to career and personal development services.</p>
                                <div class="time main-text-color"> &nbsp; </div>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <div class="details">
                            <div class="date bold pull-left">
                                <div class="day main-text-color">Dec</div>
                                <div class="month main-bg-color alt-text-color">2013</div>
                            </div>
                            <div class="text">
                                <h5 class="title medium">First International Presentation </h5>
                                <p >Performed first high school presentations in Germany.</p>
                                <div class="time main-text-color"> &nbsp; </div>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <div class="details">
                            <div class="date bold pull-left">
                                <div class="day main-text-color">Jan</div>
                                <div class="month main-bg-color alt-text-color">2014</div>
                            </div>
                            <div class="text">
                                <h5 class="title medium">Incorporated</h5>
                                <p >In Germany.</p>
                                <div class="time main-text-color"> &nbsp; </div>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <div class="details">
                            <div class="date bold pull-left">
                                <div class="day main-text-color">Mar</div>
                                <div class="month main-bg-color alt-text-color">2014</div>
                            </div>
                            <div class="text">
                                <h5 class="title medium">Investor</h5>
                                <p >Francisco Galvez joined as an angel investor.</p>
                                <div class="time main-text-color"> &nbsp; </div>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <div class="details">
                            <div class="date bold pull-left">
                                <div class="day main-text-color">Apr</div>
                                <div class="month main-bg-color alt-text-color">2014</div>
                            </div>
                            <div class="text">
                                <h5 class="title medium">Incorporated</h5>
                                <p >In Spain</p>
                                <div class="time main-text-color"> &nbsp; </div>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>






@stop