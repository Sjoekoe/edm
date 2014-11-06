<?php  namespace EDM\Artist;
  
class ArtistRepository {

    public function save(Artist $artist) {
        return $artist->save();
    }

    public function getAllAlphabetic($limit = 25) {
        return Artist::orderBy('name', 'asc')->paginate($limit);
    }

    public function createSlug($input) {
        return strtolower(str_replace(' ', '-', $input));
    }
} 