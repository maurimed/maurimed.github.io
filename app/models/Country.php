<?php

class Country extends \Eloquent {


	protected $fillable = ["name", "continent_id", "phonecode"];

    public $timestamps = false;

    public function continent()
    {
        return $this->belongsTo('Continent');
    }

    public function states()
    {
        return $this->hasMany('State', 'country_code', 'country_code');
    }

    public function cities()
    {
        return $this->hasMany('City', 'country_code', 'country_code');
    }

    public function universities()
    {
        return $this->hasMany('University', 'country', 'country_code');
    }

    public function ambassadors()
    {
        return $this->hasMany('Ambassador', 'country_code', 'country_code');
    }
}