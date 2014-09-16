<?php namespace Epro360\Forms\Administrator;

use Laracasts\Validation\FormValidator;

class AdministratorEditForm extends FormValidator {

    /**
     * Validation rules for create an User
     *
     * @var array
     */
    protected $rules = [
        "firstname"      => "required",
        "lastname"       => "required",
        "personal_email" => "email",
        "countries"      => "required",
        "states"         => "required",
        "cities"         => "required",
        "address"        => "required",
        "image"          => "image|mimes:jpg,jpeg,png"
    ];


}