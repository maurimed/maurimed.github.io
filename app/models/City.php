<?php

class City extends \Eloquent {

    public function state()
    {
        return $this->belongsTo('State', 'state_ab', 'abbreviation');
    }

	protected $fillable = [];
}