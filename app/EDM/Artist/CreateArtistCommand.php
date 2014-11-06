<?php  namespace EDM\Artist;
  
class CreateArtistCommand {


    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $website;
    /**
     * @var
     */
    public $label;
    /**
     * @var
     */
    public $promomail;
    /**
     * @var
     */
    public $bio;

    /**
     * @param $name
     * @param $website
     * @param $label
     * @param $promomail
     * @param $bio
     */
    function __construct($name, $website, $label, $promomail, $bio) {
        $this->name = $name;
        $this->website = $website;
        $this->label = $label;
        $this->promomail = $promomail;
        $this->bio = $bio;
    }
}