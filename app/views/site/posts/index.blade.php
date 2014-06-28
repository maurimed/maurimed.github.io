@extends('site.layouts.master')
@section('content')
@include('site.layouts.partials.components.breadcums', ['title' => 'Blog' ])
<div class="container">
    <div class="row">
        <div class="blog-wrapper col-md-12 main-el">
            @foreach($posts as $post)
            <div class="element row">
                <div class="text-center stats hidden-sm hidden-xs col-md-1">
                    <div class="date">
                        <div class="day light main-text-color">{{ $post->present()->day }}</div>

                        <div class="month">{{ $post->present()->month }}</div>
                    </div>
<!--                    <div class="likes">-->
<!--                        <a> <i class="fa fa-heart"></i> </a>-->
<!--                        <div class="amount">735</div>-->
<!--                    </div>-->
<!--                    <div class="share">-->
<!--                        <i class="fa fa-share">-->
<!--                        <span class="socials">-->
<!--                        <a class="pinterest" href="#"> <i class="fa fa-pinterest"></i> </a>-->
<!--                        <a class="gplus" href="#"> <i class="fa fa-google-plus"></i> </a>-->
<!--                        <a class="twitter" href="#"> <i class="fa fa-twitter"></i> </a>-->
<!--                        <a class="facebook" href="#"> <i class="fa fa-facebook"></i> </a>-->
<!--                        </span>-->
<!--                        </i>-->
<!--                        <div>Share</div>-->
<!--                    </div>-->
                </div>
                <div class="col-md-11">
                    @if($post->image != "")
                    <div class="image">
<!--                        <div class="overlay">-->
<!--                            <i class="fa fa-share md"></i>-->
<!--                        </div>-->
                        <img src="/site/img/posts/{{ $post->image }}" class="img-responsive" alt="{{ $post->title }}">
                    </div>
                    @endif
                    <div class="body">
                        <h3><a>{{ $post->title }}</a></h3>
                         <p class="italic post-links">{{ Lang::get('blog.posted_by') }} {{ $post->owner->username }}</p>
                        <p class="text">
                            {{ $post->body }}
                        <span class="read-link main-text-color"><a href="/blog/{{ $post->slug }}">{{ Lang::get('blog.read_more') }} </a><i class="fa fa-play-circle-o"></i></span>

                        </p>
                    </div>
                </div>
                <div class="col-md-11 col-md-offset-1">
                    <div class="sep-line"></div>
                </div>
            </div>
            @endforeach
            <div class="col-md-11 col-md-offset-1">
                {{ $posts->links() }}

            </div>
        </div>
    </div>
</div>
@stop