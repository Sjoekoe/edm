<?php  namespace EDM\Registration;
  
use EDM\Profiles\Profile;
use EDM\Users\User;
use EDM\Users\UserRepository;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class RegisterUserCommandHandler implements CommandHandler {

    use DispatchableTrait;

    protected $repository;

    function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }


    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command) {

        $user = User::register(
            $command->username, $command->email, $command->password
        );

        $user->subscription($command->plan)->create($command->token);

        $user->profile()->create(['user_id' => $user->id]);

        $user->assignRole(1);

        $this->repository->save($user);

        $this->dispatchEventsFor($user);

        return $user;

    }
}