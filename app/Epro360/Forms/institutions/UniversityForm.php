<?php  namespace Epro360\Forms\institutions;

use Laracasts\Validation\FormValidator;


class UniversityForm extends FormValidator {


    /**
     * Validation rules for create a University
     *
     * @var array
     */
    protected $rules = [
        "name"             => "required",
        "email"            => "required|email",
        "website"          => "required|url",
        "tuition_link"     => "required|url",
        "admissions_link"  => "required|url",
        "address"          => "required",
        "phone"            => "required|numeric",
        "sports_division"  => "required",
        "closest_airport"  => "required",
        "far_from_airport" => "required",
    ];


} 