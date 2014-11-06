<?php  namespace EDM\Artist;
  
use Laracasts\Commander\CommandHandler;

class CreateArtistCommandHandler implements CommandHandler {

    /**
     * @var ArtistRepository
     */
    protected $repository;

    function __construct(ArtistRepository $repository) {
        $this->repository = $repository;
    }

    /**
     * Handle the command
     *
     * @param $command
     *
     * @return mixed
     */
    public function handle($command) {

        $slug = $this->repository->createSlug($command->name);

        $artist = Artist::createArtist(
            $command->name, $slug, $command->website, $command->bio, $command->label, $command->promomail
        );

        $this->repository->save($artist);

        return $artist;
    }}