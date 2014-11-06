<?php  namespace EDM\Forms;
  
use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator {

    /**
     * Validation rules for registration form
     *
     * @var array
     */
    protected $rules = [
        'username'  => 'required|unique:users|min:4',
        'email'     => 'required|email|unique:users',
        'password'  => 'required|confirmed|min:6'
    ];
} 