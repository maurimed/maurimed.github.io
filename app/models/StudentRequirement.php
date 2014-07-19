<?php

use Laracasts\Presenter\PresentableTrait;

class StudentRequirement extends \Eloquent {

    protected $fillable = [];
    protected $table = 'student_requirement';

    use PresentableTrait;

    protected $presenter = 'Epro360\Presenters\StudentRequirementPresenter';


    public function student()
    {
        return $this->belongsTo('Student');
    }



}