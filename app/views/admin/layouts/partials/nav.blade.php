<nav>

<ul>
<li class="{{ setActive('dashboard') }}">
    <a href="/dashboard" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span  class="menu-item-parent">Dashboard</span></a>
</li>
@if(is_admin())
    <li>
        <a href="#" title="Users"><i class="fa fa-lg fa-fw fa-users"></i> <span  class="menu-item-parent">Users</span></a>
        <ul>
            <li class="{{ setActive('administrators') }}" >
                {{ link_to_route('dashboard.administrators.index', 'Administrators') }}
            </li>
            <li class="{{ setActive('directors') }}" >
                {{ link_to_route('dashboard.directors.index', 'Directors') }}
            </li>
            <li class="{{ setActive('ambassadors') }}" >
                {{ link_to_route('dashboard.ambassadors.index', 'Ambassadors') }}
            </li>
            <li class="{{ setActive('students') }}" >
                {{ link_to_route('dashboard.students.index', 'Students') }}
            </li>
            <li class="{{ setActive('representatives') }}" >
                {{ link_to_route('dashboard.representatives.index', 'Parents') }}
            </li>
        </ul>
    </li>
    <li  class="{{ setActive('posts') }}" >
        <a href="/dashboard/posts" title="Posts"><i class="fa fa-lg fa-fw fa-pencil"></i> <span  class="menu-item-parent">Posts</span></a>
    </li>
    <li>
        <a href="#" title="Locations"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span  class="menu-item-parent">Locations</span></a>
        <ul>
            <li class="{{ setActive('countries') }}" >
                {{ link_to_route('dashboard.countries.index', 'Countries') }}
            </li>
            <li class="{{ setActive('states') }}" >
                {{ link_to_route('dashboard.states.index', 'States') }}
            </li>
            <li class="{{ setActive('cities') }}" >
                {{ link_to_route('dashboard.cities.index', 'Cities') }}
            </li>
            <li class="{{ setActive('universities') }}" >
                {{ link_to_route('dashboard.universities.index', 'Universities') }}
            </li>
        </ul>
    </li>
@endif
@if(is_student())
    <li class="{{ setActive('requirements') }}">
        <a href="/dashboard/requirements" title="Requirements"><i class="fa fa-lg fa-fw fa-file-text-o"></i> <span  class="menu-item-parent">Requirements</span></a>
    </li>
@endif
    
</ul>
</nav>