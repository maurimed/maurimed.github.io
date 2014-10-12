@extends('site.layouts.master')

@section('content')

@include('site.layouts.partials.components.breadcums', ['title' => 'Ambassadors from ' .  $ambassadors[0]->country->country_name ])

    <div  style="padding-top:0" class="container only">
        <div class="row">

            <div style="text-align:justify" class="col-md-12 main-el">
                @foreach(array_chunk($ambassadors->all(), 4) as $chunks )
                <div class="row">
                    @foreach($chunks as $ambassador)
                    <div class="col-md-3 col-sm-6 main-el">
                        <div class="person">
                            <div class="photo">
                                @include('dashboard.users.partials.avatar',['user' => $ambassador->profile, 'size' => 'xl'])
                            </div>
                            <div class="details">
                                <h5 class="medium name">{{ $ambassador->present()->fullName }}</h5>
                                <p class="italic title"> <i class="fa fa-map-marker"></i> {{ $ambassador->city->city_name }} </p>
                                <p class="italic title"> <i class="fa fa-envelope"></i> {{ $ambassador->profile->email }} </p>
                                <p class="italic title"> <i class="fa fa-phone"></i> {{ $ambassador->phone }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>





@stop