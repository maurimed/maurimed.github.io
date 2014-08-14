<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        &times;
    </button>
    <h4 class="modal-title" id="myModalLabel">{{ $university->present()->name }}</h4>
</div>

<div class="modal-body">

    <div class="row">
        <div class="col-md-3">
            <strong>City:</strong>
            <p> {{ $university->present()->city }} </p>
        </div>
        <div class="col-md-3">
            <strong>State:</strong>
            <p>{{ $university->present()->state }} </p>
        </div>
        <div class="col-md-3">
            <strong>County:</strong>
            <p>{{ $university->present()->county }} </p>
        </div>
        <div class="col-md-3">
            <strong>Country:</strong>
            <p>{{ $university->present()->country }} </p>
        </div>
    </div>
    <div class="row">

        <div class="col-md-3">
            <strong>Zip:</strong>
            <p>{{ $university->present()->zip }} </p>
        </div>
        <div class="col-md-3">
            <strong>Address:</strong>
            <p> {{ $university->present()->address }} </p>
        </div>
        <div class="col-md-3">
            <strong>Postal Code</strong>
            <p> {{ $university->present()->postal }} </p>
        </div>
        <div class="col-md-3">
            <strong>Type:</strong>
            <p>{{ $university->present()->type }} </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <strong>Info:</strong>
            <p>{{ $university->present()->info }} </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <strong>Email</strong>
            <p> {{ $university->present()->email }} </p>
        </div>
        <div class="col-md-5">
            <strong>Web</strong>
            <p> {{ $university->present()->web_url }} </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <strong>Phone</strong>
            <p> {{ $university->present()->phone }} </p>
        </div>
        <div class="col-md-3">
            <strong>Tuition Link</strong>
            <p> {{ $university->present()->tuition_link }} </p>
        </div>

        <div class="col-md-3">
            <strong>Admissions Link</strong>
            <p> {{ $university->present()->admissions_link }} </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <strong>Closest Airport</strong>
            <p> {{ $university->present()->closest_airport }} </p>
        </div>

        <div class="col-md-3">
            <strong>Far From Airport</strong>
            <p> {{ $university->present()->far_from_airport }} </p>
        </div>
        <div class="col-md-3">
            <strong>Housing</strong>
            <p> {{ $university->present()->housing }} </p>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <strong>Years</strong>
            <p> {{ $university->present()->years }} </p>
        </div>
        <div class="col-md-3">
            <strong>Settings</strong>
            <p> {{ $university->present()->settings }} </p>
        </div>
        <div class="col-md-3">
            <strong>Tuition</strong>
            <p> {{ $university->present()->tuitionLink }} </p>
        </div>

        <div class="col-md-3">
            <strong>Sports Division</strong>
            <p> {{ $university->present()->sports_division }} </p>
        </div>
    </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" data-dismiss="modal">
        Close
    </button>

</div>

