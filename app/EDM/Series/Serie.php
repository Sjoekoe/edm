<?php namespace EDM\Series;

use Eloquent;

class Serie extends Eloquent {

    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'image', 'text'];

    /**
     * @var string
     */
    protected $table = 'series';

    /**
     * @param $name
     * @param $slug
     * @param $image
     * @param $text
     *
     * @return static
     */
    public static function createSerie($name, $slug, $image, $text) {
        $serie = new static(compact('name', 'slug', 'image', 'text'));

        return $serie;
    }
}