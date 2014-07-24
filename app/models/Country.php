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
        return $this->hasMany('State');
    }

    public function ambassadors()
    {
        return $this->hasMany('Ambassador');
    }
}