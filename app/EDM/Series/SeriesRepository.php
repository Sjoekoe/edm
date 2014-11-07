<?php namespace EDM\Series;

use EDM\Series\Serie;

class SeriesRepository {

    /**
     * Persist a serie
     *
     * @param Serie $serie
     *
     * @return mixed
     */
    public function save(Serie $serie) {
        return $serie->save();
    }

    /**
     * Create a slug by the serie name
     *
     * @param $input
     *
     * @return string
     */
    public function createSlug($input) {
        return strtolower(str_replace(' ', '-', $input));
    }

    /**
     * Get a paginated list of all the series
     *
     * @param int $limit
     *
     * @return mixed
     */
    public function getPaginated($limit = 25) {
        return Serie::latest()->paginate($limit);
    }
} 