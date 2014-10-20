@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Subscribers', 'List']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'Subscribers', 'subtitle' => '> List', 'icon' => 'user'])
@stop

@section('content')
<section id="widget-grid" class="">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-58" data-widget-editbutton="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                    <h2>Subscribers</h2>
                </header>
                <div>
                    <div class="jarviswidget-editbox"> <!-- This area used as dropdown edit box --> </div>
                    <div class="widget-body no-padding">
                        <table id="dt_basic" class="table table-responsive responsive table-striped table-bordered table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th><i class="fa fa-fw fa-user txt-color-blue hidden-md hidden-sm hidden-xs"></i> Name</th>
                                    <th><i class="fa fa-fw fa-envelope txt-color-blue hidden-md hidden-sm hidden-xs"></i> Emails</th>
                                    <th><i class="fa fa-fw fa-phone txt-color-blue hidden-md hidden-sm hidden-xs"></i> Phone</th>
                                    <th><i class="fa fa-fw fa-pencil txt-color-blue hidden-md hidden-sm hidden-xs"></i> Interest</th>
                                    <th><i class="fa fa-fw fa-pencil txt-color-blue hidden-md hidden-sm hidden-xs"></i> Age</th>

                                    <th><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> State</th>
                                    <th><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Country</th>
                                    <th><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Created At</th>
                                    <th><i class="fa fa-fw fa-pencil txt-color-blue hidden-md hidden-sm hidden-xs"></i> About Us </th>
                                    <th><i class="fa fa-fw fa-pencil txt-color-blue hidden-md hidden-sm hidden-xs"></i> Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($subscribers as $subscriber)
                                <tr>
                                    <td>{{$subscriber->id}}</td>
                                    <td>{{$subscriber->name}}</td>
                                    <td>{{$subscriber->email}}</td>
                                    <td>{{$subscriber->phone}}</td>
                                    <td>{{$subscriber->interest}}</td>
                                    @if($subscriber->age)
                                        <td>{{$subscriber->age}}</td>

                                        <td>{{$subscriber->state->state_name}} </td>
                                        <td>{{$subscriber->state->country->country_name}} </td>
                                        <td>{{$subscriber->created_at->diffForHumans()}}</td>
                                        <td>{{$subscriber->find_us}}</td>
                                    @else
                                        <td><small>promo</small></td>
                                        <td><small>promo</small></td>
                                        <td><small>promo</small></td>
                                        <td><small>promo</small></td>
                                        <td><small>promo</small></td>
                                    @endif
                                    <td>
                                        {{ Form::delete('subscribers', $subscriber->id) }}
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

@stop

@section('plugins')
<script src="/backend/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="/backend/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script>
    $( document ).ready(function() {
        $('#dt_basic').dataTable({"order": [[ 'id', "desc" ]]});
    });
</script>
@stop
