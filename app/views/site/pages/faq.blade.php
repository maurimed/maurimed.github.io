@extends('site.layouts.master')
@section('content')
    @include('site.layouts.partials.components.breadcums', ['title' => Lang::get('faq.title')])

    <div class="container only">
                <div class="row">
                    <div class="col-xs-12 main-el">
                        <!-- <ol class="breadcrumb accordion-filter" id="accordion-4-filters">
                            <li class="active filter" data-filter="all">All</li>
                            <li class="filter" data-filter="identity">Identity</li>
                            <li class="filter" data-filter="photography">Photography</li>
                            <li class="filter" data-filter="marketing">Marketing</li>
                            <li class="filter" data-filter="webdesign">Web Design</li>
                            <li class="filter" data-filter="illustration">Illustration</li>
                        </ol> -->

                        <div class="panel-group accordion filter-panel" id="accordion-4">
                            <div class="panel panel-default">
                                <div class="panel-heading alt-bg-color">
                                    <h6 class="panel-title">
                                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion-4" href="#acc-4-1">
                                            <i class="fa "></i>
                                           	{{ Lang::get('faq.q1') }}
                                        </a>
                                    </h6>
                                </div>
                                <div id="acc-4-1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>{{ Lang::get('faq.a1') }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading alt-bg-color">
                                    <h6 class="panel-title">
                                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion-4" href="#acc-4-2">
                                            <i class="fa "></i>
                                           	{{ Lang::get('faq.q2') }}
                                        </a>
                                    </h6>
                                </div>
                                <div id="acc-4-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>{{ Lang::get('faq.a2') }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading alt-bg-color">
                                    <h6 class="panel-title">
                                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion-4" href="#acc-4-3">
                                            <i class="fa "></i>
                                           	{{ Lang::get('faq.q3') }}
                                        </a>
                                    </h6>
                                </div>
                                <div id="acc-4-3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>{{ Lang::get('faq.a3') }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading alt-bg-color">
                                    <h6 class="panel-title">
                                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion-4" href="#acc-4-4">
                                            <i class="fa "></i>
                                           	{{ Lang::get('faq.q4') }}
                                        </a>
                                    </h6>
                                </div>
                                <div id="acc-4-4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>{{ Lang::get('faq.a4') }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading alt-bg-color">
                                    <h6 class="panel-title">
                                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion-4" href="#acc-4-5">
                                            <i class="fa "></i>
                                           	{{ Lang::get('faq.q5') }}
                                        </a>
                                    </h6>
                                </div>
                                <div id="acc-4-5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>{{ Lang::get('faq.a5') }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading alt-bg-color">
                                    <h6 class="panel-title">
                                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion-4" href="#acc-4-6">
                                            <i class="fa "></i>
                                           	{{ Lang::get('faq.q6') }}
                                        </a>
                                    </h6>
                                </div>
                                <div id="acc-4-6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>{{ Lang::get('faq.a6') }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading alt-bg-color">
                                    <h6 class="panel-title">
                                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion-4" href="#acc-4-7">
                                            <i class="fa "></i>
                                           	{{ Lang::get('faq.q7') }}
                                        </a>
                                    </h6>
                                </div>
                                <div id="acc-4-7" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>{{ Lang::get('faq.a7') }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading alt-bg-color">
                                    <h6 class="panel-title">
                                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion-4" href="#acc-4-8">
                                            <i class="fa "></i>
                                           	{{ Lang::get('faq.q8') }}
                                        </a>
                                    </h6>
                                </div>
                                <div id="acc-4-8" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>{{ Lang::get('faq.a8') }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading alt-bg-color">
                                    <h6 class="panel-title">
                                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion-4" href="#acc-4-9">
                                            <i class="fa "></i>
                                           	{{ Lang::get('faq.q9') }}
                                        </a>
                                    </h6>
                                </div>
                                <div id="acc-4-9" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>{{ Lang::get('faq.a9') }} </p>
                                    </div>
                                </div>
                            </div>

                       
                        </div>
                    </div>
                </div>

            </div>
@stop
