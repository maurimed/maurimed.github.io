@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Messages', 'List']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'Messages', 'subtitle' => '> List', 'icon' => 'user'])
@stop

@section('content')
<section id="widget-grid" class="">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-58" data-widget-editbutton="false"  data-widget-deletebutton="false" >
                <header>
                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                    <h2>Messages</h2>
                </header>
                <div>
                    <div class="jarviswidget-editbox"> <!-- This area used as dropdown edit box --> </div>
                    <div class="widget-body no-padding">
                        <table id="messages-table" class="table table-responsive responsive table-striped table-bordered table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th><i class="fa fa-fw fa-user txt-color-blue hidden-md hidden-sm hidden-xs"></i> Name</th>
                                    <th><i class="fa fa-fw fa-envelope txt-color-blue hidden-md hidden-sm hidden-xs"></i> Email</th>
                                    <th><i class="fa fa-fw fa-phone txt-color-blue hidden-md hidden-sm hidden-xs"></i> Skype</th>
                                    <th><i class="fa fa-fw fa-phone txt-color-blue hidden-md hidden-sm hidden-xs"></i> Home Phone</th>
                                    <th><i class="fa fa-fw fa-phone txt-color-blue hidden-md hidden-sm hidden-xs"></i> Cell Phone</th>
                                    <th><i class="fa fa-fw fa-pencil txt-color-blue hidden-md hidden-sm hidden-xs"></i> Message</th>

                                    <th><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Created</th>
                                    <th><i class="fa fa-fw fa-pencil txt-color-blue hidden-md hidden-sm hidden-xs"></i> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $message)
                                <tr>
                                    <td>{{$message->id}}</td>
                                    <td>{{$message->firstname}} {{$message->lastname}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->skype}}</td>
                                    <td>{{$message->home_phone}}</td>
                                    <td>{{$message->cell_phone}}</td>
                                    <td>{{$message->message}}</td>

                                    <td>{{$message->created_at->diffForHumans()}}</td>
                                    <td>
                                        {{ Form::delete('messages', $message->id) }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
@include('dashboard.partials.modal')
@stop

@section('plugins')
<script src="/backend/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script>
    $( document ).ready(function() {
        $('#messages-table').dataTable({

            // Tabletools options:
            //   https://datatables.net/extensions/tabletools/button_options
            "sDom": "<'dt-toolbar'<'col-xs-6'f><'col-xs-6'T>r>"+
                    "t"+
                    "<'dt-toolbar-footer'<'col-xs-6'i><'col-xs-6'p>>",
            "oTableTools": {
                 "aButtons": [
                 "copy",
                 "csv",
                 "xls",
                    {
                        "sExtends": "pdf",
                        "sTitle": "Messages",
                        "sPdfMessage": "PDF Export",
                        "sPdfSize": "letter"
                    },
                    {
                        "sExtends": "print",
                        "sMessage": "File Generated <i>(press Esc to close)</i>"
                    }
                 ],
                "sSwfPath": "/backend/js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
            }
        });
    });
</script>
@stop
