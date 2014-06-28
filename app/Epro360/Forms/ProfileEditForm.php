<?php namespace Epro360\Forms;

use Laracasts\Validation\FormValidator;

class ProfileEditForm extends FormValidator {



    /**
     * Validation rules for logging in
     *
     * @var array
     */
    protected $rules = [
        "personal_email" => "email",
        "username" => "unique:users,username",
        "image" => "image|mimes:jpg,jpeg,png"
    ];

}