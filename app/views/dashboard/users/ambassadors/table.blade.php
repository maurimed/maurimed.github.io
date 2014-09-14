<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
    <thead>
    <tr>
        <th>ID</th>
        <th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
        <th><i class="fa fa-fw fa-envelope text-muted hidden-md hidden-sm hidden-xs"></i> Email</th>
        <th><i class="fa fa-fw fa-envelope text-muted hidden-md hidden-sm hidden-xs"></i> Personal Email</th>
        <th><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
        <th><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Personal Phone</th>
        <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> Address</th>
        <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> City</th>
        <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> State</th>
        <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> Country</th>
        <th><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Created At</th>
        <th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($ambassadors as $ambassador)
    <tr>
        <td>{{$ambassador->id}}</td>
        <td>{{$ambassador->present()->fullName}}</td>
        <td>{{$ambassador->profile->email}}</td>
        <td>{{$ambassador->email}}</td>
        <td>{{$ambassador->phone}}</td>
        <td>{{$ambassador->profile->phone}}</td>
        <td>{{$ambassador->address}}</td>
        @if(isset($ambassador->city->city_name))
        <td>{{$ambassador->city->city_name}}</td>
        <td>{{$ambassador->city->state->state_name}}</td>
        <td>{{$ambassador->city->state->country->country_name}}</td>
        @else
        <td>Not Asigned</td>
        <td>Not Asigned</td>
        <td>Not Asigned</td>
        @endif
        <td>{{$ambassador->present()->createdAt}}</td>
        <td>
            {{ Form::editProfile($ambassador->profile->username) }}
            {{ Form::delete('ambassadors', $ambassador->id) }}
        </td>

    </tr>
    @endforeach

    </tbody>
</table>