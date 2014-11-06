<?php  namespace EDM\Files;


use Illuminate\Support\Facades\File;

class FilesRepository {

    public function handleImage($file, $model, $id) {

        $extension  = $file->getClientOriginalExtension();
        $path       = '/images/uploads/' . $model . '/' . $id;
        $filename   = str_random(12);
        //$pathToFile = public_path().$path . '/' . $filename . '.' . $extension;

        File::makeDirectory(public_path().$path, 0775, true);

        $file->move(public_path().$path, $filename.'.'.$extension);

        $file->pathName = $path.'/'.$filename.'.'.$extension;

        return $file;
    }
} 