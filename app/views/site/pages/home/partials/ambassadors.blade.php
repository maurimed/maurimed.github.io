<div class="row" style="margin-left: 0;margin-right: 0">
    <div class="col-sm-12 no-padding">
        <div class="top-box text-center">
            <label>{{trans('home.ambassadors_section.title')}}</label>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="cstm-img-ab">

        @foreach ($ambassadors as $ambassador)
            {{ get_profile_image_for_background($ambassador->profile, 'sm') }}
        @endforeach

        @for ($i = $ambassadors->count(); $i < 45; $i++)
            <img width="100"  src="/backend/images/profiles/default.jpg" />
        @endfor

    </div>

    <div class="country-box col-xs-10 col-xs-offset-1">

        @foreach(array_chunk($countries->all(), 4) as $countriesRow )
            @foreach($countriesRow as $country)
            <div class="col-sm-3">
                <a href="/ambassadors/{{ $country->country_code }}">

                    <div class="flag-wrapper">
                        <div class="flag flag-icon-background flag-icon-{{ strtolower($country->country_code) }}"
                             title="{{ $country->country_name }}"
                             id="{{ strtolower($country->country_code) }}">
                            <label class="f-country mar-l-50">{{ $country->country_name }}</label>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="clearfix"></div><br>
        @endforeach

    </div>

    <div class="clearfix"></div>
    <div class="contact-btn col-sm-12 no-padding">
        <div class="col-sm-6 text-right">
            <label class="p-list">{{trans('home.ambassadors_section.country')}}</label><br>
            <label class="p-list">{{trans('home.ambassadors_section.contact')}}</label>
        </div>
        <div class="col-sm-6">
            <a class="btn btn-lg btn-custom">{{trans('home.ambassadors_section.ambassador_online')}}</a>
        </div>
        <div class="clearfix"></div><br>
        <div class="line"></div>
    </div>
</div>

