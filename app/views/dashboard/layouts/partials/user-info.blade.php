<div class="login-info">
    <span>
        <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
            @include('dashboard.users.partials.avatar',['user' => $currentUser, 'size' => 'sm'])

            <span>{{ $currentUser->username }}</span>
            <i class="fa fa-angle-down"></i>
        </a>
    </span>
</div>