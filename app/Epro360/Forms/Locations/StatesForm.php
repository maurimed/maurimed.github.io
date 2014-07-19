<?php namespace Epro360\Forms\Locations;

use Laracasts\Validation\FormValidator;

class StatesForm extends FormValidator {

    /**
     * Validation rules for create a State
     *
     * @var array
     */
    protected $rules = [
        "country_id"   => "required",
        "name"         => "required",
        "abbreviation" => "required|unique:states,abbreviation",
    ];

}