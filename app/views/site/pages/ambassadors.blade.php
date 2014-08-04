@extends('site.layouts.master')

@section('content')

@include('site.layouts.partials.components.breadcums', ['title' => 'Ambassadors from ' . $cities[0]->country->country_name ])

    <div  style="padding-top:0" class="container only">
        <div class="row">

            <div style="text-align:justify" class="col-md-12 main-el">
                <div class="row">
                    @if( $cities->count() )
                            @foreach($cities as $city)
                                @foreach($city->ambassadors as $ambassador)
                                <div class="col-md-3 col-sm-6 main-el">
                                    <div class="person">
                                        <div class="photo">
            <!--                                <div class="overlay">-->
            <!--                                    <div class="socials">-->
            <!--                                        <a data-toggle="tooltip" title="Facebook" class="facebook" href="#"> <i class="fa fa-facebook"></i> </a>-->
            <!--                                        <a data-toggle="tooltip" title="Twitter" class="twitter" href="#"> <i class="fa fa-twitter"></i> </a>-->
            <!--                                        <a data-toggle="tooltip" title="Google Plus" class="gplus" href="#"> <i class="fa fa-google-plus"></i> </a>-->
            <!--                                        <a data-toggle="tooltip" title="Dribble" class="dribbble" href="#"> <i class="fa fa-dribbble"></i> </a>-->
            <!--                                        <a data-toggle="tooltip" title="Linkedin" class="linkedin" href="#"> <i class="fa fa-linkedin"></i> </a>-->
            <!--                                    </div>-->
            <!--                                </div>-->
                                            {{ get_profile_image($ambassador->profile, 'xl') }}
                                        </div>
                                        <div class="details">
                                            <h5 class="medium name">{{ $ambassador->present()->fullName }}</h5>
                                            <p class="italic title"> <i class="fa fa-map-marker"></i> {{ $city->city_name }} - {{ $city->state->state_name }}</p>
                                            <p class="italic title"> <i class="fa fa-envelope"></i> {{ $ambassador->profile->email }} </p>
                                            <p class="italic title"> <i class="fa fa-phone"></i> {{ $ambassador->phone }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        @endforeach
                    @else
                    <div class="col-md-12">
                        <h2>Coming soon...</h2>
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div>





@stop