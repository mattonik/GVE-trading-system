<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Message;
use App\User;
use Request;
use Auth;
use Carbon\Carbon;

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
	 * Show messages to the user.
	 *
	 * @return Response
	 */
	public function showMessages()
	{
		return view('messages.inbox', [
			'messages' => Message::where('to_id', '=', Auth::user()->id)->orderBy('created_at', 'desc')->get(),
			'inboxCount' => Message::where('to_id', '=', Auth::user()->id)->count(),
			'bodyClass' => 'htmls_pages_inbox', 
			'active' => 'messages'
		]);
	}

	/**
	 * Show sent messages to the user.
	 *
	 * @return Response
	 */
	public function showSentMessages()
	{
		return view('messages.sent', [
			'messages' => Message::where('from_id', '=', Auth::user()->id)->orderBy('created_at', 'desc')->get(),
			'inboxCount' => Message::where('to_id', '=', Auth::user()->id)->count(),
			'bodyClass' => 'htmls_pages_inbox', 
			'active' => 'messages'
		]);
	}

	/**
	 * Show selected message to the user.
	 *
	 * @param $id
	 * @return Response
	 */
	public function showMessage($id)
	{
		$msg = Message::find($id);
		
		if(!$msg->opened_at)
		{
			$msg->opened_at = Carbon::now();
			$msg->save();
		}

		return view('messages.detail', [
			'message' => $msg,
			'inboxCount' => Message::where('to_id', '=', Auth::user()->id)->count(),
			'bodyClass' => 'htmls_pages_inbox', 
			'active' => 'messages'
		]);
	}

	public function newMessage() {
		return view('messages.new', [
			'inboxCount' => Message::where('to_id', '=', Auth::user()->id)->count(),
			'users' => User::all(),
			'bodyClass' => 'htmls_pages_inbox htmls_pages_inbox_compose',
			'active' => 'messages'
		]);
	}

	public function forwardMessage($id) {
		return view('messages.new', [
			'message' => Message::find($id),
			'forward' => true,
			'inboxCount' => Message::where('to_id', '=', Auth::user()->id)->count(),
			'users' => User::all(),
			'bodyClass' => 'htmls_pages_inbox htmls_pages_inbox_compose',
			'active' => 'messages'
		]);
	}

	public function replyMessage($id) {
		return view('messages.new', [
			'message' => Message::find($id),
			'reply' => true,
			'inboxCount' => Message::where('to_id', '=', Auth::user()->id)->count(),
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
		$msg->subject = $data['subject'];

		$msg->save();

		return redirect('messages');
	}
}
