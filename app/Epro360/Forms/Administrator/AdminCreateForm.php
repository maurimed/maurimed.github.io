<?php namespace Epro360\Forms\Administrator;

use Laracasts\Validation\FormValidator;

class AdminCreateForm extends FormValidator {

    /**
     * Validation rules for create an Administrator
     *
     * @var array
     */
    protected $rules = [
        "firstname" => "required",
        "lastname"  => "required",
        "email"     => "required|unique:users,email",
    ];

}