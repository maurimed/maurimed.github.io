<div class="top-bar hidden-sm hidden-xs">
    <div class="container ">
        <div class="row">
            <div class="col-sm-4 info txt-min">
                <span class="element"><i class="fa fa-envelope main-text-color"></i>
                    <a href="mailto:{{ Lang::get('menu.email') }}" target="_blank">
                        {{ Lang::get('menu.email') }}
                    </a>
                </span>
                <span class="element"><i class="fa fa-skype main-text-color"></i>
                    <a href="skype:epro360study?call">{{ Lang::get('menu.phone') }}</a>
                </span>
            </div>
            <div class="col-sm-8">
                <div class="buttons pull-right text-right txt-min clearfix">
                    <!-- <div class="element"><a>My Account</a></div>
                    <div class="element"><a>Featured Products</a></div>
                    <div class="element"><a>Terms</a></div>
                    <div class="element"><a>FAQ</a></div>
                    <div class="element"><a>Location</a></div> -->
                    <div class="element">
                        <img  src="/site/img/blank.gif" class="flag flag-{{ LaravelLocalization::getCurrentLocale()  }}" alt="{{ LaravelLocalization::getCurrentLocaleNativeReading() }}">
                        <a style="margin-left:5px" href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ LaravelLocalization::getCurrentLocaleNativeReading()}}
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="lang dropdown-menu" role="menu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                               @if(App::getLocale() != $localeCode)
                                    <img src="/site/img/blank.gif" class="flag flag-{{ $localeCode  }}" alt="{{ $properties['native'] }}">
                                    <a rel="alternate" hreflang="{{$localeCode}}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}">
                                        {{{ $properties['native'] }}}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>