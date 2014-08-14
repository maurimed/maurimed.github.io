<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Laracasts\Presenter\PresentableTrait;

class Ambassador extends \Eloquent {

    use PresentableTrait, SoftDeletingTrait;

    protected $presenter = 'Epro360\Presenters\AmbassadorsPresenter';

    protected $fillable = ['firstname', 'lastname', 'personal_email', 'phone', 'personal_phone', 'about_me'];

    public function profile()
    {
        return $this->morphOne('User', 'userable');
    }

    public function city()
    {
        return $this->belongsTo('City');
    }

    public function country()
    {
        return $this->belongsTo('Country', 'country_code', 'country_code');
    }

    public function students()
    {
        return $this->hasMany('Student');
    }

    public function creator()
    {
        return $this->belongsTo('User', 'created_by', 'id');
    }

}