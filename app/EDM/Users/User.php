<?php namespace EDM\Users;

use EDM\Registration\UserRegistered;
use EDM\Roles\RolesTrait;
use Eloquent;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Support\Facades\Hash;
use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;
use Laravel\Cashier\BillableInterface;
use Laravel\Cashier\BillableTrait;

class User extends Eloquent implements UserInterface, RemindableInterface, BillableInterface {

    use UserTrait, RemindableTrait, BillableTrait, EventGenerator, PresentableTrait, RolesTrait;

    /**
     * The presenter class for the user
     *
     * @var string
     */
    protected $presenter = 'EDM\Users\UserPresenter';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array(
        'password',
        'remember_token'
    );

    /**
     * The fillable fields fo the User
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password'
    ];

    /**
     * The dates used for a subscription
     *
     * @var array
     */
    protected $dates = [
        'trial_ends_at',
        'subscription_ends_at'
    ];

    /**
     * Set up the profile relationship
     *
     * @return mixed
     */
    public function profile() {
        return $this->hasOne('EDM\Profiles\Profile');
    }

    /**
     * Set up the role for a user
     *
     * @return mixed
     */
    public function roles() {
        return $this->belongsToMany('EDM\Roles\Role');
    }

    /**
     * a Password should always be hashed
     *
     * @param $password
     */
    public function setPasswordAttribute($password) {
        $this->attributes['password'] = Hash::make($password);
    }

    /**
     * Register a new user
     *
     * @param $username
     * @param $email
     * @param $password
     *
     * @return static
     */
    public static function register($username, $email, $password) {
        $user = new static(compact('username', 'email', 'password'));

        $user->raise(new UserRegistered($user));

        return $user;
    }

    /**
     * Determine if the given user is the same as the current one
     *
     * @param $user
     *
     * @return bool
     */
    public function is($user) {
        if ( is_null($user) ) return false;

        return $this->username == $user->username;
    }
}
