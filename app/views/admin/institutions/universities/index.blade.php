@extends('admin.layouts.master')

@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => ['Institutions','Universities', 'List']])
@stop

@section('title')
@include('admin.layouts.partials.page-title',['title' => 'Universities', 'subtitle' => '> List', 'icon' => 'map-marker'])
@stop

@section('content')
<section id="widget-grid" class="">

<!-- row -->
<div class="row">

<!-- NEW WIDGET START -->
<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    @include('admin.partials.messages')
<!-- Widget ID (each widget will need unique ID)-->
<div class="jarviswidget jarviswidget-color-darken" id="wid-id-70" data-widget-editbutton="false">
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
    <h2>Universities</h2>
    {{ link_to_route('dashboard.universities.create','New University',[]  ,['class' => 'btn btn-primary pull-right']) }}
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

<table id="dt_basic" class="table table-responsive responsive table-striped table-bordered table-hover" width="100%">
<thead>
<tr>
    <th>ID</th>
    <th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
    <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> Address</th>
    <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> Location</th>
    <th><i class="fa fa-fw fa-email text-muted hidden-md hidden-sm hidden-xs"></i> Email</th>
    <th><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone </th>
    <th><i class="fa fa-fw fa-link text-muted hidden-md hidden-sm hidden-xs"></i> Website </th>
    <th><i class="fa fa-fw fa-link text-muted hidden-md hidden-sm hidden-xs"></i> Tuition </th>
    <th><i class="fa fa-fw fa-link text-muted hidden-md hidden-sm hidden-xs"></i> Admission </th>
    <th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Sports Division</th>
    <th><i class="fa fa-fw fa-plane text-muted hidden-md hidden-sm hidden-xs"></i> Closest Airport</th>
    <th><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Actions</th>
</tr>
</thead>
<tbody>
@foreach($universities as $university)
<tr>
    <td>{{$university->id}}</td>
    <td>{{$university->name}}</td>
    <td>{{$university->address}}</td>
    <td>{{$university->present()->location }}</td>
    <td>{{$university->email}}</td>
    <td>{{$university->phone}}</td>
    <td>{{$university->present()->websiteLink}}</td>
    <td>{{$university->present()->tuitionLink}}</td>
    <td>{{$university->present()->admissionsLink}}</td>
    <td>{{$university->present()->sports_division}}</td>
    <td>{{$university->present()->closest_airport}}</td>
    <td>
<!--        {{ Form::delete('universities', $university->id) }}-->
<!--        {{ Form::editModal('universities', $university->id) }}-->
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
@include('admin.partials.modal')
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
