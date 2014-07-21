<?php namespace Epro360\Forms\User;

use Laracasts\Validation\FormValidator;

class UserCreateForm extends FormValidator {

    /**
     * Validation rules for create an User
     *
     * @var array
     */
    protected $rules = [
        "firstname" => "required",
        "lastname"  => "required",
        "email"     => "required|unique:users,email",
    ];

}