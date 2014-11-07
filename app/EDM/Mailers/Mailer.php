<?php  namespace EDM\Mailers;

use Illuminate\Mail\Mailer as Mail;
  
abstract class Mailer {

    /**
     * @var \Illuminate\Support\Facades\Mail
     */
    private $mail;

    /**
     * @param Mail $mail
     */
    function __construct(Mail $mail) {
        $this->mail = $mail;
    }

    /**
     * Send an email to...
     *
     * @param $user
     * @param $subject
     * @param $view
     * @param array $data
     */
    public function sendTo($user, $subject, $view, $data = []) {
        $this->mail->queue($view, $data, function($message) use ($user, $subject) {
            $message->to($user->email)->subject($subject);
        });
    }
} 