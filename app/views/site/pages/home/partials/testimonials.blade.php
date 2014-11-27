<div style="padding-top:0" class="container">

    <div class="row" >
        <div class="col-md-12 text-center preview-banner main-el">
            <div class="text">
                <h2 class="main-text-color">{{ trans('home.testimonials.title') }}</h2>
                <div class="divider divider-3"></div>
            </div>
        </div>
   
        <div id="testimonials-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                @foreach( array_chunk( trans('home.testimonials.data'), 3 ) as $index => $testimonials )

                <div class="item {{ !$index ? 'active': '' }}">
                    @foreach( $testimonials as $testimonial)
                    <div class="col-md-4 col-sm-6 col-xs-12 main-el ">
                        <div class="testimonial-wrapper background-{{$testimonial['bg-color']}}">
                            <div class="testimonial-avatar ">
                                <img src="/site/img/home/testimonials/{{$testimonial['image']}}" alt="{{$testimonial['name']}}">
                            </div>
                            <div class="testimonial-title">{{$testimonial['title']}}</div>
                            <div class="testimonial-content">{{$testimonial['content']}}</div>
                            <div class="testimonial-footer">{{$testimonial['name']}}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach

            </div>
            <ol class="carousel-indicators">
                <li data-target="#testimonials-slider" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials-slider" data-slide-to="1"></li>
                {{--<li data-target="#testimonials-3-crsl" data-slide-to="2"></li>--}}
                {{--<li data-target="#testimonials-3-crsl" data-slide-to="3"></li>--}}
            </ol>
        </div>
    </div>

</div>

