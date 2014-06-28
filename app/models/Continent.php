<?php

class Continent extends \Eloquent {
	protected $fillable = [];

    public function countries()
    {
        return $this->hasMany('Country');
    }
}