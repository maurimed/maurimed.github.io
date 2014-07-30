@if($states)
{{ Form::select('state',$states , [], ['id'=>'states', 'style' => 'width:100%'] ) }}
<script>
    var $select = $("select#states");
    $select.select2({
        placeholder: "Select a State",
        allowClear: true
    });

    $select.on('change', function() {
        var val = this.value;
        $.ajax({
            type: "GET",
            url: '/api/cities',
            data: { 'state' : val }
        }).done(function($data) {
            $('#citiesLists').html($data);
            $('#zipsLists').html('<div class=note > Please select the city first </div>');
        });
    });

    $select.trigger("change");
</script>
@else
<div class="note">There is no states for this country please contact de Administrator</div>
@endif

