<?php

use EDM\Forms\LoginForm;
use EDM\Users\User;
use Laracasts\Flash\Flash;

class SessionsController extends \BaseController {

    /**
     * @var EDM\Forms\LoginForm
     */
    private $loginForm;

    function __construct(LoginForm $loginForm) {
        $this->loginForm = $loginForm;
    }


    /**
	 * Show the Log in form.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
    }


	/**
	 * Log a user in.
	 *
	 * @return Response
	 */
	public function store()
	{

        $formData = Input::only('email', 'password');

		$this->loginForm->validate($formData);

        if (! Auth::attempt($formData)) {
            Flash::message('We where unable to sign you in. Please check your credentials and try again.');

            return Redirect::back()->withInput();
        }

        Flash::message('Welcome Back '.Auth::user()->username.'!');

        return Redirect::intended('/');
    }

    /**
     * Log the user out
     *
     * @internal param int $id
     * @return Response
     */
	public function destroy()
	{
		Auth::logout();

        Flash::success('You have now logged out.');
        return Redirect::home();
	}


}
