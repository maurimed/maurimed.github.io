<?php

class AcademicSchool extends \Eloquent {
	protected $fillable = ['name', 'slug'];

	public function majors()
	{
		return $this->hasMany('Major');
	}
	
}