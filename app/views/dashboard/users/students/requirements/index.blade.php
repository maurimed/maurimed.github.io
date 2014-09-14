@extends('..........layouts.master')

@section('ribbon')
@include('..........layouts.partials.ribbon', ['breadcrumbs' => ['Requirements', 'List', $student->university->name]])
@stop

@section('title')
@include('..........layouts.partials.page-title',['title' => 'Requirements', 'subtitle' => '> List', 'icon' => 'file-text'])
@stop

@section('content')
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">
        <article class="col-sm-12 col-md-12 col-lg-12">
            @include('...dashboard.partials.messages')
            @include('..........partials.form-errors')

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-greenLight" id="wid-id-33" data-widget-editbutton="false">
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

<!--                        <div class="alert alert-info no-margin fade in">-->
<!--                            <button class="close" data-dismiss="alert">-->
<!--                                ×-->
<!--                            </button>-->
<!--                            <i class="fa-fw fa fa-info"></i>-->
<!--                            Some message-->
<!--                        </div>-->
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
                                    @foreach( $student->requirements as $index => $studentRequirement )
                                        @if($studentRequirement->name == $requirement->slug)
                                            <td>
                                                @if($studentRequirement->file == '')
                                                {{ Form::file($requirement->slug) }}
                                                @else
                                                     {{ $studentRequirement->present()->linkToFile }}
                                                @endif
                                            </td>
                                            <td> {{ $studentRequirement->present()->getStatus }}</td>
                                        @endif

                                    @endforeach
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
