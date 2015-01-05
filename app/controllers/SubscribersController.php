<?php

use Epro360\Forms\SubscribeForm;
use Epro360\Mailers\SubscriberMailer;
use Illuminate\Support\Facades\Input;
use Epro360\Forms\SubscribeToPromoForm;


class SubscribersController extends \BaseController {

    protected $subscriberForm;

    protected $subscriberMailer;

    protected $promoForm;

    /**
     * @param SubscribeForm $subscriberForm
     * @param SubscriberMailer $subscriberMailer
     * @param SubscribeToPromoForm $promoForm
     */
    function __construct(SubscribeForm $subscriberForm,
                         SubscriberMailer $subscriberMailer,SubscribeToPromoForm $promoForm)
    {
        $this->subscriberForm = $subscriberForm;

        $this->subscriberMailer = $subscriberMailer;
        $this->promoForm = $promoForm;
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
        $subscriber->ip = Request::getClientIp();

        $subscriber->save();

        $this->subscriberMailer->thanks($subscriber);


        return Redirect::back()->withSuccessMessage('We will contact you soon');

	}


    public function promo()
    {


        $input = Input::all();

        $this->promoForm->validate($input);

        $subscriber = new Subscriber;

        $subscriber->name = $input["promo_name"] ;
        $subscriber->email = $input["promo_email"];
        $subscriber->phone = $input["promo_phone"];
        $subscriber->interest = $input["interest"];
        $subscriber->ip = Request::getClientIp();

        $subscriber->save();

        Event::fire('promo.subscriber.created', $subscriber);

//        $this->subscriberMailer->thanks($subscriber);

        return Redirect::back()->withSuccessMessage('Thanks for participating');

    }



}