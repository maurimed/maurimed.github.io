<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        &times;
    </button>
    <h4 class="modal-title" id="myModalLabel">Update Country</h4>
</div>
{{ Form::open(['url' => 'dashboard/countries/'.$country->id, 'method' => 'put']) }}

<div class="modal-body">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::select('continent_id', $continents, $country->continent_id, ['placeholder' => 'Select', 'class' => 'form-control']) }}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="name" class="form-control" value="{{ $country->name }}"  required />
            </div>
        </div>
    </div>



</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">
        Cancel
    </button>
    <button type="submit" class="btn btn-primary">
        Update Country
    </button>
</div>
<script>
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
</script>
{{ Form::close() }}