@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Users','University Managers', 'List']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'University Managers', 'subtitle' => '> List', 'icon' => 'user'])
@stop

@section('content')
<section id="widget-grid" class="">

<!-- row -->
<div class="row">

<!-- NEW WIDGET START -->
<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<!-- Widget ID (each widget will need unique ID)-->
<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">

<header>
    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
    <h2>University Managers</h2>
    {{ link_to_route('dashboard.managers.create', 'New Manager',[], ['class' => 'btn btn-primary pull-right', 'id' => 'manager-create']) }}

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

<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
<thead>
<tr>
    <th>ID</th>
    <th><i class="fa fa-fw fa-user          txt-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
    <th><i class="fa fa-fw fa-envelope      txt-muted hidden-md hidden-sm hidden-xs"></i> Email</th>
    <th><i class="fa fa-fw fa-institution   txt-muted hidden-md hidden-sm hidden-xs"></i> University</th>
    <th><i class="fa fa-fw fa-institution   txt-muted hidden-md hidden-sm hidden-xs"></i> Position</th>
    <th><i class="fa fa-fw fa-calendar      txt-muted hidden-md hidden-sm hidden-xs"></i> Created At</th>
</tr>
</thead>
<tbody>
@foreach($managers as $manager)
<tr>
    <td>{{$manager->id}}</td>
    <td>{{$manager->present()->fullName}}</td>
    <td>{{$manager->profile->email}}</td>
    <td>{{$manager->present()->institution}}</td>
    <td>{{$manager->position}}</td>
    <td>{{$manager->created_at}}</td>
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
<script src="/backend/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script>
    $('#dt_basic').dataTable();
</script>
@stop
