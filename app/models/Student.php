<?php

class Student extends \Eloquent {

    protected $fillable = ['firstname', 'lastname', 'phone', 'about_me'];

    public function profile()
    {
        return $this->morphOne('User', 'userable');
    }


}