<div class="input-group col-md-12 col-sm-12 c-border-top">
    {{ Form::select(
        'country',
        array_add($countries, '', trans('home.form.placeholders.country')),
        [$currentCountry],
        ['id'=>'country', 'class' => 'form-control']
    ) }}
</div>

<script>
    var $select = $("select#country");
    $select.on('change', function() {
        $('.loading-locations').css('display','block');

        var val = this.value;
        if(val !== '' ){
            $.ajax({
                type: "GET",
                url: '/api/states',
                data: { 'country_code' : val }
            }).done(function(data) {
                $('#statesLists').html(data);
                $('.loading-locations').css('display','none')
            });
        }
    });
    $select.trigger("change");
</script>