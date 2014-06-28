<?php


use Laracasts\Presenter\PresentableTrait;

class Post extends \Eloquent {
	protected $fillable = ['title', 'body', 'published', 'user_id', 'lang'];


    use PresentableTrait;

    protected $presenter = 'Epro360\Presenters\PostPresenter';

    public function getDates()
    {
        return ['published_at', 'created_at', 'updated_at'];
    }

    public function owner()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }

    public function getPublishedAttribute($published)
    {
        return $published == 0 ? "No" : "Yes";
    }



}