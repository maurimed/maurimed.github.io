@extends('dashboard.layouts.master')
@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Users', $user->username, 'Profile']])
@stop
@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'Users', 'subtitle' => '> ' . $user->username, 'icon' => 'user'])
@stop
@section('content')
<section id="widget-grid" class="">
<!-- row -->
<div class="row">
<div class="col-sm-12">
<div class="well well-sm">
<div class="row">
<div class="col-sm-12 col-md-8 col-lg-8">
<div class="well well-light well-sm no-margin no-padding">
<div class="row">
    <div class="col-sm-12">
        <div id="myCarousel" class="carousel fade profile-carousel">
            <div class="air air-bottom-right padding-10">
<!--                <a href="javascript:void(0);" class="btn txt-color-white bg-color-teal btn-sm"><i class="fa fa-check"></i> Follow</a>&nbsp; <a href="javascript:void(0);" class="btn txt-color-white bg-color-pinkDark btn-sm"><i class="fa fa-link"></i> Connect</a>-->
                {{ link_to_edit_profile($user) }}


            </div>
            <div class="air air-top-left padding-10">
                <h4 class="txt-color-white font-md">Since {{ $user->created_at }}</h4>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/admin/img/demo/s1.jpg" alt="demo user">
                </div>
                <div class="item">
                    <img src="/admin/img/demo/s2.jpg" alt="demo user">
                </div>
                <div class="item">
                    <img src="/admin/img/demo/m3.jpg" alt="demo user">
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-3 profile-pic">
                {{ get_profile_image($user, 'md') }}

<!--                <div class="padding-10">-->
<!--                    <h4 class="font-md"><strong>1,543</strong>-->
<!--                        <br>-->
<!--                        <small>Followers</small></h4>-->
<!--                    <br>-->
<!--                    <h4 class="font-md"><strong>419</strong>-->
<!--                        <br>-->
<!--                        <small>Connections</small></h4>-->
<!--                </div>-->
            </div>
            <div class="col-sm-6">
                <h1>{{ $user->userable->firstname }} <span class="semi-bold">{{ $user->userable->lastname }}</span>
                    <br>
                    <small> {{ $user->userable_type }}</small></h1>

                <ul class="list-unstyled">
                    <li>
                        <p class="text-muted">
                            <i class="fa fa-phone"></i>&nbsp;&nbsp;{{ $user->userable->phone }}
                        </p>
                    </li>
                    <li>
                        <p class="text-muted">
                            <i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                        </p>
                    </li>
<!--                    <li>-->
<!--                        <p class="text-muted">-->
<!--                            <i class="fa fa-skype"></i>&nbsp;&nbsp;<span class="txt-color-darken">{{ $user->skype }}</span>-->
<!--                        </p>-->
<!--                    </li>-->

                </ul>
                <br>
                <p class="font-md">
                    <i>A little about me...</i>
                </p>
                <p>
                    {{ $user->userable->about_me }}
                </p>
                <br>
<!--                <a href="javascript:void(0);" class="btn btn-default btn-xs"><i class="fa fa-envelope-o"></i> Send Message</a>-->
                <br>

                <br>
            </div>

<!--            <div class="col-sm-3">-->
<!--                <h1><small>Connections</small></h1>-->
<!--                <ul class="list-inline friends-list">-->
<!--                    <li><img src="/dashboard/img/avatars/1.png" alt="friend-1">-->
<!--                    </li>-->
<!--                    <li><img src="/dashboard/img/avatars/2.png" alt="friend-2">-->
<!--                    </li>-->
<!--                    <li><img src="/dashboard/img/avatars/3.png" alt="friend-3">-->
<!--                    </li>-->
<!--                    <li><img src="/dashboard/img/avatars/4.png" alt="friend-4">-->
<!--                    </li>-->
<!--                    <li><img src="/dashboard/img/avatars/5.png" alt="friend-5">-->
<!--                    </li>-->
<!--                    <li><img src="/dashboard/img/avatars/male.png" alt="friend-6">-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="javascript:void(0);">413 more</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--                <h1><small>Recent visitors</small></h1>-->
<!--                <ul class="list-inline friends-list">-->
<!--                    <li><img src="/dashboard/img/avatars/male.png" alt="friend-1">-->
<!--                    </li>-->
<!--                    <li><img src="/dashboard/img/avatars/female.png" alt="friend-2">-->
<!--                    </li>-->
<!--                    <li><img src="/dashboard/img/avatars/female.png" alt="friend-3">-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
        </div>
    </div>
</div>

<!-- end row -->
</div>
</div>

</div>
</div>
</div>
<!-- end row -->
</section>
@stop
@section('plugins')

@stop