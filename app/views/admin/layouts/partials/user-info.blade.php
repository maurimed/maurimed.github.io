<div class="login-info">
    <span> <!-- User image size is adjusted inside CSS, it should stay as it -->
        <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">

            {{ get_profile_image(Auth::user()) }}

            <span>{{ Auth::user()->username }}</span>
            <i class="fa fa-angle-down"></i>
        </a>
    </span>
</div>