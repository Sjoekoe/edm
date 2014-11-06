<?php  namespace EDM\Forms;
  
use Laracasts\Validation\FormValidator;

class LoginForm extends FormValidator {

    /**
     * Validation rules of the login form
     *
     * @var array
     */
    protected $rules = [
       'email'      => 'email|required',
       'password'  => 'required'
    ];
} 