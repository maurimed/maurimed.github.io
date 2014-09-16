<?php

class City extends \Eloquent {

	protected $fillable = [];

    public $timestamps = false;

    public function state()
    {
        return $this->belongsTo('State');
    }

    public function country()
    {
        return $this->belongsTo('Country', 'country_code', 'country_code');
    }

    public function ambassadors()
    {
        return $this->hasMany('Ambassador');
    }

    public function universities()
    {
        return $this->hasMany('University', 'city');
    }
}