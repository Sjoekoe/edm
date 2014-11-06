<?php namespace EDM\Series;

use EDM\Series\Serie;

class SeriesRepository {
    public function save(Serie $serie) {
        return $serie->save();
    }

    public function createSlug($input) {
        return strtolower(str_replace(' ', '-', $input));
    }

    public function getPaginated($limit = 25) {
        return Serie::latest()->paginate($limit);
    }
} 