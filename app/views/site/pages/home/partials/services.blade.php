<div style="padding-top:0" class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 wow slideInLeft" ng-app="calculator">
            <div class="scholarship-box" ng-controller="CalculatorController">
                <div class="header">{{trans('home.scholarship_boxes.1.title')}}</div>
                <div class="body">
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <div class="input-group">
                                <span class="input-group-addon ">{{trans('home.scholarship_boxes.1.gpa')}}</span>
                                <input ng-model="gpa" name="gpa" type="number" class="form-control btn-sm" placeholder="100.00" step="any" min="0" max="100.00">
                            </div>
                            <div ng-show="calcGpa" class="text-center text-muted small">AMERICAN GPA @{{ calcGpa }} </div>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <span class="amount">
                                <span class="small text-center">Out of</span>
                                  <label> <input name="outOf" type="radio" ng-model="outOf" value="100" >100 </label>
                                  <label> <input name="outOf" type="radio" ng-model="outOf" value="20" >20 </label>
                                  <label> <input name="outOf" type="radio" ng-model="outOf" value="10" >10 </label>
                            </span>
                        </div>

                    </div>
                    <div class="text text-center" ng-show="message">
                        Please contact Online Ambassador
                    </div>
                    <div class="row" ng-show="scholarship">
                        <div class="col-md-12 col-sm-12">
                            <div class="text-center text">
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
            <div class="scholarship-box">
                <div class="header">{{trans('home.scholarship_boxes.2.title')}}</div>
                <div class="body row">
                    <div class="col-md-5 col-sm-5">
                        <div class="input-group">
                        <select class="form-control select-picker" name="sports" id="sports">
                            <option> {{trans('home.scholarship_boxes.2.select')}} </option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <span class="amount"> {{trans('home.scholarship_boxes.2.amount')}} </span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                    <span class="text">

                        {{trans('home.scholarship_boxes.2.up_to')}}<br/>
                        {{trans('home.scholarship_boxes.2.scholarship')}}
                    </span>
                    </div>
                </div>
                <div class="footer text-center">
                    {{trans('home.scholarship_boxes.2.contact')}} &nbsp;
                    <button class="btn btn-md btn-custom-blue"> {{trans('home.scholarship_boxes.2.btn')}} </button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 wow slideInRight">
            <div  class="col-md-12 text-center">
                <div class="text">
                    <h3 class="main-text-color">Our Services</h3>
                </div>
            </div>
            <div class="services row">
                <div class="col-md-4 col-xs-6">
                    <div class="services-box">
                        <figure>
                            <img class="img-responsive" src="http://lorempixel.com/165/120/people/1" alt="Macaque in the trees">
                            <figcaption>
                                <span>Esl Program Scholarship</span>
                                <a href="#">Read More</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="services-box">
                        <figure>
                            <img class="img-responsive" src="http://lorempixel.com/165/120/people/2" alt="Macaque in the trees">
                            <figcaption>
                                <span>Esl Program</span>
                                <a href="#">Read More</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="services-box">
                        <figure>
                            <img class="img-responsive" src="http://lorempixel.com/165/120/people/3" alt="Macaque in the trees">
                            <figcaption>
                                <span>Esl Program</span>
                                <a href="#">Read More</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="services-box">
                        <figure>
                            <img class="img-responsive" src="http://lorempixel.com/165/120/people/4" alt="Macaque in the trees">
                            <figcaption>
                                <span>Esl Program</span>
                                <a href="#">Read More</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="services-box">
                        <figure>
                            <img class="img-responsive" src="http://lorempixel.com/165/120/people/5" alt="Macaque in the trees">
                            <figcaption>
                                <span>Esl Program</span>
                                <a href="#">Read More</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="services-box">
                        <figure>
                            <img class="img-responsive" src="http://lorempixel.com/165/120/people/6" alt="Macaque in the trees">
                            <figcaption>
                                <span>Esl Program</span>
                                <a href="#">Read More</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-12 main-el">
        <div class="sep-line"></div>
    </div>

</div>