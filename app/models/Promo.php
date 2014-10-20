<?php

use Laracasts\Presenter\PresentableTrait;

class Promo extends \Eloquent {

	use PresentableTrait;

	protected $fillable = ['title', 'image', 'lang', 'published', 'user_id'];

	protected $presenter = 'Epro360\Presenters\PromoPresenter';

	public function owner()
	{
		return $this->belongsTo('User', 'user_id');
	}

}