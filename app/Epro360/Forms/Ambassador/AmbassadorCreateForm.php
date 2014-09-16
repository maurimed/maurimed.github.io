<?php namespace Epro360\Forms\Ambassador;

use Laracasts\Validation\FormValidator;

class AmbassadorCreateForm extends FormValidator {

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