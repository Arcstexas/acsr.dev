<?php

use Cartalyst\Sentry\Facades\CI\Sentry;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends \BaseController
{
	public function postLogin()
	{
		$rules = array(
			'username' => 'required',
			'password' => 'required',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
			$message = $validator->messages();
			return Redirect::route('home')
				->withInput()
				->withErrors($message);
		} else {
			// Login credentials
			$credentials = array(
				'email'    => Input::get('username'),
				'password' => Input::get('password'),
			);
			// Authenticate the user
			if (Auth::attempt($credentials))
			{
				return Redirect::route('home');
			}
			else{
				Session::flash('fail', 'Wrong Username or password');
				return Redirect::route('home');
			}
		}
	}

	public function postChangePassword()
	{
		$rules =
			[
				'password' => 'required',
				'cpassword' => 'required|same:password'
			];

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			$message = $validator->messages();
			Session::flash('password', 'Wrong Password');
			return Redirect::route('home')
				->withInput()
				->withErrors($message);
		}

		$user = Auth::user();
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		return Redirect::route('home');
	}

	public function logout()
	{
		Session::flush();
		return Redirect::route('home');
	}
}
