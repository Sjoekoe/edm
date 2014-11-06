<?php  namespace EDM\Handlers;
  
use EDM\Mailers\UserMailer;
use EDM\Registration\UserRegistered;
use Laracasts\Commander\Events\EventListener;

class EmailNotifier extends EventListener {

    /**
     * @var \EDM\Mailers\UserMailer
     */
    private $mailer;

    /**
     * @param UserMailer $mailer
     */
    function __construct(UserMailer $mailer) {
        $this->mailer = $mailer;
    }

    /**
     * @param UserRegistered $event
     */
    public function whenUserRegistered(UserRegistered $event) {
            $this->mailer->sendWelcomeMessageTo($event->user);
    }
} 