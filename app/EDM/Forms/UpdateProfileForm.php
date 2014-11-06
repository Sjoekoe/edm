<?php  namespace EDM\Forms;
  
use EDM\Users\User;
use Laracasts\Validation\FormValidator;

class UpdateProfileForm extends FormValidator{

    public function updateRules(User $user) {
        $this->rules = [
            'username'  => 'unique:users,username,'.$user->id.'|required',
            'email'     => 'required|email|unique:users,email,'.$user->id
        ];

        return $this;
    }




}