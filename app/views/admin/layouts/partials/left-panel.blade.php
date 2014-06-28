<aside id="left-panel">

<!-- User info -->
@include('admin.layouts.partials.user-info')
<!-- end user info -->

<!-- NAVIGATION : This navigation is also responsive

To make this navigation dynamic please make sure to link the node
(the reference to the nav > ul) after page load. Or the navigation
will not initialize.
-->
    @include('admin.layouts.partials.nav')

    <span class="minifyme" data-action="minifyMenu">
        <i class="fa fa-arrow-circle-left hit"></i>
    </span>

</aside>