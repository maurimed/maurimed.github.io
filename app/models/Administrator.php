<?php
use Laracasts\Presenter\PresentableTrait;


class Administrator extends \Eloquent {

    use PresentableTrait;

    protected $presenter = 'Epro360\Presenters\AdministratorPresenter';

    public function profile()
    {
        return $this->morphOne('User', 'userable');
    }

    public function posts()
    {
        return $this->hasMany('Post');
    }

	protected $fillable = ['firstname', 'lastname', 'personal_email', 'phone', 'personal_phone', 'about_me'];
}