<?php

use EDM\Artist\ArtistRepository;
use EDM\Files\FilesRepository;
use EDM\Forms\CreateSeriesForm;
use EDM\Series\SeriesRepository;
use Laracasts\Flash\Flash;
use EDM\Series\CreateSerieCommand;

class SeriesController extends \BaseController {

    /**
     * @var EDM\Forms\CreateSeriesForm
     */
    private $seriesForm;
    /**
     * @var EDM\Files\FilesRepository
     */
    private $filesRepository;
    /**
     * @var EDM\Artist\ArtistRepository
     */
    private $artistRepository;
    /**
     * @var EDM\Series\SeriesRepository
     */
    private $seriesRepository;

    function __construct(CreateSeriesForm $seriesForm, FilesRepository $filesRepository, ArtistRepository $artistRepository, SeriesRepository $seriesRepository) {
        $this->seriesForm       = $seriesForm;
        $this->filesRepository  = $filesRepository;
        $this->artistRepository = $artistRepository;
        $this->seriesRepository = $seriesRepository;
    }

    /**
     * Display a listing of the resource.
     * GET /series
     *
     * @return Response
     */
    public function index() {
        $series = $this->seriesRepository->getPaginated();

        return View::make('admin.series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     * GET /series/create
     *
     * @return Response
     */
    public function create() {
        return View::make('admin.series.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /series
     *
     * @return Response
     */
    public function store() {
        $this->seriesForm->validate(Input::all());

        extract(Input::only('name', 'image', 'text'));

        $this->execute(new CreateSerieCommand($name, $image, $text));

        Flash::success('The serie has been created');

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     * GET /series/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /series/{id}/edit
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /series/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /series/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        //
    }

}