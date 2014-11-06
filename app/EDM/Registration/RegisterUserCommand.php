<?php  namespace EDM\Registration;
  
class RegisterUserCommand {

    /**
     * @var
     */
    public $username;

    /**
     * @var
     */
    public $email;

    /**
     * @var
     */
    public $password;

    /**
     * @var
     */
    public $subscriptionPlan;

    /**
     * @var
     */
    public $stripeToken;

    /**
     * @param $username
     * @param $email
     * @param $password
     * @param $subscriptionPlan
     * @param $stripeToken
     */
    function __construct($username, $email, $password, $subscriptionPlan, $stripeToken ) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->plan = $subscriptionPlan;
        $this->token = $stripeToken;
    }


} 