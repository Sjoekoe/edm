<?php

use EDM\Artist\ArtistRepository;
use EDM\Artist\CreateArtistCommand;
use EDM\Forms\CreateArtistForm;
use Laracasts\Flash\Flash;

class ArtistsController extends \BaseController {

    /**
     * @var EDM\Forms\CreateArtistForm
     */
    private $createArtistForm;
    /**
     * @var EDM\Artist\ArtistRepository
     */
    private $artistRepository;

    /**
     * @param CreateArtistForm            $createArtistForm
     * @param EDM\Artist\ArtistRepository $artistRepository
     */
    function __construct(CreateArtistForm $createArtistForm, ArtistRepository $artistRepository) {
        $this->createArtistForm = $createArtistForm;
        $this->artistRepository = $artistRepository;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$artists = $this->artistRepository->getAllAlphabetic();

        return View::make('admin.artist.index', compact('artists'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.artist.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->createArtistForm->validate(Input::all());

        extract(Input::only('name', 'website', 'bio', 'label', 'promomail'));

        $artist = $this->execute(
            new CreateArtistCommand($name, $website, $bio, $label, $promomail)
        );

        Flash::success('The artist \''.$artist->name.'\' was created');

        return Redirect::back();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
