@extends('admin.layouts.master')

@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => ['Locations','Cities', 'List']])
@stop

@section('title')
@include('admin.layouts.partials.page-title',['title' => 'Cities', 'subtitle' => '> List', 'icon' => 'map-marker'])
@stop

@section('content')
<section id="widget-grid" class="">

<!-- row -->
<div class="row">

<!-- NEW WIDGET START -->
<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<!-- Widget ID (each widget will need unique ID)-->
<div class="jarviswidget jarviswidget-color-darken" id="wid-id-30" data-widget-editbutton="false">
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
    <h2>Cities</h2>
    {{ link_to_route('dashboard.cities.create','New City',[]  ,['class' => 'btn btn-primary pull-right']) }}
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

<table id="cities-table" class="table table-responsive responsive table-striped table-bordered table-hover" width="100%">
<thead>
<tr>
    <th>ID</th>
<!--    <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> Continent</th>-->
<!--    <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> Country</th>-->
    <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> State</th>
    <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
    <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> Zip</th>
<!--    <th><i class="fa fa-fw fa-pencil txt-color-blue hidden-md hidden-sm hidden-xs"></i> Actions</th>-->
</tr>
</thead>
<tbody>


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
        $('#cities-table').dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "/api/cities/tables"

        } );
    } );
</script>
@stop
