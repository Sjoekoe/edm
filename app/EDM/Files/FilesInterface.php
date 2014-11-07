<?php   namespace EDM\Files;

interface FilesInterface {

    /**
     * Handle the file
     *
     * @param $file
     * @param $model
     * @param $id
     *
     * @return mixed
     */
    public function handle($file, $model, $id);
} 