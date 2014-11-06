<?php

use EDM\Forms\RegistrationForm;
use EDM\Registration\RegisterUserCommand;
use EDM\Users\User;
use EDM\Core\CommandBus;
use EDM\Users\UserRepository;
use Laracasts\Flash\Flash;

class AccountController extends \BaseController {

    /**
     * @var EDM\Forms\RegistrationForm
     */
    private $registrationForm;
    /**
     * @var EDM\Users\UserRepository
     */
    private $repo;

    /**
     * @param RegistrationForm         $registrationForm
     * @param EDM\Users\UserRepository $repo
     */
    function __construct(RegistrationForm $registrationForm, UserRepository $repo) {
        $this->registrationForm = $registrationForm;
        $this->repo = $repo;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('accounts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->registrationForm->validate(Input::only('username', 'email', 'password', 'password_confirmation'));

        extract(Input::only('username', 'email', 'password', 'subscriptionPlan', 'stripeToken'));

        $user = $this->execute(
            new RegisterUserCommand($username, $email, $password, $subscriptionPlan, $stripeToken)
        );

        Auth::login($user);

        Flash::success('Welcome '.$user->username.'. Enjoy learning from out video\'s');

        return Redirect::route('home');
	}


	/**
	 * Display the specified resource.
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
     *
     * @return Response
     */
	public function edit()
	{

	}


    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
	public function update()
	{

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
