<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        &times;
    </button>
    <h4 class="modal-title" id="myModalLabel">Update Subscriber</h4>
</div>
{{ Form::model($subscriber, ['url' => 'dashboard/subscribers/'.$subscriber->id, 'method' => 'put']) }}

<div class="modal-body">

    <div class="row">

        <!-- Name form input -->
        <div class="col-md-6">
            {{ Form::label('name', 'Name') }}
            <div class="form-group">
                {{ Form::text('name', null, ['class'=>'form-control','placeholder' => 'Name']) }}
            </div>
        </div>

        <!-- Email form input -->
        <div class="col-md-6">
            {{ Form::label('email', 'Email') }}
            <div class="form-group">
                {{ Form::email('email', null, ['class'=>'form-control','placeholder' => 'Email']) }}
            </div>
        </div>

        <!-- Phone form input -->
        <div class="col-md-6">
            {{ Form::label('phone', 'Phone') }}
            <div class="form-group">
                {{ Form::text('phone', null, ['class'=>'form-control','placeholder' => 'Phone']) }}
            </div>
        </div>

        <!-- Age form input -->
        <div class="col-md-6">
            {{ Form::label('age', 'Age') }}
            <div class="form-group">
                {{ Form::text('age', null, ['class'=>'form-control','placeholder' => 'Age']) }}
            </div>
        </div>

        <!-- State form input -->
        <div class="col-md-6">
            {{ Form::label('about', 'About') }}
            <div class="form-group">
                {{ Form::text('about', null, ['class'=>'form-control','placeholder' => 'About']) }}
            </div>
        </div>

        <!-- Interest form input -->
        <div class="col-md-6">
            {{ Form::label('interest', 'Interest') }}
            <div class="form-group">
                {{ Form::text('interest', null, ['class'=>'form-control','placeholder' => 'Iinterest']) }}
            </div>
        </div>
    </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">
        Cancel
    </button>
    <button type="submit" class="btn btn-primary">
        Update Subscriber
    </button>
</div>
<script>
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
</script>
{{ Form::close() }}