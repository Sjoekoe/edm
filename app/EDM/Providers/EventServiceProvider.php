<?php  namespace EDM\Providers;
  
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider {

    /**
     * Register EDM event listeners.
     *
     * @return void
     */
    public function register() {
        $this->app['events']->listen('EDM.*', 'EDM\Handlers\EmailNotifier');
    }
}