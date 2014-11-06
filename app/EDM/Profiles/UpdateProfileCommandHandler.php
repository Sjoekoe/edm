<?php  namespace EDM\Profiles;
  
use EDM\Profiles\ProfileRepository;
use EDM\Users\UserRepository;
use Laracasts\Commander\CommandHandler;

class UpdateProfileCommandHandler implements CommandHandler {

    /**
     * @var \EDM\Users\UserRepository
     */
    protected  $userRepository;
    /**
     * @var ProfileRepository
     */
    protected  $profileRepository;

    function __construct(UserRepository $userRepository, ProfileRepository $profileRepository) {
        $this->userRepository = $userRepository;
        $this->profileRepository = $profileRepository;
    }


    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command) {
        $user = $this->userRepository->findById($command->user_id);

        $user->username = $command->username;
        $user->email = $command->email;

        $this->userRepository->save($user);

        $profile = $this->profileRepository->getByUserId($command->user_id);


        $profile->location = $command->location;
        $profile->twitter = $command->twitter;
        $profile->soundcloud = $command->soundcloud;
        $profile->website = $command->website;

        $this->profileRepository->save($profile);

        return $profile;
    }
}