<?php

class State extends \Eloquent {
	protected $fillable = [];

    public $timestamps = false;


    public function country()
    {
        return $this->belongsTo('Country');
    }

    public function cities()
    {
        return $this->hasMany('City');
    }
}