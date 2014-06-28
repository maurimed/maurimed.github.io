<?php namespace Epro360\Forms;


use Laracasts\Validation\FormValidator;

class SubscribeForm extends FormValidator {


    /**
     * Validation rules for subscribe users
     *
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric'
    ];

}