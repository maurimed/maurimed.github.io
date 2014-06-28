@extends('site.layouts.master')

@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 main-el">
                @include('sessions.messages')
                @include('sessions.login-form')

            </div>


        </div>
    </div>
</div>
@stop