<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Subscriber extends \Eloquent {
	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function state()
    {
        return $this->belongsTo('State');
    }
}