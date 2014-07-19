<?php

use Laracasts\Presenter\PresentableTrait;

class University extends \Eloquent {

    use PresentableTrait;

    protected $presenter = 'Epro360\Presenters\UniversityPresenter';

	protected $fillable = [];

    public function city()
    {
        return $this->belongsTo('City');
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