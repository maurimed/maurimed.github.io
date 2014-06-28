<div class="top-bar hidden-sm hidden-xs">
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-sm-4 info txt-min">
                <span class="element"><i class="fa fa-envelope main-text-color"></i>{{ Lang::get('menu.email') }}</span>
                <span class="element"><i class="fa fa-phone main-text-color"></i> {{ Lang::get('menu.phone') }}</span>
            </div>
            <div class="col-sm-8">
                <div class="buttons pull-right text-right txt-min clearfix">
                    <!-- <div class="element"><a>My Account</a></div>
                    <div class="element"><a>Featured Products</a></div>
                    <div class="element"><a>Terms</a></div>
                    <div class="element"><a>FAQ</a></div>
                    <div class="element"><a>Location</a></div> -->
                    <div class="element">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/site/img/flags/{{ App::getLocale() }}.png" class="flag" alt="">
                            {{ App::getLocale() == 'en' ? 'English' : 'Español'  }}
                        <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="lang dropdown-menu" role="menu">
                            <a href="/{{ App::getLocale() == 'en' ? 'es' : 'en'  }}">{{ App::getLocale() == 'en' ? 'Español' : 'English'  }}</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>