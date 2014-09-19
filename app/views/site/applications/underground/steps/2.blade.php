<div class="sep-heading-container shc4 clearfix ">
    <h4> Form</h4>
    <div class="sep-container">
        <div class="the-sep"></div>
    </div>
</div>
<fieldset>
    <div class="row">
       <div class="col-md-6">
           <span class="text-muted note">{{trans('applications.underground.steps.2.note')}} </span>
           <div class="form-group">
               <label for="given_name" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.given_name')}}*</label>
               <div class="col-md-8">
                   <input name="given_name" type="text" class="form-control" id="given_name" placeholder="{{trans('applications.underground.steps.2.given_name')}}">
               </div>
           </div>
           <div class="form-group">
               <label for="family_name" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.family_name')}}*</label>
               <div class="col-md-8">
                   <input name="family_name" type="text" class="form-control" id="family_name" placeholder="{{trans('applications.underground.steps.2.family_name')}}">
               </div>
           </div>
           <div class="form-group">
               <label>Gender</label>
               <div class="col-md-8">
                   <div class="btn-group btn-group-xs" data-toggle="buttons">
                       <label class="btn btn-custom">
                           <input name="gender" type="radio"> Male
                       </label>
                       <label class="btn btn-custom">
                           <input name="gender" type="radio"> Female
                       </label>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-6">
           <div class="form-group">
               <label for="passport" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.passport')}}*</label>
               <div class="col-md-8">
                   <input name="passport" type="text" class="form-control" id="passport" placeholder="{{trans('applications.underground.steps.2.passport')}}">
                   <a class="form-link pull-right" href="#">{{ trans('applications.underground.steps.2.do_not_have_passport') }}</a>
               </div>
           </div>
           <div class="form-group">
               <label for="birth" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.birth')}}*</label>
               <div class="col-md-8">
                   <select name="day" id="day" class="form-control selectpicker" data-width="32.333%">
                       <option select="selected">day</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                       <option value="10">10</option>
                       <option value="11">11</option>
                       <option value="12">12</option>
                       <option value="13">13</option>
                       <option value="14">14</option>
                       <option value="15">15</option>
                       <option value="16">16</option>
                       <option value="17">17</option>
                       <option value="18">18</option>
                       <option value="19">19</option>
                       <option value="20">20</option>
                       <option value="21">21</option>
                       <option value="22">22</option>
                       <option value="23">23</option>
                       <option value="24">24</option>
                       <option value="25">25</option>
                       <option value="26">26</option>
                       <option value="27">27</option>
                       <option value="28">28</option>
                       <option value="29">29</option>
                       <option value="30">30</option>
                       <option value="31">31</option>
                   </select>
                   <select name="month" id="month" class="form-control selectpicker" data-width="32.333%">
                       <option select="selected">month</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                       <option value="10">10</option>
                       <option value="11">11</option>
                       <option value="12">12</option>

                   </select>
                   <select name="year" id="year" class="form-control selectpicker" data-width="32.333%">
                   <option select="selected">year</option>
                   <?php $yearsAllowed = Carbon\Carbon::today()->year - 14 ?>
                   @foreach(range(60,1) as $year)
                       <option value="{{ $years = $yearsAllowed -- }}">{{ $years }}</option>
                   @endforeach
               </select>
               </div>
           </div>
           <br/>
            <div class="form-group">
               <label for="birth_place" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.birth_place')}}*</label>
               <div class="col-md-8">
                   <input name="birth_place" type="text" class="form-control" id="birth_place" placeholder="{{trans('applications.underground.steps.2.birth_place')}}">
               </div>
           </div>
       </div>
    </div>
</fieldset>
<div class="sep-heading-container shc4 clearfix ">
    <h4> Form Photo</h4>
    <div class="sep-container">
        <div class="the-sep"></div>
    </div>
</div>

<fieldset>
    <div class="row">
       <div class="col-md-6">
            <h5> {{ trans('applications.underground.steps.2.photo_required_title') }}</h5>
            <p>{{ trans('applications.underground.steps.2.photo_required_text') }}</p>
       </div>
       <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                  <img ng-src="/backend/images/profiles/default.jpg" alt="profile">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                <div>
                  <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="photo"></span>
                  <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
              </div>
       </div>
    </div>
</fieldset>

<div class="sep-heading-container shc4 clearfix ">
    <h4> Contact Information</h4>
    <div class="sep-container">
        <div class="the-sep"></div>
    </div>
</div>
<fieldset>
    <div class="row">
       <div class="col-md-6">
           <div class="form-group">
               <label for="email" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.email')}}*</label>
               <div class="col-md-8">
                   <input name="email" type="email" class="form-control" id="email" placeholder="{{trans('applications.underground.steps.2.email')}}">
               </div>
           </div>
           <div class="form-group">
               <label for="street_address" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.street_address')}}*</label>
               <div class="col-md-8">
                    <textarea name="street_address" id="street_address" class="form-control" rows="2">

                    </textarea>
                </div>
           </div>
           <br/>
           <div class="form-group">
              <label for="city_province_region" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.city_province_region')}}*</label>
              <div class="col-md-8">
                  <input name="city_province_region" type="text" class="form-control" id="city_province_region" placeholder="{{trans('applications.underground.steps.2.city_province_region')}}">
              </div>
          </div>
          <br/>
          <br/>
           <div class="form-group">
               <label for="postal_code" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.postal_code')}}*</label>
               <div class="col-md-8">
                   <input name="postal_code" type="text" class="form-control" id="postal_code" placeholder="{{trans('applications.underground.steps.2.postal_code')}}">
               </div>
           </div>
           <div class="form-group">
               <label for="country" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.country')}}*</label>
               <div class="col-md-8">
                   <select name="country" id="day" class="form-control selectpicker" >
                       <option select="selected">{{trans('applications.underground.steps.2.country')}}</option>
                   </select>
               </select>
               </div>
           </div>
           <br/>

       </div>
       <div class="col-md-6">
         <span class="note"><strong>{{trans('applications.underground.steps.2.telephones')}}</strong> </span>
          <div class="form-group">
              <label for="evening_home" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.evening_home')}}*</label>
              <div class="col-md-8">
                  <input name="evening_home" type="text" class="form-control" id="evening_home" placeholder="{{trans('applications.underground.steps.2.evening_home')}}">
              </div>
          </div>
          <div class="form-group">
              <label for="day_work" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.day_work')}}*</label>
              <div class="col-md-8">
                  <input name="day_work" type="text" class="form-control" id="day_work" placeholder="{{trans('applications.underground.steps.2.day_work')}}">
              </div>
          </div>
          <div class="form-group">
              <label for="mobile" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.mobile')}}*</label>
              <div class="col-md-8">
                  <input name="mobile" type="text" class="form-control" id="mobile" placeholder="{{trans('applications.underground.steps.2.mobile')}}">
              </div>
          </div>
          <span class="note"><strong>{{trans('applications.underground.steps.2.emergency_contacts')}}</strong> </span>
          <div class="form-group">
              <label for="name" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.name')}}*</label>
              <div class="col-md-8">
                  <input name="name" type="text" class="form-control" id="name" placeholder="{{trans('applications.underground.steps.2.name')}}">
              </div>
          </div>
          <div class="form-group">
              <label for="phone" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.phone')}}*</label>
              <div class="col-md-8">
                  <input name="phone" type="text" class="form-control" id="phone" placeholder="{{trans('applications.underground.steps.2.phone')}}">
              </div>
          </div>
          <div class="form-group">
              <label for="relation_to_you" class="col-md-2 control-label" >{{trans('applications.underground.steps.2.relation_to_you')}}*</label>
              <div class="col-md-8">
                  <input name="relation_to_you" type="text" class="form-control" id="relation_to_you" placeholder="{{trans('applications.underground.steps.2.relation_to_you')}}">
                  <span class="note text-muted small">{{trans('applications.underground.steps.2.note_relation')}}</span>
              </div>
          </div>
          <br/>
      </div>
    </div>
</fieldset>