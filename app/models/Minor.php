<?php

class Minor extends \Eloquent {
	protected $fillable = ["name", "slug", "major_id"];

	public function majors()
	{
		return $this->belongsTo("Major", "major_id");
	}
}