@extends('site.layouts.master')
@section('content')
    @include('site.layouts.partials.components.breadcums', ['title' => Lang::get('policy.title')])
    <div style="padding-top:0" class="container">
        <div class="row">
            <div class="blog-wrapper col-md-12 main-el">
                <div class="element row">
                    <div class="col-md-8 col-md-offset-2" style="text-align: justify">

                        <div class="body">
                            <h2> {{ Lang::get('policy.title') }} </h2>
                            <small> {{ Lang::get('policy.modified') }} </small>
                            <br> <br>
                            <p class="text"> {{ Lang::get('policy.p1') }} </p>
                            <p class="text"> {{ Lang::get('policy.p2') }} </p>
                            <p class="text"> {{ Lang::get('policy.p3') }} </p>
                            <p class="text"> {{ Lang::get('policy.p4') }} </p>

                            <h4 >{{ Lang::get('policy.a') }}</h4>
                            <p class="text"> {{ Lang::get('policy.p5') }} </p>
                            <p class="text"> {{ Lang::get('policy.p6') }} </p>

                            <h4 >{{ Lang::get('policy.b') }}</h4>
                            <p class="text"> {{ Lang::get('policy.p7') }} </p>
                            <p class="text"> {{ Lang::get('policy.p8') }} </p>

                            <h4 >{{ Lang::get('policy.c') }}</h4>
                            <p class="text"> {{ Lang::get('policy.p9') }} </p>

                            <h4 >{{ Lang::get('policy.d') }}</h4>
                            <p class="text"> {{ Lang::get('policy.p10') }} </p>
                            <p class="text"> {{ Lang::get('policy.p11') }} </p>

                            <h4 >{{ Lang::get('policy.e') }}</h4>
                            <p class="text"> {{ Lang::get('policy.p12') }} </p>
    
                            <h4 >{{ Lang::get('policy.f') }}</h4>
                            <p class="text"> {{ Lang::get('policy.p13') }} </p>
                            <p class="text"> {{ Lang::get('policy.p14') }} </p>

                            <h4 >{{ Lang::get('policy.g') }}</h4>
                            <p class="text"> {{ Lang::get('policy.p15') }} </p>

                            <h4 >{{ Lang::get('policy.h') }}</h4>
                            <p class="text"> {{ Lang::get('policy.p16') }} </p>

                            <h4 >{{ Lang::get('policy.i') }}</h4>
                            <p class="text"> {{ Lang::get('policy.p17') }} </p>
                            <p class="text"> {{ Lang::get('policy.p18') }} </p>
                            <p class="text"> {{ Lang::get('policy.p19') }} </p>
                            <p class="text muted"> {{ Lang::get('policy.p20') }} </p>


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
