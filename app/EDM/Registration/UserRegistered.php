<?php  namespace EDM\Registration;
  
use EDM\Users\User;

class UserRegistered {

    public $user;

    function __construct(User $user) {
        $this->user = $user;
    }


} 