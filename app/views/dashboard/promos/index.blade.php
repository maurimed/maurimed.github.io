@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Promos', 'List']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'Promos', 'subtitle' => '> List', 'icon' => 'bullhorn'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-333" data-widget-editbutton="false"  data-widget-deletebutton="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                    <h2>Promos</h2>
                    {{ link_to_route('dashboard.promos.create','New Promo',[]  ,['class' => 'btn btn-primary pull-right']) }}
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
                                <th><i class="fa fa-fw fa-picture-o text-muted hidden-md hidden-sm hidden-xs"></i> Image</th>
                                <th><i class="fa fa-fw fa-pencil text-muted hidden-md hidden-sm hidden-xs"></i> Title</th>
                                <th><i class="fa fa-fw fa-flag txt-muted hidden-md hidden-sm hidden-xs"></i> Lang</th>
                                <th><i class="fa fa-fw fa-user txt-muted hidden-md hidden-sm hidden-xs"></i> Author</th>
                                <th><i class="fa fa-fw fa-calendar txt-muted hidden-md hidden-sm hidden-xs"></i> Published</th>
                                <th><i class="fa fa-fw fa-calendar txt-muted hidden-md hidden-sm hidden-xs"></i> Created At</th>
                                <th><i class="fa fa-fw fa-calendar txt-muted hidden-md hidden-sm hidden-xs"></i> Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($promos as $promo)
                            <tr>
                                <td>{{$promo->id}}</td>
                                <td>
                                    @if($promo->image !== 'default')
                                        <img class="img-responsive" src="/site/img/promos/thumb-{{$promo->image}}">
                                    @else
                                    <div class="note">No image</div>
                                    @endif
                                </td>
                                <td>{{$promo->title}}</td>
                                <td>{{$promo->lang}}</td>
                                <td>{{$promo->owner->username}}</td>
                                <td>{{$promo->present()->published}}</td>
                                <td>{{$promo->created_at}}</td>
                                <td>
                                    {{ Form::delete('promos', $promo->id) }}
                                    {{ Form::edit('promos', $promo->id) }}
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
<script src="/backend/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>

<script>
    $( document ).ready(function() {
        $('#dt_basic').dataTable();
    });
</script>
@stop
