<?php namespace Epro360\Forms\Locations;

use Laracasts\Validation\FormValidator;

class CitiesForm extends FormValidator {

    /**
     * Validation rules for create a city
     *
     * @var array
     */
    protected $rules = [
        "zip"      => "required|numeric|unique:cities,zip",
        "state" => "required",
        "name"     => "required",
    ];

}