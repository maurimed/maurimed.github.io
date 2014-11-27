@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Locations','States', 'List']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'States', 'subtitle' => '> List', 'icon' => 'map-marker'])
@stop

@section('content')
<section id="widget-grid" class="">

<!-- row -->
<div class="row">

<!-- NEW WIDGET START -->
<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<!-- Widget ID (each widget will need unique ID)-->
<div class="jarviswidget jarviswidget-color-darken" id="wid-id-10" data-widget-editbutton="false"  data-widget-deletebutton="false">
<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false"  data-widget-deletebutton="false">
				
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
    <h2>States</h2>
    {{ link_to_route('dashboard.states.create','New State',[]  ,['class' => 'btn btn-primary pull-right']) }}
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
    <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> Continent</th>
    <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> Country</th>
    <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> State</th>
    <th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Abbreviation</th>
    <th><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Actions</th>
</tr>
</thead>
<tbody>
@foreach($states as $state)
<tr>
    <td>{{$state->id}}</td>
    <td>{{$state->country->continent->name}}</td>
    <td>{{$state->country->name}}</td>
    <td>{{$state->name}}</td>
    <td>{{$state->abbreviation}}</td>
    <td><div class="btn btn-xs btn-danger"><span class="fa fa-times"></span> Delete</div></td>
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
    $( document ).ready(function() {
        $('#dt_basic').dataTable({
                        "sDom": "<'dt-toolbar'<'col-xs-6'f><'col-xs-6'T>r>"+ "t" + "<'dt-toolbar-footer'<'col-xs-6'i><'col-xs-6'p>>" ,
                        "oTableTools": {
                            "aButtons": [ "copy", "csv", "xls",
                                { "sExtends": "pdf", "sTitle": "Subscribers", "sPdfMessage": "PDF Export", "sPdfSize": "letter" },
                                { "sExtends": "print",
                                "sMessage" : "File Generated <i>press Esc to close</i>"
                            }
                          ],
                          "sSwfPath": "/backend/js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
                    }});
    });
</script>
@stop
