<?php  namespace EDM\Forms;
  
use Laracasts\Validation\FormValidator;

class CreateSeriesForm extends FormValidator{

    /**
     * Validation rules for creating a serie
     *
     * @var array
     */
    protected $rules = [
        'name' => 'required|unique:series|min:3|max:50',
        'image' => 'required|mimes:jpg,png,jpeg',
        'text'  => 'required|min:10|max:150'
    ];
} 