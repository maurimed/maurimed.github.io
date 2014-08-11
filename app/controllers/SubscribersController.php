<?php

use Epro360\Forms\SubscribeForm;
use Epro360\Mailers\SubscriberMailer;
use Illuminate\Support\Facades\Input;


class SubscribersController extends \BaseController {

    protected $subscriberForm;

    protected $subscriberMailer;

    /**
     * @param SubscribeForm $subscriberForm
     * @param SubscriberMailer $subscriberMailer
     */
    function __construct(SubscribeForm $subscriberForm, SubscriberMailer $subscriberMailer)
    {
        $this->subscriberForm = $subscriberForm;

        $this->subscriberMailer = $subscriberMailer;
    }


	public function store()
	{


        $input = Input::all();


        $this->subscriberForm->validate($input);


        $subscriber = new Subscriber;

        $subscriber->name = $input["firstname"] .' ' .$input["lastname"];
        $subscriber->email = $input["email"];
        $subscriber->phone = $input["phone"];
        $subscriber->state_id = $input["state"];
        $subscriber->interest = $input["interest"];
        $subscriber->find_us = $input["find_us"];
        $subscriber->age = $input["age"];
        $subscriber->ip = Request::getClientIp();

        $subscriber->save();

        $this->subscriberMailer->thanks($subscriber);


        return Redirect::back()->withSuccessMessage('We will contact you soon');

	}



}