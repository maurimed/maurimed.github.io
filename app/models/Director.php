<?php

class Director extends \Eloquent {

    protected $fillable = ['firstname', 'lastname', 'personal_email', 'phone', 'personal_phone', 'about_me'];

    public function profile()
    {
        return $this->morphOne('User', 'userable');
    }

    public function country()
    {
        return $this->belongsTo('Country');
    }


}