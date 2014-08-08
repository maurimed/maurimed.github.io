@if($states)
{{ Form::select('state', array_add($states, '', 'Region donde reside' ) , [''], ['id'=>'states', 'class'=> 'form-control' , 'style' => 'width:100%'] ) }}
<script>
    var $select = $("select#states");
    if((typeof select2 !== 'undefined' && $.isFunction(select2)))
    {
        $select.select2({
            placeholder: "Select a State",
            allowClear: true
        });
    }

    $select.on('change', function() {
        $('.loading-locations').css('display','block');

        var val = this.value;
        if(val !== '' ){
            $.ajax({
                type: "GET",
                url: '/api/cities',
                data: { 'state' : val }
            }).done(function($data) {
                $('#citiesLists').html($data);
                $('.loading-locations').css('display','none');

            });
        }
    });

    $select.trigger("change");
</script>
@else
<div class="note">There are no states for this country please contact de Administrator</div>
@endif

