<?php

use Laracasts\Presenter\PresentableTrait;

class Manager extends \Eloquent {

    use PresentableTrait;

    protected $fillable = [];

    protected  $presenter = 'Epro360\Presenters\ManagerPresenter';

    public function profile()
    {
        return $this->morphOne('User', 'userable');
    }

    public function institutionable()
    {
        return $this->morphTo('institutionable');
    }


}