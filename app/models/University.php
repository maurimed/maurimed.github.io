<?php

use Laracasts\Presenter\PresentableTrait;

class University extends \Eloquent {

    use PresentableTrait;

    protected $presenter = 'Epro360\Presenters\UniversityPresenter';

	protected $fillable = [];

    public function city()
    {
        return $this->belongsTo('City', 'city');
    }

    public function state()
    {
        return $this->belongsTo('State', 'state');
    }

    public function country()
    {
        return $this->belongsTo('Country', 'country', 'country_code');
    }

    public function requirements()
    {
        return $this->belongsToMany("Requirement");
    }


    public function students()
    {
        return $this->belongsToMany("Student");
    }
}