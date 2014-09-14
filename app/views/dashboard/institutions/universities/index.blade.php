@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Institutions','Universities', 'List']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'Universities', 'subtitle' => '> List', 'icon' => 'map-marker'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-30" data-widget-editbutton="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                    <h2>Universities</h2>
                    {{ link_to_route('dashboard.universities.create', 'New University',[] ,['class' => 'btn btn-primary pull-right']) }}
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

                        <table id="universities-table" class="table table-responsive responsive table-striped table-bordered table-hover" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
                                <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> City</th>
                                <th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> State</th>
                                <th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Country</th>
                                {{--<th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Zip</th>--}}
                                <th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Address</th>
                                <th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Type </th>
                                <th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Info</th>
                                <th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Closest Airport</th>
                                <th><i class="fa fa-fw fa-link text-muted hidden-md hidden-sm hidden-xs"></i> Web Url</th>
                                {{--<th><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>--}}
                                {{--<th><i class="fa fa-fw fa-email text-muted hidden-md hidden-sm hidden-xs"></i> Email</th>--}}
                                {{--<th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Tuition Link</th>--}}
                                {{--<th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Admissions Link</th>--}}
                                {{--<th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Sports Division</th>--}}
                                {{--<th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Far From Airport</th>--}}
                                <th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Housing </th>
                                {{--<th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Postal</th>--}}
                                <th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Years </th>
                                {{--<th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Settings </th>--}}
                                {{--<th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Tuition </th>--}}
                                {{--<th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Created At </th>--}}
                                {{--<th><i class="fa fa-fw fa-map-marker text-muted hidden-md hidden-sm hidden-xs"></i> Cityame </th>--}}

                                <th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Actions </th>
                            </tr>
                            </thead>
                            <tbody class="table-responsive"></tbody>
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

    @include('dashboard.partials.modal')
</section>

@stop

@section('plugins')
<script src="/backend/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script>
    $( document ).ready(function() {
        $('#universities-table').dataTable({
            "scrollX": true,
//            "processing": true,
            "serverSide": true,
            "ajax": "/api/universities"
        } );
        $.fn.dataTable.ext.errMode = 'throw';

        $('body').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });
    } );
</script>
@stop
