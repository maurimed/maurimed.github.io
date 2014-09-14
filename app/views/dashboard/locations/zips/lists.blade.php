@if($zips)
{{ Form::select('zip', $zips , [], ['id'=>'zip'] ) }}
<i></i>
@else
<div class="note">There is no zip codes for this city please contact de Administrator</div>
@endif