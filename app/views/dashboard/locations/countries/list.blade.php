<div class="input-group col-md-12 col-sm-12 c-border-top">
    {{ Form::select( 'country',
    $countries, trans('home.form.inputs.country'),
    ['id'=>'country', 'class' => 'form-control', 'style' => 'width:100%'] ) }}
</div>
