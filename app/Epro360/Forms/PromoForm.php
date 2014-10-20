<?php namespace Epro360\Forms;

use Laracasts\Validation\FormValidator;

class PromoForm extends FormValidator {

    /**
     * Validation rules for create a promo
     *
     * @var array
     */
    protected $rules = [
        "title" => "required",
        "lang"  => "required",
        "video" => "required",
        "image" => "image|mimes:jpg,jpeg,png|max:2000"
    ];

}