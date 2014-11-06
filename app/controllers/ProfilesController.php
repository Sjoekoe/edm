<?php

use EDM\Core\CommandBus;
use EDM\Forms\UpdateProfileForm;
use EDM\Profiles\Profile;
use EDM\Profiles\UpdateProfileCommand;
use EDM\Users\UserRepository;

class ProfilesController extends \BaseController {

    use CommandBus;

    /**
     * @var EDM\Users\UserRepository
     */
    protected $userRepository;

    /**
     * @var EDM\Forms\UpdateProfileForm
     */
    private $updateProfileForm;

    /**
     * @param UserRepository $userRepository
     * @param UpdateProfileForm $updateProfileForm
     */
    function __construct(UserRepository $userRepository, UpdateProfileForm $updateProfileForm) {
        $this->userRepository = $userRepository;
        $this->updateProfileForm = $updateProfileForm;
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
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
     * @param $username
     * @return Response
     */
	public function edit($username)
	{
        if (Auth::user()->username != $username) {
            return Redirect::home();
        }

        $user = $this->userRepository->findByUsername($username);

        return View::make('profiles.edit', compact('user'));
	}


    /**
     * Update the specified resource in storage.
     *
     * @param $username
     * @return Response
     */
	public function update($username)
	{
        $user = $this->userRepository->findByUsername($username);

        $this->updateProfileForm->updateRules($user)->validate(Input::all());

        extract(Input::all());

        $this->execute(new UpdateProfileCommand($user->id, $username, $email, $location, $twitter, $soundcloud, $website));

        Flash::success('Your profile has been updated');

        return Redirect::route('users.show', $username);
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
