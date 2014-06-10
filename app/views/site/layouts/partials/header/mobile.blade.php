<div class="mobile-header">
    <ul class="collapse main-menu" id="navbar-collapse-1">
        <li class="main alt-bg-color">
            <button type="button" class="collapsed fa fa-times" data-toggle="collapse" data-target="#navbar-collapse-1"></button>
        </li>

        <li>
            <a>Home - Nav</a>
        </li>

    </ul>

    @include('site.layouts.partials.header.logo')

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar main-bg-color"></span>
        <span class="icon-bar main-bg-color"></span>
        <span class="icon-bar main-bg-color"></span>
    </button>

    @include('site.layouts.partials.header.utilities')
</div>