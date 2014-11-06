<?php namespace EDM\Core;

use Illuminate\Support\Facades\App;

trait CommandBus {

    /**
     * Executes the command
     *
     * @param $command
     * @return mixed
     */
    public function execute($command) {
        return $this->getCommandBus()->execute($command);
    }

    /**
     * Fetch the command bus
     *
     * @return mixed
     */
    public function getCommandBus() {
        return App::make('Laracasts\Commander\CommandBus');
    }
}