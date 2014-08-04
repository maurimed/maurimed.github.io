@if($cities)
{{ Form::select('city', $cities, [], ['id'=>'city', 'style' => 'width:100%'] ) }}
<script>

    $select = $("select#city");

    $select.select2({
        placeholder: "Select a City",
        allowClear: true
    });

</script>
@else
<div class="note">There is no cities for this state please contact de Administrator</div>
@endif