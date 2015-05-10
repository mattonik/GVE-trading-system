<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Request;
use Mail;

class UserController extends Controller {

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
     * List all users.
     *
     * @return Response
     */
    public function listUsers()
    {
        return view('users.list', [
        	'users' => User::all(),
        	'bodyClass' => 'htmls_tables',
        	'active' => 'users'
        ]);
    }

    /**
     * Form for adding new user.
     *
     * @return Response
     */
    public function addUserForm()
    {
        return view('users.add', [
        	'bodyClass' => 'htmls_forms',
        	'active' => 'users'
        ]);
    }

    /**
	 * Create a new user instance after a valid registration.
	 *
	 * @return User
	 */
	public function addUser()
	{
		$data = Request::all();
		$password = str_random(16);

		if(User::create([
			'name' => $data['name'],
			'surname' => $data['surname'],
			'email' => $data['email'],
			'password' => bcrypt($password),
		])) {
			return redirect('/users');
		} else {
			return redirect('/user/new');
		}
	}

	public function deleteUser($id)
	{
		$user = User::find($id);

		$user->delete();

		return redirect('/users');
	}

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        return view('users.list', [
        	'user' => User::findOrFail($id),
        	'bodyClass' => 'htmls_tables'
        ]);
    }

}