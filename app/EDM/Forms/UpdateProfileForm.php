<?php  namespace EDM\Forms;
  
use EDM\Users\User;
use Laracasts\Validation\FormValidator;

class UpdateProfileForm extends FormValidator{

    /**
     * Validation rules for updating a profile
     * 
     * @param User $user
     *
     * @return $this
     */
    public function updateRules(User $user) {
        $this->rules = [
            'username'  => 'unique:users,username,'.$user->id.'|required',
            'email'     => 'required|email|unique:users,email,'.$user->id
        ];

        return $this;
    }




}