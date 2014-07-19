<?php

use Epro360\Forms\SubscribeForm;
use Guzzle\Http\Client;
use Illuminate\Support\Facades\Input;
use Epro360\Mailers\SubscriberMailer;

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

        $ip = Request::getClientIp();

        $client = new Client("http://ipinfo.io/");

        $response = $client->get( $ip . '/geo' )->send();

        $location = $response->json();

//        dd($location["ip"]);

        $input = Input::all();


        $this->subscriberForm->validate($input);


        if($response->getReasonPhrase() == "OK")
        {
            $subscriber = new Subscriber;

            $subscriber->name = $input["name"];
            $subscriber->email = $input["email"];
            $subscriber->phone = $input["phone"];
            $subscriber->ip = $location["ip"];
            $subscriber->city = isset($location["city"]) ? $location["city"] : 'not found';
            $subscriber->region = isset($location["region"]) ? $location["region"] : 'not found';
            $subscriber->country = isset($location["country"]) ? $location["country"] : 'not found';

            $subscriber->save();

            $this->subscriberMailer->thanks($subscriber);
        }


            return Redirect::back()->withSuccessMessage('We will contact you soon');

	}



}