<?php namespace Epro360\Forms;


use Laracasts\Validation\FormValidator;

class SubscribeForm extends FormValidator {


    /**
     * Validation rules for subscribe users
     *
     * @var array
     */
    protected $rules = [

        'firstname'=> 'required',
        'lastname'=> 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'country'=> 'required',
        'state'=> 'required',
        'interest'=> 'required',
        'find_us'=> 'required',
        'age'=> 'required'
    ];

}