<?php  namespace EDM\Files;


use Illuminate\Support\Facades\File;

class Image implements FilesInterface {


    /**
     * Handle the image and persist it
     *
     * @param $file
     * @param $model
     * @param $id
     *
     * @return mixed
     */
    public function handle($file, $model, $id) {
        $extension  = $file->getClientOriginalExtension();
        $path       = '/images/uploads/' . $model . '/' . $id;
        $filename   = str_random(12);

        File::makeDirectory(public_path().$path, 0775, true);

        $file->move(public_path().$path, $filename.'.'.$extension);

        $file->pathName = $path.'/'.$filename.'.'.$extension;

        return $file;
    }
}