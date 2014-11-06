<?php namespace EDM\Series;
use EDM\Artist\ArtistRepository;
use EDM\Files\FilesRepository;
use Laracasts\Commander\CommandHandler;
use EDM\Series\SeriesRepository;

class CreateSerieCommandHandler implements CommandHandler {

    /**
     * @var \EDM\Artist\ArtistRepository
     */
    private $artistRepository;
    /**
     * @var \EDM\Files\FilesRepository
     */
    private $filesRepository;
    /**
     * @var \SeriesRepository
     */
    private $seriesRepository;

    function __construct(ArtistRepository $artistRepository, FilesRepository $filesRepository, SeriesRepository $seriesRepository) {
        $this->artistRepository = $artistRepository;
        $this->filesRepository = $filesRepository;
        $this->seriesRepository = $seriesRepository;
    }

    /**
     * Handle the command
     *
     * @param $command
     *
     * @return mixed
     */
    public function handle($command) {
        $slug = $this->artistRepository->createSlug($command->name);

        $serie = Serie::createSerie(
            $command->name, $slug, $command->image, $command->text
        );

        $this->seriesRepository->save($serie);

        $image = $this->filesRepository->handleImage($command->image, 'Serie', $serie->id);

        $serie->image = $image->pathName;

        $this->seriesRepository->save($serie);

        return $serie;
    }}