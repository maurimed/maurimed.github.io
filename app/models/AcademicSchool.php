<?php

use Laracasts\Presenter\PresentableTrait;

class AcademicSchool extends \Eloquent {

	use PresentableTrait;

	protected $fillable = ['name', 'slug'];

	protected $presenter = 'Epro360\Presenters\AcademicSchoolPresenter';


	public function majors()
	{
		return $this->hasMany('Major');
	}
	
}