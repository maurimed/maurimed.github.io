@extends('admin.layouts.master')

@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => ['Subscribers', 'List']])
@stop

@section('title')
@include('admin.layouts.partials.page-title',['title' => 'Subscribers', 'subtitle' => '> List', 'icon' => 'user'])
@stop

@section('content')
<section id="widget-grid" class="">

<!-- row -->
<div class="row">

<!-- NEW WIDGET START -->
<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<!-- Widget ID (each widget will need unique ID)-->
<div class="jarviswidget jarviswidget-color-darken" id="wid-id-58" data-widget-editbutton="false">
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
    <h2>Subscribers</h2>
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
    <th><i class="fa fa-fw fa-envelope txt-color-blue hidden-md hidden-sm hidden-xs"></i> Emails</th>
    <th><i class="fa fa-fw fa-phone txt-color-blue hidden-md hidden-sm hidden-xs"></i> Phone</th>
    <th><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> IP</th>
    <th><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> City</th>
    <th><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Region</th>
    <th><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Country</th>
    <th><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Created At</th>
    <th><i class="fa fa-fw fa-pencil txt-color-blue hidden-md hidden-sm hidden-xs"></i> Actions</th>
</tr>
</thead>
<tbody>
@foreach($subscribers as $subscriber)
<tr>
    <td>{{$subscriber->id}}</td>
    <td>{{$subscriber->email}}</td>
    <td>{{$subscriber->phone}}</td>
    <td>{{$subscriber->ip}}</td>
    <td>{{$subscriber->city}}</td>
    <td>{{$subscriber->region}}</td>
    <td>{{$subscriber->country}}</td>
    <td>{{$subscriber->created_at}}</td>
    <td></td>

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
