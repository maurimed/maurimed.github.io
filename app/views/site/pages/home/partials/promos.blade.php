@if($promo)
<div class="content">
    <div style="padding-top:0" class="container">
        <div class="row" >
            <div class="col-md-12 text-center preview-banner main-el">
                <div class="text">
                    <h2 class="main-text-color"> {{ $promo->title }}</h2>
                    <div class="divider divider-3"></div>
                </div>
            </div>

            <div class="col-md-5 col-xs-12 wow flipInY">
                <div class="promo-image">
                    <img src="/site/img/promos/{{$promo->image}}" alt="{{ $promo->title }}">
                </div>
            </div>

            <div class="col-md-3 col-xs-6 wow flipInY">
                <div class="promo-form">
                    {{ Form::open(['route'=> 'promos.subscribe', 'id'=>'promo-form']) }}
                        {{Form::hidden('interest', $promo->title)}}
                        <div> {{ Form::text('promo_name',   null, ['class'=>'form-control', 'id' => 'promo_name', 'data-error' => trans('home.promo.form.errors.name'), 'placeholder' => trans('home.promo.form.inputs.name')]) }} </div>
                        <div> {{ Form::email('promo_email', null, ['class'=>'form-control', 'id' => 'promo_email', 'data-error' => trans('home.promo.form.errors.email.required'),  'data-invalid' => trans('home.promo.form.errors.email.invalid'), 'placeholder' => trans('home.promo.form.inputs.email')]) }} </div>
                        <div> {{ Form::text('promo_phone',  null, ['class'=>'form-control', 'id' => 'promo_phone', 'data-error' => trans('home.promo.form.errors.phone.required'), 'data-number' => trans('home.promo.form.errors.phone.number'), 'placeholder' => trans('home.promo.form.inputs.phone')]) }} </div>
                        {{ Form::submit(trans('home.promo.form.inputs.participate'), ['class'=>'btn btn-custom-blue']) }}
                    {{ Form::close() }}
                </div>
            </div>

            <div class="col-md-4 col-xs-6 wow flipInY">
                <div class="promo-video-wrapper">
                    <iframe class="center-block" width="800" height="600" src="{{$promo->present()->video}}"> </iframe>
                </div>
            </div>

        </div>
    </div>
</div>
@endif