<?php  namespace EDM\Artist;

class ArtistRepository {

    /**
     * Persist the artist
     *
     * @param Artist $artist
     *
     * @return mixed
     */
    public function save(Artist $artist) {
        return $artist->save();
    }

    /**
     * Get an alphabetical list of all the artists
     *
     * @param int $limit
     *
     * @return mixed
     */
    public function getAllAlphabetic($limit = 25) {
        return Artist::orderBy('name', 'asc')->paginate($limit);
    }

    /**
     * Create a slug by the artist name
     *
     * @param $input
     *
     * @return string
     */
    public function createSlug($input) {
        return strtolower(str_replace(' ', '-', $input));
    }
} 