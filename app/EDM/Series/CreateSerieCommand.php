<?php  namespace EDM\Series;

class CreateSerieCommand {

    /**
     * @var
     */
    public $name;

    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $text;

    /**
     * @param $name
     * @param $image
     * @param $text
     */
    function __construct($name, $image, $text) {
        $this->name  = $name;
        $this->image = $image;
        $this->text  = $text;
    }
}