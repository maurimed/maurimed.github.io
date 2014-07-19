<?php

class City extends \Eloquent {

	protected $fillable = [];

    public $timestamps = false;

    public function state()
    {
        return $this->belongsTo('State', 'state_ab', 'abbreviation');
    }

    public function ambassadors()
    {
        return $this->hasMany('Ambassador');
    }

}