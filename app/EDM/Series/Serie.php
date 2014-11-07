<?php namespace EDM\Series;

use Eloquent;

class Serie extends Eloquent {

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'image',
        'text'
    ];

    /**
     * Table used for series
     *
     * @var string
     */
    protected $table = 'series';

    /**
     * Creating a new serie
     *
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