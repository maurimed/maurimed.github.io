<nav>

<ul>
<li class="{{ setActive('dashboard') }}">
    <a href="/dashboard" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span  class="menu-item-parent">Dashboard</span></a>
</li>

@if( is_director() )
<li>
    <a href="#" title="Users"><i class="fa fa-lg fa-fw fa-users"></i> <span  class="menu-item-parent">Users</span></a>
    <ul>
        <li class="{{ setActive('ambassadors') }}" >
            {{ link_to_route('dashboard.directors.ambassadors.index', 'Ambassadors', [ Auth::user()->userable->id ]) }}
        </li>
        <li class="{{ setActive('students') }}" >
            {{ link_to_route('dashboard.directors.students.index', 'Students',  [ Auth::user()->userable->id ]) }}
        </li>
    </ul>
</li>
@endif

@if( is_admin() )
    <li>
        <a href="#" title="Users"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">Users</span></a>
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
            <li>
                <a href="#" title="Representatives"> <span  class="menu-item-parent">Representatives</span></a>
                <ul>
                    <li class="{{ setActive('parents') }}">{{ link_to_route('dashboard.parents.index', 'Parents') }}</li>
                    <li class="{{ setActive('managers') }}">{{ link_to_route('dashboard.managers.index', 'Managers') }}</li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" title="Institutions"><i class="fa fa-lg fa-fw fa-institution"></i> <span class="menu-item-parent">Institutions</span></a>
        <ul>
            <li class="{{ setActive('universities') }}" >
                {{ link_to_route('dashboard.universities.index', 'Universities') }}
            </li>
        </ul>
    </li>
    <li class="{{ setActive('subscribers') }}" >
        <a href="/dashboard/subscribers" title="Subscribers" > <i class="fa fa-lg fa-fw fa-user"></i><span  class="menu-item-parent"> Subscribers </span> </a>
    </li>
    <li  class="{{ setActive('posts') }}" >
        <a href="/dashboard/posts" title="Posts"><i class="fa fa-lg fa-fw fa-pencil"></i> <span  class="menu-item-parent">Posts</span></a>
    </li>


@endif
@if( is_student() )
    <li class="{{ setActive('requirements') }}">
        <a href="/dashboard/students/{{ Auth::user()->userable->id }}/requirements " title="Requirements"><i class="fa fa-lg fa-fw fa-file-text-o"></i> <span  class="menu-item-parent">Requirements</span></a>
    </li>
@endif
    
</ul>
</nav>