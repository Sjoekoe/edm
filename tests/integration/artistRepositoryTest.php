<?php

use Codeception\TestCase\Test;
use Laracasts\TestDummy\Factory as TestDummy;

class artistRepositoryTest extends Test {

    /**
     * @var \IntegrationTester
     */
    protected $repo;
    protected $tester;

    protected function _before() {
        $this->repo = $this->tester->grabService('EDM\Artist\ArtistRepository');
    }

    /** @test */
    public function it_saves_an_artist_to_the_DB() {
        $artist = TestDummy::create('EDM\Artist\Artist', [
            'name' => 'Foobar'
        ]);

        $this->repo->save($artist);

        $this->tester->seeRecord('artists', [
            'name' => $artist->name
        ]);
    }

    /** @test */
    public function it_creates_a_slug_of_the_artist_name() {
        $artist = TestDummy::create('EDM\Artist\Artist', [
            'name' => 'Foo Bar'
        ]);

        $result = $this->repo->createSlug($artist->name);

        $this->assertEquals('foo-bar', $result);
    }
}