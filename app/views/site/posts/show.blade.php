@extends('site.layouts.master')

@section('content')
@include('site.layouts.partials.components.breadcums', ['title' => $post->title ])

<div class="blog-wrapper single">
<div class="container">
<div class="row">
<div class="main-el clearfix">
<div class="text-center stats hidden-sm hidden-xs col-md-1">
    <div class="date">
        <div class="day light main-text-color">{{ $post->present()->day }}</div>
        <div class="month">{{ $post->present()->month }}</div>
    </div>
</div>
<div class="col-md-11">
    @if($post->image != "")
    <div class="image">
        <img src="/site/img/posts/{{ $post->image }}" class="img-responsive" alt="{{ $post->title }}">
    </div>

<!--    <div class="carousel slide carousel-fade" data-ride="carousel" id="pers-blog-gal-1">-->
<!--        <div class="carousel-inner">-->
<!--        <div class="item active">-->
<!--            <div class="image">-->
<!--                <img src="../../images/image-wide-2.jpg" class="img-responsive" alt="">-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--        </div>-->
<!--        <div class="controls">-->
<!--            <a class="left fa fa-chevron-left" href="#pers-blog-gal-1" data-slide="prev"> </a>-->
<!--            <a class="right fa fa-chevron-right" href="#pers-blog-gal-1" data-slide="next"> </a>-->
<!--        </div>-->
<!--    </div>-->
    @endif
    <h3>{{ $post->title }}</h3>
    <p class="post-links italic">{{ Lang::get('blog.posted_by') }}<a>{{ $post->owner->username }}</a> </p>

    <p class="text">{{ $post->body }}</p>

    <div class="author-box main-bg-color alt-text-color clearfix">
        <div class="img-wrap">
        @include('dashboard.users.partials.avatar',['user' => $post->owner, 'size' => 'thumb'])

        </div>
        <div class="text">
            <div class="author">
                {{ $post->owner->username }}
            </div>

            <div class="about italic">
                {{ $post->owner->userable->about_me }}
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


@stop