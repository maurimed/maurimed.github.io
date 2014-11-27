@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Requirements', 'List']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'Requirements', 'subtitle' => '> List', 'icon' => 'file-text'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <article class="col-sm-12 col-md-12 col-lg-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-greenLight" id="wid-id-3" data-widget-editbutton="false"  data-widget-deletebutton="false">
                <!-- widget options:
                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false"  data-widget-deletebutton="false">

                data-widget-colorbutton="false"
                data-widget-editbutton="false"  data-widget-deletebutton="false"
                data-widget-togglebutton="false"
                data-widget-deletebutton="false"
                data-widget-fullscreenbutton="false"
                data-widget-custombutton="false"
                data-widget-collapsed="true"
                data-widget-sortable="false"

                -->
                <header>
                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                    <h2>Table TR with colors </h2>

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

                        <div class="alert alert-info no-margin fade in">
                            <button class="close" data-dismiss="alert">
                                ×
                            </button>
                            <i class="fa-fw fa fa-info"></i>
                            Some message
                        </div>
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th> <i class="fa fa-file-o"></i> Requirement</th>
                                    <th> <i class="fa fa-files-o"></i> Template</th>
                                    <th> <i class="fa fa-upload"></i> Uploads</th>
                                    <th> <i class="fa fa-check"></i> Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($requirements as $requirement)
                                <tr  >
                                    <!-- class = danger, success, warning, info -->
                                    <td>{{ $requirement->id }}</td>
                                    <td>{{ $requirement->name }}</td>
                                    <td>{{ $requirement->file }}</td>
                                    <td>{{ Form::file('file') }}</td>
                                    <td>Approved</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
            <!-- end widget -->

        </article>

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
        $('#dt_basic').dataTable();
    });
</script>
@stop
