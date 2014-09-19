@extends('site.layouts.master')

@section('content')

@section('styles')
    <link rel="stylesheet" href="/site/plugins/bootstrap-switch/bootstrap-switch.min.css"/>
    <link rel="stylesheet" href="/site/plugins/bootstrap-select/css/bootstrap-select.min.css"/>
    <link rel="stylesheet" href="/site/plugins/bootstrap-jasny/css/jasny-bootstrap.min.css"/>
@stop




@include('site.layouts.partials.components.breadcums', ['title' => Lang::get('applications.underground.title')])

<div ng-app="undergroundApplication" style="padding-top:0" class="container only">
    <div class="row" ng-controller="PanelController as panel">
        <div class="col-md-3 main-el" >
            <div class="side-menu" id="side-menu-1">
                <a href="#" ng-click="panel.selectTab(1)" class="element" ng-class="{active: panel.isSelected(1)}"> {{ trans('applications.underground.steps.1.title')  }} </a>
                <a href="#" ng-click="panel.selectTab(2)" class="element" ng-class="{active: panel.isSelected(2)}"> {{ trans('applications.underground.steps.2.title')  }} </a>
                <a href="#" ng-click="panel.selectTab(3)" class="element" ng-class="{active: panel.isSelected(3)}"> {{ trans('applications.underground.steps.3.title')  }} </a>
                <a href="#" ng-click="panel.selectTab(4)" class="element" ng-class="{active: panel.isSelected(4)}"> {{ trans('applications.underground.steps.4.title')  }} </a>
                <a href="#" ng-click="panel.selectTab(5)" class="element" ng-class="{active: panel.isSelected(5)}"> {{ trans('applications.underground.steps.5.title')  }} </a>
                <a href="#" ng-click="panel.selectTab(6)" class="element" ng-class="{active: panel.isSelected(6)}"> {{ trans('applications.underground.steps.6.title')  }} </a>
                <a href="#" ng-click="panel.selectTab(7)" class="element" ng-class="{active: panel.isSelected(7)}"> {{ trans('applications.underground.steps.7.title')  }} </a>
                <a href="#" ng-click="panel.selectTab(8)" class="element" ng-class="{active: panel.isSelected(8)}"> {{ trans('applications.underground.steps.8.title')  }} </a>
                <a href="#" ng-click="panel.selectTab(9)" class="element" ng-class="{active: panel.isSelected(9)}"> {{ trans('applications.underground.steps.9.title')  }} </a>
                <a href="#" ng-click="panel.selectTab(10)" class="element" ng-class="{active: panel.isSelected(10)}"> {{ trans('applications.underground.steps.10.title')  }} </a>
            </div>
        </div>
        <div style="text-align:justify" class="col-md-9 main-el">
            <div ng-show="panel.isSelected(1)" class="application-form">
                Contenido tab 1
            </div>
            <div ng-show="panel.isSelected(2)" class="application-form">
                @include('site.applications.underground.steps.2')
            </div>
            <div ng-show="panel.isSelected(3)">
                Contenido tab 3
            </div>
        </div>
    </div>
</div>

@stop

@section('scripts')
<script src="/backend/js/libs/angular.min.js"></script>
<script src="/site/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script src="/site/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="/site/plugins/bootstrap-jasny/js/jasny-bootstrap.min.js"></script>
<script>
    (function(){
        var app = angular.module('undergroundApplication',[]);

        app.controller("PanelController", function(){
            this.tab = 2;
            this.selectTab = function(setTab){
                this.tab = setTab;
            };
            this.isSelected = function(checkTab){
                return this.tab === checkTab;
            };
        });
    })();
</script>
@stop
