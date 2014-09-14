@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Locations','Countries', 'List']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'Countries', 'subtitle' => '> List', 'icon' => 'map-marker'])
@stop

@section('content')
<section id="widget-grid" class="">

<!-- row -->
<div class="row">

<!-- NEW WIDGET START -->
<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    @include('dashboard.partials.messages')
<!-- Widget ID (each widget will need unique ID)-->
<div class="jarviswidget jarviswidget-color-darken" id="wid-id-10" data-widget-editbutton="false">
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
    <h2>Countries</h2>
    {{ link_to_route('dashboard.countries.create','New Country',[]  ,['class' => 'btn btn-primary pull-right']) }}
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
    <th><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone Code</th>
    <th><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Actions</th>
</tr>
</thead>
<tbody>
@foreach($countries as $country)
<tr>
    <td>{{$country->id}}</td>
    <td>{{$country->continent->name}}</td>
    <td>{{$country->name}}</td>
    <td>{{$country->phonecode}}</td>
    <td>
        {{ Form::delete('countries', $country->id) }}
        {{ Form::editModal('countries', $country->id) }}


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
@include('dashboard.partials.modal')
@stop

@section('plugins')
<script src="/backend/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="/backend/jsjs/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="/backend/jsn/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="/backend/jsmin/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script>
    $( document ).ready(function() {
        $('#dt_basic').dataTable();
    });
</script>
@stop
