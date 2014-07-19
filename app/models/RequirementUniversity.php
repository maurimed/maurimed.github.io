<?php

class RequirementUniversity extends \Eloquent {
    protected $fillable = [];
    protected $table = 'requirement_university';


    public function requirement()
    {
        return $this->belongsTo('Requirement');
    }

}