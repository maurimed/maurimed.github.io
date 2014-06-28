<?php

class University extends \Eloquent {
	protected $fillable = [];

    public function zip()
    {
        return $this->belongsTo('Zip');
    }
}