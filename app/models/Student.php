<?php

use Laracasts\Presenter\PresentableTrait;

class Student extends \Eloquent {

    use PresentableTrait;

    protected $presenter = 'Epro360\Presenters\StudentsPresenter';


    protected $fillable = ['firstname', 'lastname', 'phone', 'about_me'];

    public function profile()
    {
        return $this->morphOne('User', 'userable');
    }

    public function university()
    {
        return $this->belongsTo('University');
    }

    public function requirements()
    {
        return $this->hasMany('StudentRequirement');
    }

    public function city()
    {
        return $this->belongsTo('City');
    }


    public function creator()
    {
        return $this->belongsTo('User', 'created_by', 'id');
    }

}