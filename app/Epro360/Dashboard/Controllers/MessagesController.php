<?php namespace Epro360\Dashboard\Controllers;

use ContactMessage;
use Redirect;
use View;

class MessagesController extends \BaseController {


    /**
	 * Display a listing of the resource.
	 * GET /manager
	 *
	 * @return Response
	 */
	public function index()
	{
        $messages = ContactMessage::all();

		return View::make('dashboard.messages.index', compact('messages'));
	}




	/**
	 * Remove the specified resource from storage.
	 * DELETE /manager/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$message = ContactMessage::find($id);

        $message->delete();

        return Redirect::back()->withSuccessMessage('Message was deleted');
	}

}