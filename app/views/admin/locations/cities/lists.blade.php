@if($cities)
{{ Form::select('city', $cities, [], ['id'=>'city', 'style' => 'width:100%'] ) }}
<script>

    $select = $("select#city");

    $select.select2({
        placeholder: "Select a City",
        allowClear: true
    });
    $select.on('change', function() {
        var val = this.value;
        console.log(val);
        $.ajax({
            type: "GET",
            url: '/api/zips',
            data: { 'city' : val }
        }).done(function($data) {
            $('#zipsLists').html($data);
        });
    });
    $select.trigger("change");
</script>
@else
<div class="note">There is no cities for this state please contact de Administrator</div>
@endif