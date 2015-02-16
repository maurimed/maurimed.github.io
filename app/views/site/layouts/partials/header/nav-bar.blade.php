<div class="container menu-bar" role="navigation">
    <div class="large-header">
        <div class="navbar-header">
            <a class="logo-box" href="/">
                <img class="img-responsive" alt="Epro 360" src="/site/images/logo.png">
            </a>
        </div>
        @if( Auth::guest() )
        <div class="utilities-buttons">
            <a data-toggle="collapse" href="#login" class="collapsed"> <i class="fa fa-lg fa-lock"></i> </a>
<!--            <a data-toggle="collapse" href="#search" class="collapsed"> <i class="fa fa-lg fa-search"></i> </a>-->
        </div>
        @endif
        <ul class="nav navbar-nav">

            <li class="{{ setActive( 'home' ) }}" > {{  link_to_route('home', trans('menu.home')) }} </li>
            <li class=" {{ setActive( 'about' ) }} dropdown closed">
                <a href="/about/message-from-co-founders"> {{ trans('menu.about.index') }} <span class="main-text-color light"></span> </a>
                <ul class="dropdown-menu" role="menu">
                    <li> {{ link_to_route('about.message', trans('menu.about.message_from_co_founders')) }} </li>
                    <li> {{ link_to_route('about.mission', trans('menu.about.mission_and_vision')) }} </li>
                    <li> {{ link_to_route('about.glance', trans('menu.about.epro_360_at_a_glance')) }} </li>
                    <li> {{ link_to_route('about.apart', trans('menu.about.what_set_us_apart')) }} </li>
                    <li> {{ link_to_route('about.team', trans('menu.about.epro_360_team')) }} </li>
                </ul>
            </li>
            <li  class=" {{ setActive( 'network' ) }} dropdown closed">
                <a href="/network"> {{ trans('menu.epro_360_network.index') }} <span class="main-text-color light"></span> </a>
                <ul class="dropdown-menu" role="menu">
                    <li>{{ link_to_route('network', trans('menu.epro_360_network.what_is')) }}</li>
                    <li>{{ link_to_route('network.mentorship', trans('menu.epro_360_network.mentorship')) }}</li>
                    <li>{{ link_to_route('network.coaching', trans('menu.epro_360_network.coaching')) }}</li>

                </ul>
            </li>
            <li class=" {{ setActive( 'services' ) }} dropdown closed">
                <a href="/services"> {{ trans('menu.services.index') }} <span class="main-text-color light"></span> </a>
                <ul class="dropdown-menu" role="menu">
                    <li>{{ link_to_route('services.academic', trans('menu.services.academic_scholarships')) }}</li>
                    <li>{{ link_to_route('services.athletic', trans('menu.services.athletic_scholarships')) }}</li>
                    <li>{{ link_to_route('services.english', trans('menu.services.english_courses_esl')) }}</li>
                    <li>{{ link_to_route('services.mentors', trans('menu.services.educational_mentors')) }}</li>
                    <li>{{ link_to_route('services.coaching', trans('menu.services.career_coaching')) }}</li>
                    <li>{{ link_to_route('services.internships', trans('menu.services.internships')) }}</li>
                    <li>{{ link_to_route('services.bonus', trans('menu.services.bonus_semester_at_sea')) }}</li>
                    <li>{{ link_to_route('services.undergrad', trans('menu.services.undergrad_programs')) }}</li>
					


                </ul>
            </li>
            <li class="{{ setActive( 'news' ) }}"> {{ link_to_route('news', trans('menu.news') ) }} </a> </li>
            <li class="{{ setActive( 'blog' ) }}"> {{ link_to_route('posts.index', 'Blog' ) }} </a> </li>
            <li class="{{ setActive( 'social-responsibility' ) }}"> {{ link_to_route('social-responsibility', trans('menu.social_responsibility') ) }} </a> </li>
            <li class="{{ setActive( 'contact' ) }}"> {{ link_to_route('contact', trans('menu.contact') ) }} </a> </li>
            @if(Auth::check())
            <li><a  href="/dashboard">Dashboard </a> </li>
            @endif
        </ul>
    </div>

    <div class="mobile-header">
        <ul class="collapse main-menu" id="navbar-collapse-1">
            <li class="main alt-bg-color">
                <button type="button" class="collapsed fa fa-times" data-toggle="collapse" data-target="#navbar-collapse-1"></button>
            </li>
            <li class="{{ setActive( 'home' ) }}"> {{  link_to_route('home', trans('menu.home')) }} </li>
            <li class="{{ setActive( 'about' ) }}">
                {{ link_to_route('about.message', trans('menu.about.index')) }}
                <ul class="submenu">

                    <li>{{ link_to_route('about.message', trans('menu.about.message_from_co_founders')) }}</li>
                    <li> {{ link_to_route('about.mission', trans('menu.about.mission_and_vision')) }} </li>
                    <li> {{ link_to_route('about.glance', trans('menu.about.epro_360_at_a_glance')) }} </li>
                    <li> {{ link_to_route('about.apart', trans('menu.about.what_set_us_apart')) }} </li>
                    <li> {{ link_to_route('about.team', trans('menu.about.epro_360_team')) }} </li>
                </ul>
            </li>
            <li class="{{ setActive( 'network' ) }}">
                {{ link_to_route('network', trans('menu.epro_360_network.what_is')) }}
                <ul class="submenu">
                    <li>{{ link_to_route('network', trans('menu.epro_360_network.what_is')) }}</li>
                    <li>{{ link_to_route('network.mentorship', trans('menu.epro_360_network.mentorship')) }}</li>
                    <li>{{ link_to_route('network.coaching', trans('menu.epro_360_network.coaching')) }}</li>

                </ul>
            </li>
            <li class="{{ setActive( 'services' ) }}">
                {{ link_to_route('services', trans('menu.services.index')) }}
                <ul class="submenu">
                    <li>{{ link_to_route('services.academic', trans('menu.services.academic_scholarships')) }}</li>
                    <li>{{ link_to_route('services.athletic', trans('menu.services.athletic_scholarships')) }}</li>
                    <li>{{ link_to_route('services.english', trans('menu.services.english_courses_esl')) }}</li>
                    <li>{{ link_to_route('services.mentors', trans('menu.services.educational_mentors')) }}</li>
                    <li>{{ link_to_route('services.coaching', trans('menu.services.career_coaching')) }}</li>
                    <li>{{ link_to_route('services.internships', trans('menu.services.internships')) }}</li>
                    <li>{{ link_to_route('services.bonus', trans('menu.services.bonus_semester_at_sea')) }}</li>
                    <li>{{ link_to_route('services.undergrad', trans('menu.services.undergrad_programs')) }}</li>					
                </ul>
            </li>
            <li class="{{ setActive( 'news' ) }}"> {{ link_to_route('news', trans('menu.news')) }}</li>
            <li class="{{ setActive( 'social-responsibility' ) }}"> {{ link_to_route('social-responsibility', trans('menu.social_responsibility') ) }} </a> </li>
        </ul>
        <div class="navbar-header">
            <a class="logo-box" href="/">
                <img class="img-responsive" alt="Epro 360" src="/site/images/logo.png">
            </a>
        </div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar main-bg-color"></span>
            <span class="icon-bar main-bg-color"></span>
            <span class="icon-bar main-bg-color"></span>
        </button>
        @if( Auth::guest() )
        <div class="utilities-buttons">
            <a data-toggle="collapse" href="#login" class="collapsed"> <i class="fa fa-lg fa-lock"></i> </a>
<!--            <a data-toggle="collapse" href="#search" class="collapsed"> <i class="fa fa-lg fa-search"></i> </a>-->
        </div>
        @endif
    </div>
</div>