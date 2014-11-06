<?php  namespace EDM\Mailers;
  
use EDM\Users\User;

class UserMailer extends Mailer {

    public function sendWelcomeMessageTo(User $user) {
        $subject = 'Welcome to EDM-School';
        $view = 'emails.registration.confirm';

        return $this->sendTo($user, $subject, $view);
    }
} 