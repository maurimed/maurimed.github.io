@foreach($errors->all() as $message)
<div class="alert alert-danger fade in">
    <button class="close" data-dismiss="alert">×</button>
    <i class="fa-fw fa fa-times"></i>
    {{ $message }}
</div>
@endforeach