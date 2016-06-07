<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showResume()
	{
		$name = 'something';

	    $data = array(
	        'name' => $name
	    );

	    return View::make('resume')->with($data);
	}

	public function showPortfolio()
	{
		$name = 'something else';

	    $data = array(
	        'name' => $name
	    );

	    return View::make('portfolio')->with($data);
	}

	public function rollDice($guess = 1)
	{
		$min = 1;
	    $max = 6;
	    $message = '';
	    $randomNum = mt_rand((int)$min, (int)$max);

	    $message = ($guess == $randomNum) ? 'You guessed it!' : 'Nope!';
	    
	    $data = array(
	        'randomNum' => $randomNum,
	        'guess' => $guess,
	        'message' => $message
	    );

	    return View::make('roll-dice')->with($data);
	}

	public function showAbout()
	{
		return View::make('about');
	}

	public function showLogin()
	{
		return View::make('login');
	}
	public function showLogout()
	{
		Auth::logout();
		return View::make('logout');
		
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			return Redirect::intended('/');
		} else{
			Session::flash('errorMessage', 'Login Attempt Failed!');
	        return Redirect::back();
		}
	}

}
