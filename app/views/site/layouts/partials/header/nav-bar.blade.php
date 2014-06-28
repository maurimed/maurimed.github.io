<div class="container menu-bar" role="navigation">
    <div class="large-header">
        <div class="navbar-header">
            <a class="logo-box" href="/">
                <img class="img-responsive" alt="Epro 360" src="/site/images/logo.png">
            </a>
        </div>
        <div class="utilities-buttons">
            <a data-toggle="collapse" href="#login" class="collapsed"> <i class="fa fa-lg fa-lock"></i> </a>
<!--            <a data-toggle="collapse" href="#search" class="collapsed"> <i class="fa fa-lg fa-search"></i> </a>-->
        </div>
        <ul class="nav navbar-nav">

            <li class="{{ setActive( 'home' ) }}" > {{  link_to_route('home', Lang::get('menu.home')) }} </li>
            <li class=" {{ setActive( 'about' ) }} dropdown closed">
                <a href="/about/message-from-co-founders"> {{ Lang::get('menu.about.index') }} <span class="main-text-color light"></span> </a>
                <ul class="dropdown-menu" role="menu">
                    <li> {{ link_to_route('about.message', Lang::get('menu.about.message_from_co_founders')) }} </li>
                    <li> {{ link_to_route('about.mission', Lang::get('menu.about.mission_and_vision')) }} </li>
                    <li> {{ link_to_route('about.glance', Lang::get('menu.about.epro_360_at_a_glance')) }} </li>
                    <li> {{ link_to_route('about.apart', Lang::get('menu.about.what_set_us_apart')) }} </li>
                    <li> {{ link_to_route('about.team', Lang::get('menu.about.epro_360_team')) }} </li>
                </ul>
            </li>
            <li  class=" {{ setActive( 'network' ) }} dropdown closed">
                <a href="/network"> {{ Lang::get('menu.epro_360_network.index') }} <span class="main-text-color light"></span> </a>
                <ul class="dropdown-menu" role="menu">
                    <li>{{ link_to_route('network', Lang::get('menu.epro_360_network.what_is')) }}</li>
                    <li>{{ link_to_route('network.mentorship', Lang::get('menu.epro_360_network.mentorship')) }}</li>
                    <li>{{ link_to_route('network.coaching', Lang::get('menu.epro_360_network.coaching')) }}</li>

                </ul>
            </li>
            <li class=" {{ setActive( 'services' ) }} dropdown closed">
                <a href="/services"> {{ Lang::get('menu.services.index') }} <span class="main-text-color light"></span> </a>
                <ul class="dropdown-menu" role="menu">
                    <li>{{ link_to_route('services.academic', Lang::get('menu.services.academic_scholarships')) }}</li>
                    <li>{{ link_to_route('services.athletic', Lang::get('menu.services.athletic_scholarships')) }}</li>
                    <li>{{ link_to_route('services.english', Lang::get('menu.services.english_courses_esl')) }}</li>
                    <li>{{ link_to_route('services.mentors', Lang::get('menu.services.educational_mentors')) }}</li>
                    <li>{{ link_to_route('services.coaching', Lang::get('menu.services.career_coaching')) }}</li>
                    <li>{{ link_to_route('services.internships', Lang::get('menu.services.internships')) }}</li>
                    <li>{{ link_to_route('services.bonus', Lang::get('menu.services.bonus_semester_at_sea')) }}</li>


                </ul>
            </li>
            <li class="{{ setActive( 'news' ) }}"> {{ link_to_route('news', Lang::get('menu.news') ) }} </a> </li>
            <li class="{{ setActive( 'blog' ) }}"> {{ link_to_route('posts.index', 'Blog' ) }} </a> </li>
            <li class="{{ setActive( 'social-responsibility' ) }}"> {{ link_to_route('social-responsibility', Lang::get('menu.social_responsibility') ) }} </a> </li>

        </ul>
    </div>

    <div class="mobile-header">
        <ul class="collapse main-menu" id="navbar-collapse-1">
            <li class="main alt-bg-color">
                <button type="button" class="collapsed fa fa-times" data-toggle="collapse"
                        data-target="#navbar-collapse-1"></button>
            </li>
            <li class="{{ setActive( 'home' ) }}"> {{  link_to_route('home', Lang::get('menu.home')) }} </li>
            <li class="{{ setActive( 'about' ) }}">
                {{ link_to_route('about.message', Lang::get('menu.about.index')) }}
                <ul class="submenu">

                    <li>{{ link_to_route('about.message', Lang::get('menu.about.message_from_co_founders')) }}</li>
                    <li> {{ link_to_route('about.mission', Lang::get('menu.about.mission_and_vision')) }} </li>
                    <li> {{ link_to_route('about.glance', Lang::get('menu.about.epro_360_at_a_glance')) }} </li>
                    <li> {{ link_to_route('about.apart', Lang::get('menu.about.what_set_us_apart')) }} </li>
                    <li> {{ link_to_route('about.team', Lang::get('menu.about.epro_360_team')) }} </li>
                </ul>
            </li>
            <li class="{{ setActive( 'network' ) }}">
                {{ link_to_route('network', Lang::get('menu.epro_360_network.what_is')) }}
                <ul class="submenu">
                    <li>{{ link_to_route('network', Lang::get('menu.epro_360_network.what_is')) }}</li>
                    <li>{{ link_to_route('network.mentorship', Lang::get('menu.epro_360_network.mentorship')) }}</li>
                    <li>{{ link_to_route('network.coaching', Lang::get('menu.epro_360_network.coaching')) }}</li>

                </ul>
            </li>
            <li class="{{ setActive( 'services' ) }}">
                {{ link_to_route('services', Lang::get('menu.services.index')) }}
                <ul class="submenu">
                    <li>{{ link_to_route('services.academic', Lang::get('menu.services.academic_scholarships')) }}</li>
                    <li>{{ link_to_route('services.athletic', Lang::get('menu.services.athletic_scholarships')) }}</li>
                    <li>{{ link_to_route('services.english', Lang::get('menu.services.english_courses_esl')) }}</li>
                    <li>{{ link_to_route('services.mentors', Lang::get('menu.services.educational_mentors')) }}</li>
                    <li>{{ link_to_route('services.coaching', Lang::get('menu.services.career_coaching')) }}</li>
                    <li>{{ link_to_route('services.internships', Lang::get('menu.services.internships')) }}</li>
                    <li>{{ link_to_route('services.bonus', Lang::get('menu.services.bonus_semester_at_sea')) }}</li>
                </ul>
            </li>
            <li class="{{ setActive( 'news' ) }}"> {{ link_to_route('news', Lang::get('menu.news')) }}</li>
            <li class="{{ setActive( 'social-responsibility' ) }}"> {{ link_to_route('social-responsibility', Lang::get('menu.social_responsibility') ) }} </a> </li>
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
        <div class="utilities-buttons">
            <a data-toggle="collapse" href="#login" class="collapsed"> <i class="fa fa-lg fa-lock"></i> </a>
<!--            <a data-toggle="collapse" href="#search" class="collapsed"> <i class="fa fa-lg fa-search"></i> </a>-->
        </div>
    </div>
</div>