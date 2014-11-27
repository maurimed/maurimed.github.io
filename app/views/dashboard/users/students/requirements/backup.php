<div class="table-responsive">

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th> <i class="fa fa-file-o"></i>  Requirement</th>
            <th> <i class="fa fa-files-o"></i> Template</th>
            <th> <i class="fa fa-upload"></i>  Uploads</th>
            <th> <i class="fa fa-check"></i>   Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($student->requirements as $index => $requirement)
        <tr  >
            <!-- class = danger, success, warning, info -->
            <td>{{ $index + 1 }}</td>
            <td>{{ $requirement->requirement_university->requirement->name }}</td>
            <td>{{ $requirement->requirement_university->requirement->file }}</td>
            <td>
                @if($requirement->file == '')
                {{ Form::open(['route' => ['dashboard.students.requirements.store', $student->id], 'id' => $requirement->requirement_university->requirement->file, 'files' => true]) }}
                {{ Form::file($requirement->requirement_university->requirement->file) }}
                {{ Form::submit('Submit', ['class' => 'submitBtn']) }}
                {{ Form::close() }}

                @endif
            </td>
            <td>{{ $requirement->status }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

</div>


<!--status message will appear here-->
<div class="status"></div>

<!--image upload form-->
<form class="pure-form" action="/test" enctype="multipart/form-data" method="post">

    <div class="upload">
        <a onclick="select_file()" class="pure-button">Choose a Image</a>
        <input id="image" type="file" name="image" >
    </div>

    <!--image preview-->
    <img src="" style="display:none">

    <input class="pure-button pure-button-primary" type="submit" value="Upload!">
</form>

<!--progress bar-->
<div class="progress">
    <div class="bar"></div >
    <div class="percent">0%</div >
</div>















@extends('admin.layouts.master')

@section('ribbon')
@include('admin.layouts.partials.ribbon', ['breadcrumbs' => ['Requirements', 'List', $student->university->name]])
@stop

@section('title')
@include('admin.layouts.partials.page-title',['title' => 'Requirements', 'subtitle' => '> List', 'icon' => 'file-text'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <article class="col-sm-12 col-md-12 col-lg-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-greenLight" id="wid-id-33" data-widget-editbutton="false"  data-widget-deletebutton="false">
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
                    <h2>Requirements </h2>
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
                        <!-- tabla-->
                        <div class="table-responsive">

                            {{ Form::open(['route' => ['dashboard.students.requirements.store', $student->id], 'files' => true]) }}
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th> <i class="fa fa-file-o"></i>  Requirement</th>
                                    <th> <i class="fa fa-files-o"></i> Template</th>
                                    <th> <i class="fa fa-upload"></i>  Uploads</th>
                                    <th> <i class="fa fa-check"></i>   Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($student->university->requirements as $index => $requirement)
                                <tr  >
                                    <!-- class = danger, success, warning, info -->
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $requirement->name }}</td>
                                    <td>{{ $requirement->template }}</td>
                                    <td>
                                        @if ( isset( $student->requirements[$index]->name ) )
                                        @if( $student->requirements[$index]->name == $requirement->slug)
                                        Send
                                        @endif
                                        @else

                                        {{ Form::file($requirement->slug) }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ( isset( $student->requirements[$index]->name ) )
                                        @if( $student->requirements[$index]->name == $requirement->slug)
                                        {{ $student->requirements[$index]->status }}
                                        @endif
                                        @else
                                        0
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                {{ Form::submit('Submit', ['class' => 'btn btn-success pull-right']) }}
                                </tbody>
                            </table>
                            {{ Form::close() }}

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

@section('styles')

@stop

@section('plugins')
<script type="text/javascript">
    // select file function only for styling up input[type="file"]
    //    function select_file(){
    //        document.getElementById('image').click();
    //        return false;
    //    }
</script>

<script src="/backend/js/plugin/dropzone/dropzone.min.js" ></script>
<script>
    $( document ).ready(function() {


    });
</script>
@stop
