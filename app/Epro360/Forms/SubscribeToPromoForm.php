<?php namespace Epro360\Forms;

use Laracasts\Validation\FormValidator;

class SubscribeToPromoForm extends FormValidator {

    /**
     * Validation rules for subscribe to a promo
     *
     * @var array
     */
    protected $rules = [
        'promo_name'     => 'required',
        'promo_email'    => 'required|email',
        'promo_phone'    => 'required|numeric'
    ];

}