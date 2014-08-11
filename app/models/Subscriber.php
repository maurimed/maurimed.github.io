<?php

class Subscriber extends \Eloquent {
	protected $fillable = [];


    public function state()
    {
        return $this->belongsTo('State');
    }
}