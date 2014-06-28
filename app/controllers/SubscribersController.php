<?php

use Epro360\Forms\SubscribeForm;
use Laracasts\Validation\FormValidationException;

class SubscribersController extends \BaseController {

    protected $subscriberForm;

    function __construct(SubscribeForm $subscriberForm)
    {
        $this->subscriberForm = $subscriberForm;
    }

    /**
	 * Display a listing of the resource.
	 * GET /subscribers
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /subscribers/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /subscribers
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();

        try
        {
            $this->subscriberForm->validate($input);

            $subject = "We will contact you soon.";
            $view = "emails.notification";
            $data = [
                'title' => $subject,
//                'body' => View::make('emails.notifications.contact')
            ];

            Subscriber::create($input);

            Mail::send('emails.notification', $data, function($message) use ($input)
            {
                $message->to($input['email'], $input['name'])->subject("We will contact you soon.");
            });


            return Redirect::back()->withSuccessMessage('We will contact you soon');
        }
        catch (FormValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors())->withDangerMessage('There were some validation errors, please try again');
        }
	}

	/**
	 * Display the specified resource.
	 * GET /subscribers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /subscribers/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /subscribers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /subscribers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}