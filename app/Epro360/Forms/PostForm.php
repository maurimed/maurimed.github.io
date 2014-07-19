<?php namespace Epro360\Forms;

use Laracasts\Validation\FormValidator;

class PostForm extends FormValidator {

    /**
     * Validation rules for create a post
     *
     * @var array
     */
    protected $rules = [
        "title" => "required",
        "body" => "required",
        "image" => "image|mimes:jpg,jpeg,png|max:2000"
    ];

}