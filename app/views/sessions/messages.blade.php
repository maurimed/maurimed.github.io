@if(Session::has('warning_message'))
    <div class="alert alert-warning fade in">
        <button class="close" data-dismiss="alert"> × </button>
        <i class="fa-fw fa fa-warning"></i>
        {{ Session::get('warning_message') }}
    </div>
@endif

@if(Session::has('success_message'))
    <div class="alert alert-success fade in">
        <button class="close" data-dismiss="alert"> × </button>
        <i class="fa-fw fa fa-check"></i>
        {{ Session::get('success_message') }}
    </div>
@endif

@if(Session::has('info_message'))
    <div class="alert alert-info fade in">
        <button class="close" data-dismiss="alert"> × </button>
        <i class="fa-fw fa fa-info"></i>
        {{ Session::get('info_message') }}
    </div>
@endif

@if(Session::has('danger_message'))
    <div class="alert alert-danger fade in">
        <button class="close" data-dismiss="alert"> × </button>
        <i class="fa-fw fa fa-times"></i>
        {{ Session::get('danger_message') }}
    </div>
@endif









