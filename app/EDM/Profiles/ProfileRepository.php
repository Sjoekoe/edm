<?php  namespace EDM\Profiles;
  
class ProfileRepository {

    /**
     * Persist a profile
     *
     * @param Profile $profile
     *
     * @return mixed
     */
    public function save(Profile $profile) {
        return $profile->save();
    }

    /**
     * Get a profile from a user by its id
     *
     * @param $userId
     *
     * @return mixed
     */
    public function getByUserId($userId) {
        return Profile::where('user_id', '=', $userId)->first();
    }
} 