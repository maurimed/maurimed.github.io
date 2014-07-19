@extends('admin.layouts.master')

@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => ['Posts', 'List']])
@stop

@section('title')
@include('admin.layouts.partials.page-title',['title' => 'Posts', 'subtitle' => '> List', 'icon' => 'pencil'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @include('admin.partials.messages')

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-233" data-widget-editbutton="false">
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
                    <h2>Posts</h2>
                    {{ link_to_route('dashboard.posts.create','New Post',[]  ,['class' => 'btn btn-primary pull-right']) }}
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
                                <th><i class="fa fa-fw fa-eye txt-muted hidden-md hidden-sm hidden-xs"></i> Published</th>
                                <th><i class="fa fa-fw fa-user txt-muted hidden-md hidden-sm hidden-xs"></i> Author</th>
                                <th><i class="fa fa-fw fa-flag txt-muted hidden-md hidden-sm hidden-xs"></i> Lang</th>
                                <th><i class="fa fa-fw fa-calendar txt-muted hidden-md hidden-sm hidden-xs"></i> Created At</th>
                                <th><i class="fa fa-fw fa-calendar txt-muted hidden-md hidden-sm hidden-xs"></i> Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>
                                    @if($post->image != '')
                                        <img class="img-responsive" src="/site/img/posts/thumb-{{$post->image}}">
                                    @else
                                    <div class="note">No image</div>
                                    @endif
                                </td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->published}}</td>
                                <td>{{$post->owner->username}}</td>
                                <td>{{$post->lang}}</td>
                                <td>{{$post->created_at}}</td>
                                <td>
                                    {{ Form::delete('posts', $post->id) }}
                                    {{ Form::editModal('posts', $post->id) }}
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
@include('admin.partials.modal')

@stop

@section('plugins')
<script src="/admin/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="/admin/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="/admin/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>

<script>
    $( document ).ready(function() {
        $('#dt_basic').dataTable();
    });
</script>
@stop
