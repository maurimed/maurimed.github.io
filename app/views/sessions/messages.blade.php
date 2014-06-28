@if(Session::has('danger_message'))
    <div class="alert alert-icon alert-danger">
        <i class="fa fa-exclamation-circle pull-left"></i>
        <div class="text">
            <span class="bold">Error ! </span> {{ Session::get('danger_message') }}
        </div>
    </div>
@endif
@if(Session::has('info_message'))
    <div class="alert alert-icon alert-info">
        <i class="fa fa-thumbs-up pull-left"></i>
        <div class="text">
            <span class="bold">Thumbs Up ! </span> {{ Session::get('info_message') }}
        </div>
    </div>
@endif

@if(Session::has('warning_message'))
    <div class="alert alert-icon alert-warning">
        <i class="fa fa-exclamation-triangle pull-left"></i>
        <div class="text">
            <span class="bold">Warning ! </span> {{ Session::get('warning_message') }}
        </div>
    </div>
@endif

@if(Session::has('success_message'))
    <div class="alert alert-icon alert-success">
        <i class="fa fa-info pull-left"></i>
        <div class="text">
            <span class="bold">Success ! </span> {{ Session::get('success_message') }}
        </div>
    </div>
@endif

