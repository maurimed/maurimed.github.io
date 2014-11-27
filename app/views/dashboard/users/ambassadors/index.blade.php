@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Users','Ambassadors', 'List']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'Ambassadors', 'subtitle' => '> List', 'icon' => 'user'])
@stop

@section('content')
<section id="widget-grid" class="">

<!-- row -->
<div class="row">

<!-- NEW WIDGET START -->
<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<!-- Widget ID (each widget will need unique ID)-->
<div class="jarviswidget jarviswidget-color-darken" id="wid-id-12" data-widget-editbutton="false"  data-widget-deletebutton="false">
<header>
    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
    <h2>Ambassadors</h2>
    {{ link_to_route('dashboard.ambassadors.create','New Ambassador',[]  ,['class' => 'btn btn-primary pull-right', 'id' => 'ambassador-create' ]) }}

</header>

<div>

<div class="jarviswidget-editbox">

</div>

<div class="widget-body no-padding">
    @include('dashboard.partials.messages')

    @include('dashboard.users.ambassadors.table')


</div>

</div>

</div>

</article>
<!-- WIDGET END -->

</div>


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
