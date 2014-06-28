<?php

use Laracasts\Presenter\PresentableTrait;

class Major extends \Eloquent {

    use PresentableTrait;

    protected $presenter = 'Epro360\Presenters\MajorsPresenter';

	protected $fillable = ['name', 'slug', 'academic_school_id'];

	public function academicSchools()
	{
		return $this->belongsTo('AcademicSchool', 'academic_school_id');
	}

	public function minors()
	{
		return $this->hasMany('Minor');
	}
	
}