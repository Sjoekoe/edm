<?php  namespace EDM\Artist;

use Eloquent;

class Artist extends Eloquent {

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'website',
        'bio',
        'label',
        'promomail'
    ];

    /**
     * @var string
     */
    protected $table = 'artists';

    /**
     * Creates a new artist
     *
     * @param $name
     * @param $slug
     * @param $website
     * @param $bio
     * @param $label
     * @param $promomail
     *
     * @return static
     */
    public static function createArtist($name, $slug, $website, $bio, $label, $promomail) {
        $artist = new static(compact('name', 'slug', 'website', 'bio', 'label', 'promomail'));

        return $artist;
    }
} 