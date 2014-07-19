<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Laracasts\Presenter\PresentableTrait;


class Administrator extends \Eloquent {

    use PresentableTrait, SoftDeletingTrait;

    protected $fillable = [];

    protected $dates = ['deleted_at'];

    protected $presenter = 'Epro360\Presenters\AdministratorPresenter';


    public function profile()
    {
        return $this->morphOne('User', 'userable');
    }

    public function creator()
    {
        return $this->belongsTo('User', 'created_by', 'id');
    }

    public function city()
    {
        return $this->belongsTo('City');
    }

    public function posts()
    {
        return $this->hasMany('Post');
    }
}