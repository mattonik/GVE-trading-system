<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Message;
use App\User;
use Request;
use Auth;

class MessagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function showMessages()
	{
		return view('messages.inbox', [
			'messages' => Message::where('to_id', '=', Auth::user()->id)->get(),
			'bodyClass' => 'htmls_pages_inbox', 
			'active' => 'messages'
		]);
	}

	public function newMessage() {
		return view('messages.new', [
			'messages' => Message::where('to_id', '=', Auth::user()->id)->get(),
			'users' => User::all(),
			'bodyClass' => 'htmls_pages_inbox htmls_pages_inbox_compose',
			'active' => 'messages'
		]);
	}

	public function sendMessage()
	{
		$data = Request::all();
		
		$msg = new Message;

		$msg->to_id = $data['to_id'];
		$msg->from_id = Auth::user()->id;
		$msg->message = $data['message'];

		$msg->save();

		return redirect('messages');
	}
}
