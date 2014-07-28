<?php

class City extends \Eloquent {

	protected $fillable = [];

    public $timestamps = false;

    public function state()
    {
        return $this->belongsTo('State');
    }

    public function ambassadors()
    {
        return $this->hasMany('Ambassador');
    }

}