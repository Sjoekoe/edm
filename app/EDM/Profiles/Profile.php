<?php  namespace EDM\Profiles;

use Eloquent;

class Profile extends Eloquent {

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'location',
        'twitter',
        'soundcloud',
        'website'
    ];

    /**
     * The table for the specific class
     * @var string
     */
    protected $table = 'profiles';

    /**
     * The relationship with the user model
     *
     * @return mixed
     */
    public function user() {
        return $this->belongsTo('EDM\Users\User');
    }


}