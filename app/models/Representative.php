<?php

class Representative extends \Eloquent {

    public function profile()
    {
        return $this->morphOne('User', 'userable');
    }

	protected $fillable = [];
}