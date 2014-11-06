<?php  namespace EDM\Profiles;
  
class UpdateProfileCommand {

    /**
     * @var
     */
    public $user_id;
    /**
     * @var
     */
    public $username;
    /**
     * @var
     */
    public  $email;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $twitter;
    /**
     * @var
     */
    public $soundcloud;
    /**
     * @var
     */
    public $website;

    /**
     * @param $user_id
     * @param $username
     * @param $email
     * @param $location
     * @param $twitter
     * @param $soundcloud
     * @param $website
     */
    function __construct($user_id, $username, $email, $location, $twitter, $soundcloud, $website) {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->email = $email;
        $this->location = $location;
        $this->twitter = $twitter;
        $this->soundcloud = $soundcloud;
        $this->website = $website;
    }
}