@extends('dashboard.layouts.master')

@section('ribbon')
@include('dashboard.layouts.partials.ribbon', ['breadcrumbs' => ['Promos', 'Create']])
@stop

@section('title')
@include('dashboard.layouts.partials.page-title',['title' => 'Promos', 'subtitle' => '> Create', 'icon' => 'bullhorn'])
@stop

@section('content')
<section id="widget-grid" class="">

    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-123" data-widget-editbutton="false"  data-widget-deletebutton="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2>Promos</h2>
                </header>
                <div>
                    <div class="jarviswidget-editbox"> </div>
                    <div class="widget-body no-padding">
                        {{ Form::model($promo, ['route' => ['dashboard.promos.update', $promo->id] , 'method'=> 'PUT','id' => 'promo-form', 'class' => 'smart-form',  'novalidate' => 'novalidate', 'files' => true ] ) }}
                           @include('dashboard.promos.form')
                            <footer>
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </footer>
                       {{ Form::close() }}
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>

@stop

@section('plugins')
<script src="/backend/js/plugin/jquery-form/jquery-form.min.js"></script>

<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
    $( document ).ready(function() {

        var $promoForm = $("#promo-form").validate({

            // Rules for form validation
            rules : {
                title : { required : true}
            },

            // Messages for form validation
            messages : {

                title : { required : 'Please enter the title for your promo'}

            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    });
</script>
@stop
