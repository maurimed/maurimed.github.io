<?php

use Laracasts\Presenter\PresentableTrait;

class Requirement extends \Eloquent {
	protected $fillable = [];

    use PresentableTrait;

    protected $presenter = 'Epro360\Presenters\RequirementsPresenter';

    public function universities()
    {
        return $this->belongsToMany('University');
    }
}





