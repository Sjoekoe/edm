<?php  namespace EDM\Forms;

use Laracasts\Validation\FormValidator;

class CreateArtistForm extends FormValidator {

    /**
     * Validation rules for creating an artist
     *
     * @var array
     */
    protected $rules = [
        'name'      => 'required|unique:artists',
        'bio'       => 'max:3000',
        'promomail' => 'email'
    ];
} 