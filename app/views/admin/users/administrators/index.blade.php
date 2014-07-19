@extends('admin.layouts.master')

@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => ['Users','Administrators', 'List']])
@stop

@section('title')
@include('admin.layouts.partials.page-title',['title' => 'Administrators', 'subtitle' => '> List', 'icon' => 'user'])
@stop

@section('content')
<section id="widget-grid" class="">

<!-- row -->
<div class="row">

<!-- NEW WIDGET START -->
<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<!-- Widget ID (each widget will need unique ID)-->
<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

								data-widget-colorbutton="false"
								data-widget-editbutton="false"
								data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"
								data-widget-custombutton="false"
								data-widget-collapsed="true"
								data-widget-sortable="false"

								-->
<header>
    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
    <h2>Administrators</h2>
    {{ link_to_route('dashboard.administrators.create','New Administrator',[]  ,['class' => 'btn btn-primary pull-right', 'id' => 'administrator-create' ]) }}
</header>

<!-- widget div-->
<div>

<!-- widget edit box -->
<div class="jarviswidget-editbox">
    <!-- This area used as dropdown edit box -->

</div>
<!-- end widget edit box -->

<!-- widget content -->
<div class="widget-body no-padding">
@include('admin.partials.messages')
<table id="dt_basic" class="table table-responsive responsive table-striped table-bordered table-hover" width="100%">
<thead>
<tr>
    <th>ID</th>
    <th><i class="fa fa-fw fa-picture text-muted hidden-md hidden-sm hidden-xs"></i> Image</th>
    <th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Username</th>
    <th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>Full Name</th>
    <th><i class="fa fa-fw fa-envelope txt-color-blue hidden-md hidden-sm hidden-xs"></i> Emails</th>
    <th><i class="fa fa-fw fa-phone txt-color-blue hidden-md hidden-sm hidden-xs"></i> Phones</th>
    <th><i class="fa fa-fw fa-address txt-color-blue hidden-md hidden-sm hidden-xs"></i> Address</th>
    <th><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> City</th>
    <th><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Country</th>
    <th><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Created At</th>
    <th><i class="fa fa-fw fa-user txt-color-blue hidden-md hidden-sm hidden-xs"></i> Created by</th>
    <th><i class="fa fa-fw fa-pencil txt-color-blue hidden-md hidden-sm hidden-xs"></i> Actions</th>
</tr>
</thead>
<tbody>
@foreach($administrators as $administrator)
<tr>
    <td>{{$administrator->id}}</td>
    <td>{{ get_profile_image($administrator->profile) }}</td>
    <td>{{$administrator->profile->username}}</td>
    <td>{{$administrator->firstname}} {{$administrator->lastname}}</td>
    <td>{{$administrator->profile->email}} - {{$administrator->personal_email}}</td>
    <td>{{$administrator->phone}} - {{$administrator->personal_phone}}</td>
    <td>{{$administrator->address}}</td>
    <td>{{$administrator->city->name}}</td>
    <td>{{$administrator->city->state->country->name}}</td>
    <td>{{$administrator->created_at}}</td>
    <td>{{$administrator->creator->username}}</td>
    <td>
        @if($administrator->profile->id !== 1)
            {{ Form::delete('administrators', $administrator->id) }}
        @endif
    </td>
</tr>
@endforeach


</tbody>
</table>




</div>
<!-- end widget content -->


</div>
<!-- end widget div -->

</div>
<!-- end widget -->

</article>
<!-- WIDGET END -->

</div>

<!-- end row -->

<!-- end row -->

</section>

@stop

@section('plugins')
<script src="/admin/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="/admin/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="/admin/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script>
    $( document ).ready(function() {
        $('#dt_basic').dataTable();
    });
</script>
@stop
