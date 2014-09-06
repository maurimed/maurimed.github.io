<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        &times;
    </button>
    <h4 class="modal-title" id="myModalLabel">Update University</h4>
</div>
{{ Form::model($university, ['url' => 'dashboard/universities/'.$university->id, 'method' => 'put']) }}

<div class="modal-body">

    <div class="row">

        <!-- Name form input -->
        <div class="col-md-4">
            {{ Form::label('name', 'Name', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('name', null, ['class'=>'form-control','placeholder' => 'Name']) }}
            </div>
        </div>

        <!-- Address form input -->
        <div class="col-md-4">
            {{ Form::label('address', 'Address', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('address', null, ['class'=>'form-control','placeholder' => 'Address']) }}
            </div>
        </div>

        <!-- Zip form input -->
        <div class="col-md-4">
            {{ Form::label('zip', 'Zip', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('zip', null, ['class'=>'form-control','placeholder' => 'Zip']) }}
            </div>
        </div>

        <!-- Country form input -->
        <div class="col-md-4">
            {{ Form::label('country', 'Country', ['class' => '']) }}
            {{ $university->country }}
            <div class="form-group">
                @include('admin.locations.countries.list', ['currentCountry' => $university->country])

            </div>
        </div>

        <!-- State form input -->
        <div class="col-md-4">
            {{ Form::label('state', 'State', ['class' => '']) }}
                {{ $university->state }}
            {{ Form::text('state',null ) }}
            <div class="form-group" id="statesLists"> </div>
        </div>

        <!-- City form input -->
        <div class="col-md-4">
            {{ Form::label('city', 'City', ['class' => '']) }}
                {{ $university->city }}
                {{ Form::text('city',null ) }}

            <div class="form-group"  id="citiesLists"> </div>
        </div>

        <!-- Type form input -->
        <div class="col-md-4">
            {{ Form::label('type', 'Type', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('type', null, ['class'=>'form-control','placeholder' => 'Type']) }}
            </div>
        </div>

        <!-- Info form input -->
        <div class="col-md-4">
            {{ Form::label('info', 'Info', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('info', null, ['class'=>'form-control','placeholder' => 'Info']) }}
            </div>
        </div>

        <!-- Web url form input -->
        <div class="col-md-4">
            {{ Form::label('web_url', 'Web url', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('web_url', null, ['class'=>'form-control','placeholder' => 'Web url']) }}
            </div>
        </div>

        <!-- Phone form input -->
        <div class="col-md-4">
            {{ Form::label('phone', 'Phone', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('phone', null, ['class'=>'form-control','placeholder' => 'Phone']) }}
            </div>
        </div>

        <!-- Email form input -->
        <div class="col-md-4">
            {{ Form::label('email', 'Email', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('email', null, ['class'=>'form-control','placeholder' => 'Email']) }}
            </div>
        </div>

        <!-- Tuition link form input -->
        <div class="col-md-4">
            {{ Form::label('tuition_link', 'Tuition link', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('tuition_link', null, ['class'=>'form-control','placeholder' => 'Tuition link']) }}
            </div>
        </div>

        <!-- Admissions link form input -->
        <div class="col-md-4">
            {{ Form::label('admissions_link', 'Admissions link', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('admissions_link', null, ['class'=>'form-control','placeholder' => 'Admissions link']) }}
            </div>
        </div>

        <!-- Sports division form input -->
        <div class="col-md-4">
            {{ Form::label('sports_division', 'Sports division', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('sports_division', null, ['class'=>'form-control','placeholder' => 'Sports division']) }}
            </div>
        </div>

        <!-- Closest airport form input -->
        <div class="col-md-4">
            {{ Form::label('closest_airport', 'Closest airport', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('closest_airport', null, ['class'=>'form-control','placeholder' => 'Closest airport']) }}
            </div>
        </div>

        <!-- Far from airport form input -->
        <div class="col-md-4">
            {{ Form::label('far_from_airport', 'Far from airport', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('far_from_airport', null, ['class'=>'form-control','placeholder' => 'Far from airport']) }}
            </div>
        </div>

        <!-- Housing form input -->
        <div class="col-md-4">
            {{ Form::label('housing', 'Housing', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('housing', null, ['class'=>'form-control','placeholder' => 'Housing']) }}
            </div>
        </div>

        <!-- Postal form input -->
        <div class="col-md-4">
            {{ Form::label('postal', 'Postal', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('postal', null, ['class'=>'form-control','placeholder' => 'Postal']) }}
            </div>
        </div>

        <!-- Years form input -->
        <div class="col-md-4">
            {{ Form::label('years', 'Years', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('years', null, ['class'=>'form-control','placeholder' => 'Years']) }}
            </div>
        </div>

        <!-- Settings form input -->
        <div class="col-md-4">
            {{ Form::label('settings', 'Settings', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('settings', null, ['class'=>'form-control','placeholder' => 'Settings']) }}
            </div>
        </div>

        <!-- Tuition form input -->
        <div class="col-md-4">
            {{ Form::label('tuition', 'Tuition', ['class' => '']) }}
            <div class="form-group">
                {{ Form::text('tuition', null, ['class'=>'form-control','placeholder' => 'Tuition']) }}
            </div>
        </div>




    </div>



</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">
        Cancel
    </button>
    <button type="submit" class="btn btn-primary">
        Update University
    </button>
</div>
<script>
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
</script>
{{ Form::close() }}