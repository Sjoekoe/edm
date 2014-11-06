<?php

use EDM\Users\User;
use EDM\Users\UserRepository;
use Illuminate\Support\Facades\Request;

class UsersController extends \BaseController {

    /**
     * @var EDM\Users\UserRepository
     */
    private $repository;

    function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }

    public function index() {
        $sortBy    = Request::get('sortBy');
        $direction = Request::get('direction');

        $users = $this->repository->getPaginated(compact('sortBy', 'direction'), 10);

        return View::make('admin.users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     * GET /users/{id}
     *
     * @param $username
     *
     * @internal param int $id
     * @return Response
     */
    public function show($username) {
        $user = $this->repository->findByUsername($username);

        return View::make('users.show', compact('user'));
    }


}