<?php  namespace EDM\Profiles;
  
class ProfileRepository {

    public function save(Profile $profile) {
        return $profile->save();
    }

    public function getByUserId($userId) {
        return Profile::where('user_id', '=', $userId)->first();
    }
} 