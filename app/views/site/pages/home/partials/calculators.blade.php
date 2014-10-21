<div class="container">
    <div class="row">
        <div class="col-md-12" ng-app="calculator" style="z-index: 1">

            <div class="row">
                <div class="col-md-4 col-sm-6 wow slideInLeft">
                    <div class="scholarship-box" ng-controller="CalculatorController">
                        <div class="header">{{trans('home.scholarship_boxes.1.title')}}</div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-5 col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon ">{{trans('home.scholarship_boxes.1.gpa')}}</span>
                                        <input ng-model="gpa" name="gpa" type="number" class="form-control btn-sm" placeholder="#" step="any" min="0" max="100.00">
                                    </div>
                                    <div ng-show="calcGpa" class="text-center text-muted small">AMERICAN GPA @{{ calcGpa | number : 2 }} </div>
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <span class="amount">
                                        <span class="small text-center">{{ trans('home.scholarship_boxes.1.out_of') }}</span>
                                          <label> <input name="outOf" type="radio" ng-model="outOf" value="100" >100 </label>
                                          <label> <input name="outOf" type="radio" ng-model="outOf" value="20" >20 </label>
                                          <label> <input name="outOf" type="radio" ng-model="outOf" value="10" >10 </label>
                                    </span>
                                </div>

                            </div>
                            <div class="messages text-center" ng-show="message">
                                {{ trans('home.scholarship_boxes.1.message') }}
                            </div>
                            <div class="row" ng-show="scholarship">
                                <div class="col-md-12 col-sm-12">
                                    <div class="text-center messages">
                                        <strong>~@{{ scholarship.amount | currency }}</strong>
                                        {{trans('home.scholarship_boxes.1.up_to')}}
                                        <strong>@{{ scholarship.percent | percentage }} </strong>
                                        {{trans('home.scholarship_boxes.1.scholarship')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer text-center">
                            {{trans('home.scholarship_boxes.1.contact')}} &nbsp;
                            <button class="btn btn-md btn-custom-blue"> {{trans('home.scholarship_boxes.1.btn')}} </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow slideInUp ">
                    <div class="scholarship-box">
                        <div class="header">{{trans('home.scholarship_boxes.2.title')}}</div>
                        <div class="body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <select class="form-control select-picker" ng-model="sports" name="sports" id="sports">
                                    <option value="" selected disabled > {{trans('home.scholarship_boxes.2.select')}} </option>
                                    <option value="Baseball">Baseball </option>
                                    <option value="Basketball">Basketball </option>
                                    <option value="Cross Country">Cross Country </option>
                                    <option value="Football">Football </option>
                                    <option value="Golf">Golf </option>
                                    <option value="Larcrosse">Larcrosse </option>
                                    <option value="Soccer">Soccer </option>
                                    <option value="Swimming and Diving">Swimming and Diving </option>
                                    <option value="Tennis">Tennis </option>
                                    <option value="Track and Field">Track and Field </option>
                                    <option value="Volleyball">Volleyball </option>
                                    <option value="Wrestling">Wrestling </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div ng-show="sports" class="text-center messages">
                                    <strong>~$100,000.00</strong>
                                    {{trans('home.scholarship_boxes.2.up_to')}}
                                    <strong> 100% </strong>
                                    {{trans('home.scholarship_boxes.2.scholarship')}}
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="footer text-center">
                            {{trans('home.scholarship_boxes.2.contact')}} &nbsp;
                            <button class="btn btn-md btn-custom-blue"> {{trans('home.scholarship_boxes.2.btn')}} </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 wow slideInRight text-center">
                    <br/>
                    <h3 class="text-blue">{{ trans('home.apply_now_text') }}</h3>
                    <a target="_blank" href="http://www.epro360.dreamapply.com/" class="btn btn-lg btn-custom"> {{trans('home.apply_now')}}</a>
                </div>
            </div>

        </div>
    </div>
</div>


