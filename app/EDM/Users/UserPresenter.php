<?php  namespace EDM\Users;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter{

    /**
     * Show the avatar of the user
     *
     * @param int $size
     * @return string
     */
    public function gravatar($size = 30) {
        $email = md5($this->email);

        return "//www.gravatar.com/avatar/{$email}?s={$size}&d=//placekitten.com/{$size}/{$size}";
    }

    /**
     * Show the date when the user registered
     *
     * @return mixed
     */
    public function activeSince() {
        return $this->created_at->format('d-m-Y');
    }

}