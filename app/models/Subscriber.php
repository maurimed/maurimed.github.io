<?php

class Subscriber extends \Eloquent {
	protected $fillable = [];


    public function city()
    {
        return $this->belongsTo('City');
    }
}