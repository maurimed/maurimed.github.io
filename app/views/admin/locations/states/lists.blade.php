@if($states)
{{ Form::select('state', array_add($states, '', trans('home.form.inputs.state') ) , [''], ['id'=>'states', 'class'=> 'form-control' , 'style' => 'width:100%'] ) }}
<script>
    var $select = $("select#states");
    if((typeof select2 !== 'undefined' && $.isFunction(select2)))
    {
        $select.select2({
            placeholder: "Select a State",
            allowClear: true
        });
    }
    if (!$('.loading-locations').length){

        $select.on('change', function() {

                var val = this.value;
                if(val !== '' ){
                    $.ajax({
                        type: "GET",
                        url: '/api/cities',
                        data: { 'state' : val }
                    }).done(function($data) {
                        $('#citiesLists').html($data);

                    });
                }
            }

        })
        $select.trigger("change");
    }

</script>
@else
<div class="note">There are no states for this country please contact de Administrator</div>
@endif

