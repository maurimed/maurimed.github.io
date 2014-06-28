@extends('site.layouts.master')
@section('content')
    @include('site.layouts.partials.components.breadcums', ['title' => Lang::get('backgrounder.title')])
    <div style="padding-top:0" class="container">
        <div class="row">
            <div class="blog-wrapper col-md-12 main-el">
                <div class="element row">
                    <div class="col-md-8 col-md-offset-2" style="text-align: justify">

                        <div class="body">
                            <h3> {{ Lang::get('backgrounder.subtitle') }} </h3>
                            <br> <br>
                            <h4> {{ Lang::get('backgrounder.1') }} </h4>
                            <p class="text"> {{ Lang::get('backgrounder.p1') }} </p>
                            <p class="text"> {{ Lang::get('backgrounder.p2') }} </p>
                            <p class="text"> {{ Lang::get('backgrounder.p3') }} </p>
                        </div>
                        <div class="image">
                            <img src="/site/img/backgrounder/students_questions.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="body">
                            <h4> {{ Lang::get('backgrounder.2') }} </h4>
                            <p class="text"> {{ Lang::get('backgrounder.p4') }} </p>
                            <p class="text"> {{ Lang::get('backgrounder.p5') }} </p>
                            <p class="text"> {{ Lang::get('backgrounder.p6') }} </p>

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
