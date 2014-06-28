@extends('site.layouts.master')

@section('content')
    @include('site.layouts.partials.components.breadcums', ['title' => Lang::get('menu.social_responsibility')])

    <div class="container">
        <div class="row">
            <div class="blog-wrapper col-md-12 main-el">
                <div class="element row">
                    <div class="col-md-8 col-md-offset-2" style="text-align: justify">
                        <!-- <div class="carousel slide carousel-fade" data-ride="carousel" id="pers-blog-gal-1"> -->
                            <!-- <div class="carousel-inner"> -->
                                <!-- <div class="item active"> -->
                                    <div class="image">

                                        <img src="/site/img/responsibility/africa_classroom.jpg" class="img-responsive" alt="">
                                    </div>
                                <!-- </div> -->

                                <!-- <div class="item"> -->
                                    <!-- <div class="image"> -->

                                        <!-- <img src="/site/img/responsibility/poverty.jpg" class="img-responsive" alt=""> -->
                                    <!-- </div> -->
                                <!-- </div> -->

                            <!-- </div> -->
                            <!-- <div class="controls"> -->
                                <!-- <a class="left fa fa-chevron-left" href="#pers-blog-gal-1" data-slide="prev"> </a> -->
                                <!-- <a class="right fa fa-chevron-right" href="#pers-blog-gal-1" data-slide="next"> </a> -->
                            <!-- </div> -->
                        <!-- </div> -->
                        <div class="body">
                            <h3> {{ Lang::get('responsibility.title') }} </h3>
                            <br/>

                            <h4> {{ Lang::get('responsibility.subtitle1') }} </h4>
                            <p class="text"> {{ Lang::get('responsibility.p1') }} </p>
                        </div>


                        <div class=" separator"></div>


                        <div class="image">
                            <img src="/site/img/responsibility/poverty.jpg" class="img-responsive" alt="">
                        </div>

                        <div class="body">
                            <h4> {{ Lang::get('responsibility.subtitle2') }} </h4>
                            <p class="text"> {{ Lang::get('responsibility.p2') }} </p>

                        </div>

                        <div class=" separator"></div>

                        <div class="image">
                            <img src="/site/img/responsibility/childrens.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="body">
                            <p class="text"> {{ Lang::get('responsibility.p3') }} </p>
                            <h4> {{ Lang::get('responsibility.subtitle3') }} </h4>
                            <p class="text"> {{ Lang::get('responsibility.p4') }} </p>
                            <p class="text"> {{ Lang::get('responsibility.p5') }} </p>
                        </div>

                    </div>
                    <div class="col-md-11 col-md-offset-1">
                        <div class="sep-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop