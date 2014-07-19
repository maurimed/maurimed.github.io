<?php

use Laracasts\Presenter\PresentableTrait;

class Director extends \Eloquent {

    use PresentableTrait;

    protected $presenter = 'Epro360\Presenters\DirectorsPresenter';


    protected $fillable = ['firstname', 'lastname', 'personal_email', 'phone', 'personal_phone', 'about_me'];

    public function profile()
    {
        return $this->morphOne('User', 'userable');
    }

    public function city()
    {
        return $this->belongsTo('City');
    }

    public function ambassadors()
    {
        return $this->hasMany('Ambassador');
    }


}