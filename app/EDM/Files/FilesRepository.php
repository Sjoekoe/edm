<?php  namespace EDM\Files;


use Illuminate\Support\Facades\File;

class FilesRepository {

    /**
     * Handle an image and persist it to the storage
     * 
     * @param $file
     * @param $model
     * @param $id
     *
     * @return mixed
     */
    public function handleImage($file, $model, $id) {

        $extension  = $file->getClientOriginalExtension();
        $path       = '/images/uploads/' . $model . '/' . $id;
        $filename   = str_random(12);

        File::makeDirectory(public_path().$path, 0775, true);

        $file->move(public_path().$path, $filename.'.'.$extension);

        $file->pathName = $path.'/'.$filename.'.'.$extension;

        return $file;
    }
} 