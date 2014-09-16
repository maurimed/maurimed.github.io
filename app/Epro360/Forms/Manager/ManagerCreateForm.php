<?php namespace Epro360\Forms\Manager;

use Laracasts\Validation\FormValidator;

class ManagerCreateForm extends FormValidator {

    /**
     * Validation rules for create a post
     *
     * @var array
     */
    protected $rules = [
        "firstname" => "required",
        "lastname" => "required",
        'email' => 'required|email|unique:users',
        "countries" => "required",
        "states" => "required",
        "cities" => "required",
        "universities" => "required",
    ];

}