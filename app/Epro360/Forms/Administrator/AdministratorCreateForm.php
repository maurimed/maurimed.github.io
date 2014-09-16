<?php namespace Epro360\Forms\Administrator;

use Laracasts\Validation\FormValidator;

class AdministratorCreateForm extends FormValidator {

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